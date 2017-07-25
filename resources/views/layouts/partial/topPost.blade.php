<aside class="sidebar">
    <div class="widget">
        <h4 class="widget-title">Últimos Posts</h4>
        <ul class="popular-posts">
            @foreach($LastPostBlog as $blog)
                <li class="blog-post clearfix">
                    <div class="post-thumb">
                       	<a href= {!!action('BlogController@show',$blog->id)!!} >                    
                            {{ Html::image('images/blog/'.$blog->link_imagen_ch) }}
                        </a>
                    </div>
                    <div class="blog-content">
                        <h5>{!!link_to_action('BlogController@show',$title = $blog->titulo,$parameters=$blog->id)!!}</h5>
                        <span class="meta">{{Date::createFromFormat('Y-m-d H:i:s', $blog->fechaPublicacion)->format('l j F, Y')}}</span>
                    </div>
                </li>				
            @endforeach							
        </ul>
    </div>                    		
</aside>