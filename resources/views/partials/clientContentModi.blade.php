<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">DNI</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Nombres</th>
        <th scope="col">Sexo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody class="bg-white">



@if($allUser->count()>0 || $allUser!=null)
    
@foreach($allUser as $user)
                      
@if(Auth::user()->id != $user->id)
  <tr class="trClientRegister">

        <input type="hidden" class="idUser" value="{{ $user->id }}">
        <td scope="row">
            <label for="" class="classDni">
                {{ $user->use_dni }}
            </label>

            <input type="hidden" class="inputDni form-control" required style="width: 75px !important" value="{{ $user->use_dni }}">
        </td>
        <td>
            <label for="" class="classApellido">
                {{ $user->use_apellido }}
            </label>
            <input type="hidden" class="inputApellido form-control" required style="width: 75px !important" value="{{ $user->use_apellido }}">
        </td>
        <td>
            <label for="" class="className">
                {{ $user->use_name }}
            </label>
            <input type="hidden" class="inputName form-control" required style="width: 75px !important" value="{{ $user->use_name }}">
            
        </td>
        <td>
            <label for="" class="classSexo">
                {{ $user->use_sexo }}
            </label>
            <select class="inputSexo form-control button-hidden" required>
                @if($user->use_sexo == "Masculino")
                    <option value="Masculino" selected>Masculino</option>
                @else
                    <option value="Masculino">Masculino</option>
                @endif

                @if($user->use_sexo == "Femenino")
                    <option value="Femenino" selected>Femenino</option>
                @else
                    <option value="Femenino">Femenino</option>

                @endif

                @if($user->use_sexo == "No Especificado")
                    <option value="No Especificado" selected>No Especificado</option>
                @else
                    <option value="No Especificado">No Especificado</option>
                @endif

            </select>
            {{-- <input type="hidden" class="inputSexo form-control" required style="width: 75px !important" value="{{ $user->use_sexo }}"> --}}
        </td>
        <td>
            <label for="" class="classTel">
                {{ $user->use_tel }}
            </label>
            <input type="hidden" class="inputTel form-control" required style="width: 85px !important" value="{{ $user->use_tel }}">
        </td>
        <td>
            <label for="" class="classEmail">
                {{ $user->email }}
            </label>
            <input type="hidden" class="inputEmail form-control" required style="width: 100px !important" value="{{ $user->email }}">
        </td>
        <td>
        <div class="d-flex justify-content-center action-user">
            <button class="m-1 btn btn-success btn-submit-edit-client" data-button-edit="0" type="button">Editar</button>                          
            <button class="m-1 btn btn-danger btn-cancel-edit button-hidden" type="button">Cancelar</button>                          
        </div>
        <div class="d-flex justify-content-center">
            <form action="{{ route('userAdminClient.destroy',$user->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="m-1 btn btn-danger" type="submit">Eliminar</button>
            </form>
        </div>
        </td>
  </tr>

@else
    
@endif
@endforeach 
@else
<h4>Aun sin clientes :()</h4>    
@endif
</tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $allUser->render() }}
  </div>

  {{-- Genera la edicion de registros --}}
