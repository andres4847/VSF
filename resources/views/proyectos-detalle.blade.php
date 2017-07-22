@extends('layouts.principal')

@section('content')

    @include('layouts.partial.titulo', ['titulo' => 'Nuestros Proyectos']) 

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content cause-single">
                        <div class="row">                           
                            <div class="col-sm-12">
                                   <div id="container_detalle">
                                      <div class="cause-image">    
                                         {{ Html::image('images/proyectos/'.$proyecto->link_imagen_detalle) }}
                                      </div>
                                      <div class="cause-content">
                                         <div class="cause-meta">                                         
                                             {!!link_to_action('FrontController@dona',
                                                $title='Dona ahora', 
                                                $parameters=array(),
                                                $attributes=array('class' => 'btn btn-accent'))!!}
                                         </div>
                                         <div class="cause-holder">
                                            <div class="progress">
                                               <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                            </div>
                                         </div>
                                         <h3>{!! $proyecto->titulo !!}</h3>

                                         <span class="line-seperator"></span>
                                            {!! $proyecto->general !!}
                                         <h5>Objetivos</h5>
                                            {!! $proyecto->objetivo !!}                                        
                                         <h5>Actividades</h5>                                         
                                             {!! $proyecto->actividad !!}
                                         <h5>Perfil del Voluntario</h5>
                                             {!! $proyecto->perfil_voluntario !!}                                         
                                      </div>
                                     </div>
                            </div>                           
                        </div>                      
                    </div>
                </div>
            </div>
          </div>
    </section>

@endsection