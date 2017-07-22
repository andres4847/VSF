<div class="main-content blog">
    <div class="row">
        <div class="col-sm-12">
            @foreach($blogs as $blog)
            <div class="blog-post">
                <div class="blog-image">
                    <a href="{!!action( 'BlogController@show',$blog->id)!!}">
                         {{ Html::image('images/blog/'.$blog->link_imagen) }}
                     </a>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><a href="#"><i class="fa fa-pencil"></i>{{$blog->nombre_creador}}</a></span>
                        <span><a href="#"><i class="fa fa-calendar-o"></i>{{Date::createFromFormat('Y-m-d H:i:s', $blog->fechaPublicacion)->format('l j F, Y')}}</a></span>
                        <span><a href="#"><i class="fa fa-folder-open"></i>{{$blog->nombreCategoria }}  </a></span>
                    </div>
                    <h4> {!!link_to_action('BlogController@show',$title = $blog->titulo,$parameters=$blog->id)!!}</h4>
                    <span class="line-seperator"></span>
                    <p>{!!$blog->resumen_texto!!}</p>
                    {!!link_to_action('BlogController@show',$title = 'Leer mas ->',$parameters=$blog->id)!!}
                </div>
            </div>
            @endforeach
        </div>

    </div>

    {{ $blogs->links() }}
</div>