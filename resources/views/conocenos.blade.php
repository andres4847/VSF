@extends('layouts.principal')

    @section('content')

    @include('layouts.partial.titulo') 

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="bxslider">
                        <li>
                            <img src="images/conocenos/conocenos1.png" alt="">
                        </li>
                        <li>
                            <img src="images/conocenos/conocenos2.png" alt="">
                        </li>
                        <li>
                            <img src="images/conocenos/conocenos3.png" alt="">
                        </li>
                         <li>
                            <img src="images/conocenos/conocenos4.png" alt="">
                        </li>
                         <li>
                            <img src="images/conocenos/conocenos5.png" alt="">
                        </li>
                         <li>
                            <img src="images/conocenos/conocenos6.png" alt="">
                        </li>
                         <li>
                            <img src="images/conocenos/conocenos7.png" alt="">
                        </li>
                        <li>
                            <img src="images/conocenos/conocenos8.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>¿Quienes somos ? Nuestra historia</h4>
                    <span class="line-seperator"></span>
                    <p>Voluntarios Sin Fronteras comenzó a trabajar en julio de 2004, cuando fuimos anfitriones de un contingente de voluntarios brasileños que vino a conocer la Argentina y a hacer trabajo voluntario en la ciudad de Buenos Aires. Desde entonces quedó en cada uno de nosotros la idea de formar una Organización Sin Fines de Lucro en la que pudiéramos suministrar apoyo, información, relacionamiento y actividades a todos aquellos que quisieran hacer algún tipo de voluntariado internacional. Al año siguiente, cuando nuevamente tuvimos la oportunidad de trabajar con la Escola de Voluntarios de San Pablo, Brasil, nos quedó muy en claro que el intercambio entre pueblos es algo muy enriquecedor para todos, inclusive para los beneficiarios de las organizaciones en donde este se producía.</p>

                    <a class="read-more" role="button" data-toggle="collapse" href="#collapseHistoria" aria-expanded="false" aria-controls="collapseHistoria">Leer mas &rarr;</a>
                    <div class="collapse" id="collapseHistoria">
                        <div>
                            Más adelante, en octubre de 2005, nosotros mismos tuvimos la oportunidad de ir a hacer voluntariado en Brasil. Así comprobamos que el camino no estaba errado, que verdaderamente hay mucho por aprender cuando uno tiene una experiencia de este tipo, aunque sea un voluntario o un dirigente de varios años de experiencia en el trabajo social. Comenzamos a hacer contacto con diferentes organizaciones de la Sociedad Civil y nos dimos cuenta de que nuestro público principal serían las organizaciones como tales y no las personas independientes que quisieran hacer voluntariado de forma individual y espontánea. De esta manera, podríamos hacer un trabajo más efectivo, acompañando a las organizaciones a desarrollarse en un nuevo espacio en el que pudieran viajar, intercambiar experiencias y formas de trabajo, y ayudar de una forma más valiosa a las comunidades en las que trabajan. Queremos que las personas de las organizaciones crezcan y aprendan, trabajando y conviviendo con otras comunidades de otros países que tienen su propia problemática y sus propias soluciones originales.</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ************* INICIO PORQUE HACEMOS LO QUE HACEMOS ***************** -->
    <section class="features">
        <div class="container">
            <div class="row section-header">
                <div class="col-sm-12">
                    <h3>Porque hacemos lo que hacemos</h3>
                    <span class="line-seperator"></span>
                    <!--<p>se puede agregar texto</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-post">
                        <div class="hover"></div>
                        <div class="feature-head">
                            <div class="feature-icon">
                                <!-- <i class="fa fa-globe"></i> se puede agregar icono -->
                                <div class="triangle2"></div>
                            </div>
                            <div class="feature-title">
                                <h4>Nuestra Misión</h4>
                            </div>
                        </div>
                         <div class="feature-content">
                            <p>Somos una asociación civil, que busca potenciar al voluntario para el desarrollo de las comunidades con las que interactúa, </p>  
                            <a class="read-more" role="button" data-toggle="collapse" href="#collapseMision" aria-expanded="false" aria-controls="collapseMision">Leer mas &rarr;</a>
                            <div class="collapse" id="collapseMision">
                                <div>brindándole las herramientas necesarias para poder lograrlo. Promoviendo la tolerancia y el entendimiento de las distintas realidades.</div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-post2">
                        <div class="feature-head">
                            <div class="feature-icon">
                                <!-- <i class="fa fa-umbrella"></i> -->
                                <div class="triangle2"></div>
                            </div>
                            <div class="feature-title">
                                <h4>Nuestra Visión</h4>
                            </div>
                        </div>
                        <div class="feature-content">
                            <p>Ser un medio para que las comunidades involucradas sean el factor de cambio para el bienestar de las generaciones futuras.</p><br>

                           <!-- <a class="read-more" role="button" data-toggle="collapse" href="#collapseVision" aria-expanded="false" aria-controls="collapseVision">Leer mas &rarr;</a>
                            <div class="collapse" id="collapseVision">
                                <div>intercambio de voluntarios, integrando para ello organizaciones que desarrollen Proyectos Sociales en al menos 15 países del mundo. Alcanzar un alto grado de desarrollo organizacional, difundiendo nuestras ideas y desarrollando acciones que promuevan el intercambio de voluntarios y sus organizaciones en todas sus formas.</div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-post3">
                        <div class="feature-head">
                            <div class="feature-icon">
                                <!-- <i class="fa fa-group"></i> -->
                                <div class="triangle2"></div>
                            </div>
                            <div class="feature-title">
                                <h4>Nuestros Valores</h4>
                            </div>
                        </div>
                        <div class="feature-content">
                            <ul>
                                <li>La promoción de la pluralidad como mecanismo de acercamiento de los países y sus culturas.
                                </li>
                               
                            </ul>
                            <a class="read-more" role="button" data-toggle="collapse" href="#collapseValores" aria-expanded="false" aria-controls="collapseValores">Leer mas &rarr;</a>
                            <div class="collapse" id="collapseValores">
                                <ul>
                                     <li>La cooperación de los individuos y las organizaciones que desarrollan proyectos sociales.</li>
                                    <li>La solidaridad entre los voluntarios del mundo.</li>
                                    <li>El incremento del saber teórico y práctico sobre voluntariado y sociedad civil.</li>
                                    <li>La calidad total en la gestión de las organizaciones.
                                    </li>

                                    <li>La transparencia en la gestión de las organizaciones y sus proyectos.</li>
                                    <li>La equidad, el desarrollo humano y la inclusión social en todas las regiones del planeta.</li>
                                    <li>El fortalecimiento y el respecto real de los derechos humanos, en su sentido más amplio.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************* FIN PORQUE HACEMOS LO QUE HACEMOS  ***************** -->

@endsection