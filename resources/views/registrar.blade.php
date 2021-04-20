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
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstname" placeholder="Nombres *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastname" placeholder="Apellidos *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="dni" placeholder="DNI *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user" placeholder="Nombre de Usuario*" value="" />
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
                                            <input type="email" class="form-control" placeholder="Correo electronico *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Teléfono *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Contraseña *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirme contraseña *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Registrar"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    
@endsection

