<div id="container_eventos"> 
        @foreach($eventos as $evento)
            <div class="event-post">
                <div class="row">
                        <div class="col-sm-4">
                            <div class="event-details">
                                <p><i class="fa fa-calendar"></i>{{Date::createFromFormat('Y-m-d H:i:s', $evento->fechaEvento)->format('l j F, Y')}}</p>  
                                <p><i class="fa fa-clock-o"></i>{{date('G:i', strtotime($evento->hora))}}</p>
                                <p><i class="fa fa-map-marker"></i>{{$evento->direccion}}</p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="event-content">
                                <h3><a target="_blank" href="{{$evento->link}}">{{$evento->titulo}}</a></h3> 
                                <span class="line-seperator"></span>
                                <p>{{$evento->descripcion}}</p>
                            </div>
                        </div> 
                </div>
            </div>                             
        @endforeach
</div>
{{ $eventos->links() }}     