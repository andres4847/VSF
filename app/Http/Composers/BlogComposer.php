<?php namespace VSF\Http\Composers;

use Illuminate\Contracts\View\View;
use VSF\Blog as Blog;

class BlogComposer {

    public function compose(View $view)
    {
        $LastPostBlog = Blog::limit(4)
                                    ->orderBy('fechaPublicacion','desc')
                                    ->get();                                    
       
        $view->with('LastPostBlog',$LastPostBlog);        
    }
}