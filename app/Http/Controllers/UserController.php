<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class UserController extends Controller
{
    //
    public function index(){
        return view('perfil2');
    }
    public function editUser(Request $request){
        $fieldCreate= [
            'name'=> 'required',
            'lastname' =>'required',
            'email'=>'required|email',
            'telefono'=>'required',
        ];
        $messageError=[
            'required' =>'Este campo es obligatorio',
            'email'=>'Debe ser email'
        ];
        $validacion = Validator::make($request->all(),$fieldCreate,$messageError);
        if($validacion->fails()){
            $errorRegisterFailed = "No se actualizar "; 
            return back()->withErrors($validacion,'productRegisterForm')->with('registerFailed',$errorRegisterFailed)->withInput();
        }
        auth()->user()->update(
            [
            'use_name'=>$request->name,
            'use_apellido'=>$request->lastname,
            'email'=>$request->email,
            'use_tel'=>$request->telefono
            ]);
        return back()->with('updateSuccess',"Actualizado correctamente");
    }

    public function misPasajes(){
        return view('misPasajes');
    }
    public function downloadPassage($id){

        $valor = auth()->user()->userCompra->where('id',$id)->first();
        $pdf = app('dompdf.wrapper');
        $data = [
            'compra' => $valor
        ];          
        $pdf = \PDF::loadView('pdf.pdfPassage', $data);        
        return $pdf->stream('mi-archivo.pdf');        

    }
}
