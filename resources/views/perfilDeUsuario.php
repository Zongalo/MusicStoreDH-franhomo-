@extends('masterPage')

@section('main')

    <fieldset class="inicio-sesion">

          <div class="col-md-4 col-md-offset-4 perfil-master">

              <div class="title-perfil">
                
                <img src="css/images/logo.png" alt="logotipo" class="logo perfil">
                <div class="perfil-title">
                    <div class="form-group">
                    <div class="row">
                    <strong class="perfil-title">MusicStore:</strong><h3 class="perfil-title">Perfil de {{ Auth::user()->name }} ></h3>
                    </div>
                    </div>
                </div>
              </div>
            
          <div class="perfil-cuerpo">

                <div class="cuerpo-title">
                    <strong class="cuerpo-title">Datos Personales:</strong>
                </div>

                <div class="cuerpo-perfil">
                   <label class="perfil-cuerpo">Nombre: </label>
                   <strong class="perfil-cuerpo"> {{ Auth::user()->name }} </strong>
                </div>

                <div class="cuerpo-perfil">
                    <label class="perfil-cuerpo">Email: </label>
                    <strong class="perfil-cuerpo"> {{ Auth::user()->email }} </strong>
                </div>

                <div class="cuerpo-perfil">
                    <label class="perfil-cuerpo">Pais: </label>
                    <strong class="perfil-cuerpo">  </strong>
                </div>

          </div>
      
          </div>

      </fieldset>
  </div>
	</section>
	</main>
