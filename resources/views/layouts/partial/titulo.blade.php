    <section class="page-title">
        <div class="bg-overlay"></div>
        <div class="bg-image"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 page-title-inner">
                    <h2>{{$titulo}}</h2>
                    <!--<p class="subtitle">This is a Awesome Subtitle here</p>-->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-location clearfix">
                        <div class="location">
                            <h6>
                                  {{link_to_action('FrontController@index',$title='Inicio')}}
                            </h6>
                            <h6>{{$titulo}}</h6>
                        </div>
                        <div class="back-home hidden-xs hidden-sm">                        
                              {{link_to_action('FrontController@index',$title='&larr; Volver al inicio')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>