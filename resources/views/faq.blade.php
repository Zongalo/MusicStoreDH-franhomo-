        @extends('masterPage')

        @section('main')

         <main>

            <div class="Desktop">


            <div class="container-fluid body-main-page body-fuq">
                    <section class="banner">
                        <img src="images/logo.png" alt="logotipo" class="logo logo-main">
                        <img src="images/img-banner.jpg" alt="banner" class="banner-main">
                        <div class="nav-header">
                        <nav class="header-nav">
                            <ul class="main-nav">
                                <li class="header-nav"> <a href="index">HOME</a></li>
                                <li class="header-nav"> <a href="categorias">CATEGORIAS</a></li>
                                <li class="header-nav"> <a href="faq">FAQ</a></li>
                                <li class="header-nav"> <a href="#">CONTACTO</a></li>
                            </ul>
                        </nav>
                        </div>
                    </section>


                    <!-- Título Novedades -->
                    <div class="container body-main">
                    </div>
            </div>
                   


            <section>
                <fieldset class="faq">
                    <div class="col-md-4 col-md-offset-4 faq-master">
                        <div class="faq-head">
                        <div class="faq-header">
                            <p class="faq-title-p"> Preguntas frequentes sobre </p>
                            <strong class="h1">MusicStore</strong class="h1">
                        </div>
                        </div>

                    <div class="columna-fuq-line">

                        <div><strong  class="faq"> Cómo puedo registrarme en Music store?</strong></div>
                         <p class="faq">¡Es muy sencillo! Sólo tienes que ir a <a class="a-fuq" href="registracion">"Crear una cuenta"</a> e introducir los datos que te solicitan.</p>

                    </div>


                    <div class="faq">

                    

                    <div class="columna-fuq-1">

                         <div><strong  class="faq"> Cómo puedo pagar mi compra?</strong></div>
                         <p class="faq">Para realizar el pago de los productos puedes elegir entre diferentes métodos de pago: Tarjeta de credito, debito, efectivo o deposito bancario</p>

                         <div><strong  class="faq"> Cómo contacto con el departamento de Atención al Cliente?</strong></div>
                         <p class="faq">En Music store  ponemos a tu disposición varias vías de contacto:
                         Por teléfono, en el (+54) 0800-555-2323 te atenderemos encantados de Lunes a Viernes, entre las 9,30h y las 19h.
                         Enviándonos un correo electrónico a info@musicstore.com.</p>

                         <div><strong  class="faq"> Donde Estamos?</strong></div>
                         <p class="faq">
                         
                         Encontra nuestro local en: 88 Colin P Kelly Jr St
                         San Francisco, CA 94107
                         United States.</p>

                    </div>

                    <div class="columna-fuq-2">

                         <div><strong  class="faq"> Cuanto tiempo tengo que esperar para recibir mi pedido?</strong></div>
                         <p class="faq">Depende de la modalidad de envío seleccionada. Teniendo en cuenta que existen varias modalidades de acuerdo con las características de cada producto y la localización geográfica, el tiempo de entrega puede oscilar generalmente entre un mínimo de 24 horas y un máximo de 10 días hábiles.</p>

                         <div><strong  class="faq"> Es seguro comprar online en Music store?</strong></div>
                         <p class="faq">Comprar en musicstore.com es seguro.
                         Sus datos personales son tratados total seguridad y no son proporcionados bajo ningún concepto a terceros conforme a la Ley de Protección de Datos de Caracter Personal.</p>
                        </div>

                    </div>

                    </div>
                </fieldset>
            </section>
        </div>


        <div class="movile">
            
            <section>
            <fieldset class="faq">
                <div class="col-md-4 col-md-offset-4 faq-master">
                    <div class="faq-head">
                    <img src="images/logo.png" alt="logotipo" class="logo-faq">
                    <div class="faq-header">
                        <strong class="h1movile">F.A.Q</strong class="h1movile">
                    </div>
                    </div>
                    <ul class="faq">
                     <li><strong  class="faq"> Cómo puedo registrarme en Music store?</strong></li>
                     <p class="faq">¡Es muy sencillo! Sólo tienes que ir a "Crear una cuenta" e introducir los datos que te solicitan.</p>
                     <li><strong  class="faq"> Cómo puedo pagar mi compra?</strong></li>
                     <p class="faq">Para realizar el pago de los productos puedes elegir entre diferentes métodos de pago: Tarjeta de credito, debito, efectivo o deposito bancario</p>
                     <li><strong  class="faq"> Cómo contacto con el departamento de Atención al Cliente?</strong></li>
                     <p class="faq">En Music store  ponemos a tu disposición varias vías de contacto:
                     Por teléfono, en el (+54) 0800-555-2323 te atenderemos encantados de Lunes a Viernes, entre las 9,30h y las 19h.
                     Enviándonos un correo electrónico a info@musicstore.com.</p>
                     <li><strong  class="faq"> Cuanto tiempo tengo que esperar para recibir mi pedido?</strong></li>
                     <p class="faq">Depende de la modalidad de envío seleccionada. Teniendo en cuenta que existen varias modalidades de acuerdo con las características de cada producto y la localización geográfica, el tiempo de entrega puede oscilar generalmente entre un mínimo de 24 horas y un máximo de 10 días hábiles.</p>
                     <li><strong  class="faq"> Es seguro comprar online en Music store?</strong></li>
                     <p class="faq">Comprar en musicstore.com es seguro.
                     Sus datos personales son tratados total seguridad y no son proporcionados bajo ningún concepto a terceros conforme a la Ley de Protección de Datos de Caracter Personal.</p>
                    </ul>
                </div>
            </fieldset>
        </section>

        </div>

        </main>
@endsection
