@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
<link href="{{ asset('css/registrar.css') }}" rel="stylesheet">
@endsection



@section('content')



<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="img/bus.png" alt=""/>
            <h3>Busvid 19</h3>
            <p>Esperamos que su registro sea rapido y sencillo :)</p>
            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Nuevo Usuario</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombres *" value="{{ old('name') }}" required autofocus autocomplete="" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" placeholder="Apellidos *" value="" required />
                                </div>         
                                <div class="form-group">
                                    <input type="number" class="form-control" name="dni" placeholder="DNI *" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user" placeholder="Nombre de Usuario*" value="" required />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="Masculino" checked>
                                            <span> Masculino </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="Femenino">
                                            <span>Femenino </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="No Especificado">
                                            <span>No deseo contestar </span> 
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo electronico *"  name="email" value="{{ old('email') }}" required autocomplete="email" />

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
    

                                </div>
                                <div class="form-group">
                                    <input type="number" minlength="10" maxlength="10" name="tel" class="form-control" placeholder="Teléfono *" value="" />
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña *" name="password" required autocomplete="new-password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"  placeholder="Confirme contraseña *" name="password_confirmation" required autocomplete="new-password" />        
                                </div>
                                <input type="submit" class="btnRegister"  value="Registrar"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
