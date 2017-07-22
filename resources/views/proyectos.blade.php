@extends('layouts.principal')

@section('content')

    @include('layouts.partial.titulo',['titulo' => 'Nuestros Proyectos']) 

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content causes-list">
                        <div class="row">
                            <div class="col-sm-12">                          
			                      <div id="causes-search" class="select-group">
			                            <div class="row">	                     
                                                <div class="col-md-4 col-md-offset-3">
                                                    <select id="tipoProyecto" name="tipoProyecto">
                                                    <option value="-1">Todos</option>
                                                    @foreach($tipo_proyectos as $item)
                                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <a id="btnBuscar" name="btnBuscar" class="btn btn-accent">Buscar</a>
                                                </div>                                          
			                            </div>
			                        </div> 
                            </div>
                        </div>
							<div class="proyectos"></div>              
                    </div>
                </div>      

            </div>

        </div>
    </section>

@endsection

@section('page-script')  
	<script>
		//PAGINACION DE PROYECTOS
		$(document).on('click','.pagination a', function(e) {
			e.preventDefault();
			var url = $(this).attr('href');		
			var selectedTipoProyecto =  $("#tipoProyecto").val();	

				$.ajax({
					type:'get',
					data: {idTipoProyecto:selectedTipoProyecto},
					dataType:'json',
					url:url,						
					success:function(data)
					{
						$('.proyectos').empty().html(data);					
					}
				});
		});

		//CARGO LISTA DE PROYECTOS
		$(document).ready(function(){
			listproyectos();    
		});

		var listproyectos = function()
		{
			$.ajax({
				type:'get',
				url:'{!! url('proyectoslist') !!}',//proyectoslist ruta
				success: function (data) {
					$('.proyectos').empty().html(data);
				}
			});
		}

		//FILTRAR TIPO DE PROYECTOS
		$("#btnBuscar").click(function(e) {
			filtrarTipoProyectos();
		});

		var filtrarTipoProyectos = function()
		{
			var selectedTipoProyecto =  $("#tipoProyecto").val();	

			$.ajax({
				type:'get',
				data:{idTipoProyecto:selectedTipoProyecto},
				url:'{!! url('proyectoslist') !!}',//proyectoslist ruta
				success: function (data) {	
					$('.proyectos').empty().html(data);
				}
			});
		}
	</script>
@endsection