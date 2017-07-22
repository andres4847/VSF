
@extends('layouts.principal')

@section('content')

    @include('layouts.partial.titulo',['titulo' => 'Proximos Eventos']) 

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content events">
                        <div class="row">
                            <div class="col-sm-12">
                             <div class="eventos"></div>                                
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')  
	<script>
		//PAGINACION DE EVENTOS
		$(document).on('click','.pagination a', function(e) {
			e.preventDefault();
			var url = $(this).attr('href');		
			var selectedTipoProyecto =  $("#tipoProyecto").val();	

				$.ajax({
					type:'get',
					url:url,						
					success:function(data)
					{
						$('.eventos').empty().html(data);					
					}
				});
		});

		//CARGO LISTA DE EVENTOS
		$(document).ready(function(){
			listeventos();    
		});

		var listeventos = function()
		{
			$.ajax({
				type:'get',
				url:'{!! url('eventoslist') !!}',//eventoslist ruta
				success: function (data) {
					$('.eventos').empty().html(data);
				}
			});
		}	
	</script>
@endsection