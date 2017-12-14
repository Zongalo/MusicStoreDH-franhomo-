@extends('masterPage')

@section('main')
<main>
<section>
<fieldset class="inicio-sesion">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 log-in-master">
          <img src="/images/logo.png" alt="logotipo" class="logo">
              
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <label for="email" class="log-in">E-Mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="correo@ejemplo.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="log-in">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="su contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <input class="log-in" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <p class="inputlogin"> Recordarme </p>
                        </div>

                         <div class="form-group">
                                <a href="{{ route('password.request') }}" class="Olvide">Olvide mi contraseña</a>
                        </div>
                        
                        <button class="btn btn-primary log-in" type="submit">Ingresar</button>                
                
        </form>
        </div>
    </div>
</div>
</fieldset>
</section>
</main>
@endsection
