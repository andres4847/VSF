<div class="row">
    <div class="col-sm-12">

        @foreach($proyectos as $proyecto)
                <div class="cause-post">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="cause-thumb">
                                <a href="{!!action( 'ProyectosController@show',$proyecto->id)!!}">
                                    {{ Html::image('images/proyectos/'.$proyecto->link_imagen) }}
                                </a>                                                     
                                <div class="hover">
                                    <div class="inner">
                                        <a href="/dona" class="btn btn-accent">Dona ahora</a>                                                           
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="cause-content">                                                 
                                <h3>{!!link_to_action('ProyectosController@show',$title = $proyecto->titulo,$parameters=$proyecto->id,$attributes=['class'=>$proyecto->color])!!}</h3>
                                <span class="line-seperator"></span>
                                <p>{!!$proyecto->descripcion!!}
                                </p>
                                </div>
                            </div>
                        </div>
                </div> 
        @endforeach  

    </div>
</div>   

    {{ $proyectos->links() }}     