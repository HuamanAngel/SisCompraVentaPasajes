<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Auth;

class UserAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CrearCliente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CrearCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fieldCreate= [
            'name'=> 'required',
            'lastName' =>'required',
            'dni'=>'required',
            'tel'=>'required',
            'gender'=>'required',
        ];
        $messageError=[
            'required' =>'Este campo :attribute es obligatorio',
        ];
        $validacion = Validator::make($request->all(),$fieldCreate,$messageError);
        if($validacion->fails()){
            $errorRegisterFailed = "No se pudo crear por las siguientes razones"; 
            return back()->withErrors($validacion,'clientRegisterForm')->with('registerFailed',$errorRegisterFailed)->withInput();
        }

        if( ($request->email ==null || $request->email =='') || ($request->user ==null || $request->user =='') ){
            $faker = \Faker\Factory::create();
            User::create([
                'use_name'=>$request->name,
                'use_apellido'=>$request->lastName,
                'use_dni' => $request->dni,
                'use_tel'=>$request->tel,
                'use_sexo' => $request->gender,
                'password' => Hash::make(Str::random(22)),
                'user' => Str::random(10),
                'email'=>$faker->unique()->email,
                ]);    

        }else{
            User::create([
                'use_name'=>$request->name,
                'use_apellido'=>$request->lastName,
                'use_dni' => $request->dni,
                'use_tel'=>$request->tel,
                'use_sexo' => $request->gender,
                'password' => Hash::make(Str::random(22)),
                'user' => $request->user,
                'email'=>$request->email,
                ]);    
        }

        return back()->with('registerSuccess',"Cliente creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $allUser = User::select('use_name','id',
        'use_apellido',
        'use_dni',
        'user',
        'email',
        'use_tel',
        'use_sexo',
        )->paginate(20);
        return view('ModificarCliente',compact('allUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $fieldCreate= [
            'dni'=> 'required',
            'name' =>'required',
            'lastname'=>'required',
            'email'=>'required',
            'tel'=>'required',
            'sexo'=>'required',
        ];
        $messageError=[
            'required' =>'Este campo :attribute es obligatorio',
        ];
        $validacion = Validator::make($request->all(),$fieldCreate,$messageError);
        if($validacion->fails()){
            return response()->json(['error'=>1,'errorInfo'=>'No se pudo editar porque algun campo no esta lleno']);
        }


        User::where('id','=',$request->id)->update([
            'use_dni'=>$request->dni,
            'use_name'=>$request->name,
            'use_apellido'=>$request->lastname,
            'email'=>$request->email,
            'use_tel'=>$request->tel,
            'use_sexo'=>$request->sexo,
    
        ]);
        return response()->json($request);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($userAdminClient)
    {

        $userDelete = User::findOrFail($userAdminClient);
        $prodDeleteNamcateDelete = $userDelete->use_dni;
        $responseDelete = "El cliente con DNI ".strtoupper($prodDeleteNamcateDelete)." ha sido borrado correctamente";
        $userDelete->delete();
        return back()->with('userDniDelete',$responseDelete);
    }
    public function delete(){
        return view('EliminarCliente');
    }
    public function fetch_dni(Request $request){
        if($request->json()){
            if($request->numberDni == null || $request->numberDni==""){
                $allUser = User::select('use_name','id',
                'use_apellido',
                'use_dni',
                'user',
                'email',
                'use_tel',
                'use_sexo',
                )->paginate(20);
                return view('partials.clientContentModi',compact('allUser'));     
    
            }else{
                $allUser = User::select('use_name','id',
                'use_apellido',
                'use_dni',
                'user',
                'email',
                'use_tel',
                'use_sexo',
                )->where('use_dni','LIKE',"%{$request->numberDni}%")->paginate(20);
                return view('partials.clientContentModi',compact('allUser'));     
    
            }
        }
        return "No se pudo procesar la solicitud";
    }
}
