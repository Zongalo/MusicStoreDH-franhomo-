@extends('masterPage')

<main>
    <section>
        <fieldset class="inicio-sesion">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 log-in-master">
             <img src="images/logo.png" alt="logotipo" class="logo">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="log-in">E-mail</label>

                                <input id="email" type="text" placeholder="correo@ejemplo.com" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="log-in">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="su contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="form-group">
                            <input type="checkbox" class="checkbox" class="form-control" name="terminos" {{ old('remember') ? 'checked' : '' }}><p class="inputlogin">Remember Me</p>
                        </div>

                        <div class="form-group">
                            <a class="Olvide" href="{{ route('password.request') }}">Forgot Your Password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary los-in" >Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
