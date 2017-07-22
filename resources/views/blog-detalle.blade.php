@extends('layouts.principal')

    @section('content')

    @include('layouts.partial.titulo',['titulo' => $blog->titulo]) 

    <section>
			<div class="container">
                <div class="row">
                	<div class="col-md-8">
                		<div class="main-content blog blog-single">
		                    <div class="row">
		                    	<div class="col-sm-12">
		                    		<div class="blog-post">
		                    			<div class="blog-image">
		                    			  {{ Html::image('images/blog/'.$blog->link_imagen) }}
		                    			</div>
		                    			<div class="blog-content">
		                    				<div class="blog-meta">
		                    					<span><a href="#"><i class="fa fa-pencil"></i>{{$blog->nombre_creador}}</a></span>
		                    					<span><a href="#"><i class="fa fa-calendar-o"></i>{{Date::createFromFormat('Y-m-d H:i:s', $blog->fechaPublicacion)->format('l j F, Y')}}</a></span>
		                    					<span><a href="#"><i class="fa fa-folder-open"></i>{{$blog->nombreCategoria }}</a></span>		                    		
		                    				</div>
		                    				<h4>{{$blog->titulo}}</h4>
		                    				<span class="line-seperator"></span>
		                    					{!!$blog->texto!!}
		                    			</div>
		                    			<div class="blog-footer clearfix">		                    			
		                    				<div class="blog-share">
		                    					<h6>Compartir con:</h6>
                                                 <a target="_blank" href="http://www.facebook.com/sharer.php?u={!!action('BlogController@show',$blog->id)!!}">
												  	 <i class="fa fa-facebook"></i>
												 </a>	                    		
                    				
												 <a target="_blank" href="http://twitter.com/share?text={!!$blog->titulo!!}&url={!!action('BlogController@show',$blog->id)!!}">
													<i class="fa fa-twitter"></i>
												</a>		                    					
		                    				</div>
		                    			</div>
		                    		</div>
		                    	</div>
		                    </div>
	                    </div>
                	</div>

					<div class="col-md-4">
						 @include('layouts.partial.topPost') 
					</div>                     
                </div>
			</div>
		</section>

@endsection