@extends('masterPage')

@section('main')
<main>
<section>
<fieldset class="inicio-sesion">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 sing-in-master">

            <img src="/images/logo.png" alt="logotipo" class="logo sing-in">
           
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <label for="name" class="sing-in">Nombre completo: </label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre y Apellido">

                             @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                 </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <label for="email" class="sing-in">E-Mail: </label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="correo@ejemplo.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <label for="password" class="sing-in">Contraseña: </label>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="su contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">

                            <label for="password-confirm" class="sing-in">Confirmar Contraseña: </label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="confirme su contraseña">

                        </div>

                        <div class="form-group">
                        <input type="checkbox" name="terminos"> Acepto T&C 
                        </div>

                        <div class="form-group">
                        <button class="btn btn-primary" type="submit">Registrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </fieldset>
</section>
</main>
@endsection
