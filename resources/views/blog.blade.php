@extends('layouts.principal')

@section('content')
    @include('layouts.partial.titulo',['titulo'=>'Blog']) 
    <section>
			<div class="container">
                <div class="row">
                	<div class="col-md-8">
                		<div class="blog">
								
						</div>
                	</div>  

					<div class="col-md-4">
						 @include('layouts.partial.topPost') 
					</div>          
                </div>
			</div>
	</section>
@endsection

@section('page-script')  
	<script>

		//PAGINACION DEL BLOG
		$(document).on('click','.pagination a', function(e) {
			e.preventDefault();
			var url = $(this).attr('href');		

				$.ajax({
					type:'get',
					url:url,						
					success:function(data)
					{
						$('.blog').empty().html(data);					
					}
				});
		});

		//CARGO LISTA DE ARICULOS DE BLOGS
		$(document).ready(function(){
			listblog();    
		});

		var listblog = function()
		{
			$.ajax({
				type:'get',
				url:'{!! url('bloglist') !!}',//bloglist ruta
				success: function (data) {
					$('.blog').empty().html(data);
				}
			});
		}
	</script>
@endsection