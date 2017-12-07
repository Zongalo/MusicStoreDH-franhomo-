@extends('layouts.app')
@section('content')
<section>
    <fieldset class="inicio-sesion">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 sing-in-master">
                    <img src="images/logo.png" alt="logotipo" class="logo sing-in">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('adminRegister') }}">
                                {{ csrf_field() }}

                                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre completo</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="sing-in">E-Mail Address</label>

                                        <input id="email" type="text" class="form-control form-control-sing" name="email" placeholder="correo@ejemplo.com" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                  	
                  	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"></label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"></label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Contraseña">
                            </div>
                        </div>

                                <div class="form-group">
                                    <label for="pais">Pais:</label>
                                    <select forname="pais" id="pais"></select>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="terminos">Acepto T&C
                                    <br>
                                    <button class="btn btn-primary" type="submit">Registrar</button>
                                </div>        
                        </form>
                    </div>
                    </div>

                </div>
            </div>

        </div>
    </fieldset>
</section>
@endsection
