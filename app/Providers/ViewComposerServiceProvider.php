<?php

namespace VSF\Providers;

//use VSF\Blog;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {           
       /* $LastPostBlog = \VSF\Blog::limit(4)
                                    ->orderBy('fechaPublicacion','desc')
                                    ->get();
                                    
        view()->composer('partials.footer',function($view)
        {
            $view->with('LastPostBlog',$LastPostBlog);
        });  */

        $this->composeBlog();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeBlog()
    {
        view()->composer('layouts.partial.topPost','VSF\Http\Composers\BlogComposer');
    }
}
