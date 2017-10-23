@extends('layouts.principal')

@section('page-styles')
    <!-- slider  --> 
     {{ Html::style('plugins/wowslider/engine0/style.css') }}  
@endsection

@section('content')
    <div class="bannercontainer">
        <!-- Start WOWSlider.com BODY section -->
        <div id="wowslider-container0">
            <div class="ws_images">
                <ul>
                    <li>
                        <img src="plugins/wowslider/data0/images/1.jpg" alt="Voluntarios Sin Fronteras" title="" id="wows0_0" />
                    </li>
                 
                    <li> <!-- idiomas -->
                       <a href="https://www.facebook.com/Idiomas-Sin-Fronteras-289967061035519/" target="_blank">
                           <img src="plugins/wowslider/data0/images/4.jpg" alt="idiomas" title="" id="wows0_2" />
                       </a>
                    </li>            
                    <!-- cultivando raices -->
                    <li>
                        <a href="/proyectos/12">    
                             <img src="plugins/wowslider/data0/images/5.jpg" alt="" title="" id="wows0_3" />
                         </a>
                    </li> 
                    <li> 
                        <a href="/dona">                              
                            <img src="plugins/wowslider/data0/images/6.jpg" alt="dona" title="" id="wows0_4" />
                        </a> 
                    </li>
                    <li>
                         <a href="/proyectos/11">                              
                            <img src="plugins/wowslider/data0/images/7.jpg" alt="arepora" title="" id="wows0_5" />
                        </a> 
                    </li>
                </ul>
            </div>
            <div class="ws_bullets">
                <div>
                    <a href="#" title=""><span><img src="plugins/wowslider/data0/tooltips/1.jpg" alt="Voluntarios Sin Fronteras"/>1</span></a>
                    <a href="#" title=""><span><img src="plugins/wowslider/data0/tooltips/4.jpg" alt=""/>2</span></a>
                    <a href="#" title=""><span><img src="plugins/wowslider/data0/tooltips/5.jpg" alt=""/>3</span></a>                   
                    <a href="#" title=""><span><img src="plugins/wowslider/data0/tooltips/6.jpg" alt=""/>4</span></a>
                    <a href="#" title=""><span><img src="plugins/wowslider/data0/tooltips/7.jpg" alt=""/>5</span></a>
                </div>
            </div>
           <!-- <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslider.com</a> by WOWSlider.com v8.7</div>
            <div class="ws_shadow"></div> -->
        </div>
        <!-- End WOWSlider.com BODY section -->
    </div>

    <!-- ************ INICIO IMAGENES DONA SUMATE **************** -->
    <section class="sumate-dona">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sumatedona">
                        <div class="sumatedona-thumb">
                            <img class="img-responsive" src="images/home/sumate.png">
                            <div class="hover">
                                <div class="inner">
                                    <a href="/contacto" class="btn btn-accent">Sumate</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4 class="custom">SUMATE A VOLUNTARIOS SIN FRONTERAS</h4>
                            <span class="line-seperator">  </span>
                            <p>Se parte del equipo participando de nuestros proyectos. Anotate llenando el formulario y participa de nuestra próxima charla informativa</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="sumatedona">
                        <div class="sumatedona-thumb">
                            <img class="img-responsive" src="images/home/dona.png">
                            <div class="hover">
                                <div class="inner">
                                    <a href="/dona" class="btn btn-accent">Doná</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4 class="custom">TU DONACIÓN TRANSFORMA</h4>
                            <span class="line-seperator">  </span>
                            <p>Podes realizar una donación por única vez o todos los meses. Con tu dinero estarás ayudando a transformar realidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************ FIN IMAGENES DONA SUMATE **************** -->

    <!-- ************* INICIO SUMATE/VIDEO ***************** -->
    <section class="cta">
        <!--<div class="bg-overlay"></div>
        <div class="parallax-bg" data-stellar-background-ratio="0.5" style="background-position: 50% -38px;"></div> -->
        <div class="container cta-inner">
            <div class="row">
                <div class="col-md-6">
                    <p class="classPvideo">En VSF nos regimos bajo este nuevo lema:</br>
                        JUGAR - APRENDER - CONSTRUIR </br> Mediante el juego entramos al
                         mundo de los niñ@s, permitiendonos ser parte de
                          su aprendizaje diario y ell@s del nuestro. 
                          Jugando y aprendiendo podemos construir la realidad que nos
                           rodea, no solo los niñ@s, sino los voluntari@s que participan
                            en este proceso.
                    </p>
                    <span class="line-seperator"></span>
                    <p class="text-2">¡Mirá el video y conocenos!</p>
                    <!-- <p>Se parte del equipo participando de nuestros proyectos. Anotate llenando el formulario y participá de nuestra próxima charla informativa</p> -->
                    <a href="/contacto" class="btn btn-accent">Súmate</a>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe src="https://www.youtube.com/embed/qQnK8ExDSE8" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************* FIN SUMATE/VIDEO ***************** -->

    <!-- ************* INICIO PORQUE HACEMOS LO QUE HACEMOS ***************** -->
    <section class="features">
        <div class="container">
            <div class="row section-header">
                <div class="col-sm-12">
                    <h3>Por qué hacemos lo que hacemos</h3>
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
                            <p>Ser un medio para que las comunidades involucradas sean el factor de cambio para el bienestar de las generaciones futuras.</p>
                             <br>
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

    <!-- INICIO IDIOMAS SIN FRONTERAS -->
    <section class="cta">
        <div class="container cta-inner">
            <div class="row">
                <div class="col-md-8">
                    <h3>IDIOMAS SIN FRONTERAS</h3>
                    <span class="line-seperator"></span>
                    <p class="text-2">Voluntarios Sin Fronteras apoya la iniciativa
                     “IDIOMAS SIN FRONTERAS” la cual propone
                     cursos de idiomas ¡con profesores nativos!: español para extranjeros, 
                     inglés, portugués, francés e italiano. ¡Inscribite acá!.</p>
                    <a href="/contacto" class="btn btn-accent">Inscribite</a>
                </div>
                <div class="col-md-4">
                    <img src="images/home/idioma.png">
                </div>
            </div>
        </div>
    </section>
    <!-- FIN IDIOMAS SIN FRONTERAS -->

    <!-- ************* INICIO NOS ACOMPAÑAN ***************** -->
    <section id="our-partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 donation-form">
                    <div class="section-header">
                        <h3>Nos acompañan</h3>
                        <span class="line-seperator"></span>
                    </div>
                </div>
            </div>
            <div id="partner-carousel" class="carousel slide" data-ride="carousel">

                <!-- <ol class="carousel-indicators">
                    <li data-target="#partner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#partner-carousel" data-slide-to="1"></li>
                    <li data-target="#partner-carousel" data-slide-to="2"></li>
                </ol>  -->

                <ol class="carousel-indicators">
                    <li data-target="#partner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#partner-carousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-responsive" src="images/home/empresa_1.png" alt="" />
                            </div>
                            <div class="col-sm-2">
                                <img class="img-responsive" src="images/home/empresa_2.png" alt="" />
                            </div>
                            <div class="col-sm-2">
                                <img class="img-responsive" src="images/home/empresa_7.png" alt="" />
                            </div>
                            <div class="col-sm-2">
                                <img class="img-responsive" src="images/home/empresa_3.png" alt="" />
                            </div>
                            <div class="col-sm-2">
                                <img class="img-responsive" src="images/home/empresa_4.png" alt="" />
                            </div>
                            <div class="col-sm-2">
                                <img class="img-responsive" src="images/home/empresa_5.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-responsive" src="images/home/empresa_6.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ************* FIN NOS ACOMPAÑAN ***************** -->
@endsection

@section('page-script')
    <!-- slider --> 
    {{ Html::script('plugins/wowslider/engine0/wowslider.js') }}
    {{ Html::script('plugins/wowslider/engine0/script.js') }} 

@endsection