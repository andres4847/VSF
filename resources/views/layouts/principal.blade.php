<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Voluntarios Sin Fronteras</title>

    <link href='http://fonts.googleapis.com/css?family=Montserrat:500,600,700,800,400,200,300' rel='stylesheet' type='text/css'>

    <link href="{{ asset('favicon.png') }}" type="image/x-icon" rel="icon" />
    <link href="{{ asset('favicon.png') }}" type="image/x-icon" rel="shortcut icon">  

    @include('layouts.partial.styles')    

    @yield('page-styles')

    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->

    	
    <!-- Facebook Pixel Code -->
    <script>

        !function(f,b,e,v,n,t,s)

        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

        n.callMethod.apply(n,arguments):n.queue.push(arguments)};

        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

        n.queue=[];t=b.createElement(e);t.async=!0;

        t.src=v;s=b.getElementsByTagName(e)[0];

        s.parentNode.insertBefore(t,s)}(window,document,'script',

        'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1472145326229291'); 

        fbq('track', 'PageView');

    </script>

    <noscript>

        <img height="1" width="1" 

        src="https://www.facebook.com/tr?id=1472145326229291&ev=PageView

        &noscript=1"/>

    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>

    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 left-header">
                        <ul class="header-list">
                            <li><i class="fa fa-phone"></i>4373-0509</li>
                            <li><i class="fa fa-envelope"></i> <a href="#">info@voluntariossf.org.ar</a></li>
                            <li><i class="fa fa-map-marker"></i>Uruguay 390, 18 "A", Buenos Aires</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="header-social">
                            <a href="http://www.facebook.com/VoluntariosSinFronteras" target="_blank">{{ HTML::image('images/fb.png','facebook') }} </a>
                            <a href="http://www.twitter.com/voluntariossf" target="_blank">{{ HTML::image('images/tw.png','twitter') }}</a>
                            <a href="http://www.linkedin.com/company/voluntarios-sin-fronteras" target="_blank">{{ HTML::image('images/ln.png','linkeding') }}</a>
                            <a href="http://www.youtube.com/user/VoluntariosSF" target="_blank">{{ HTML::image('images/yt.png','youtube') }}</a>                   
                            <a href="https://www.instagram.com/voluntariossinfronteras/" target="_blank">{{ HTML::image('images/ins.png','instagram') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="logo">  
                                {!! html_entity_decode( HTML::link("/", HTML::image("images/logo.png", "Logo") ) ) !!}  
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="donate-button">
                            <a class="btn btn-default2" target="_blank" href="https://www.mercadopago.com/mla/debits/new?preapproval_plan_id=9a8badea661e4f5e90cb2e5e07d4571b" name="MP-payButton">Quiero Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="site-nav" class="main-navigation nav-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-menu">
                            <li>{{link_to_action('FrontController@index',$title='Inicio')}}</li>
                            <li>{{link_to_action('FrontController@conocenos',$title='Conocenos')}}</li>
                            <li>{{link_to_action('ProyectosController@index',$title='Proyectos')}}</li>
                            <li>{{link_to_action('FrontController@dona',$title='Doná')}}</li>                      
                            <li>{{link_to_action('EventosController@index',$title='Próximos Eventos')}}</li>                           
                            <li>{{link_to_action('BlogController@index',$title='Blog')}}</li>
                            <li>{{link_to_action('FrontController@contacto',$title='Contactanos')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav id="responsive-menu"></nav>
    </header>
       
    @yield('content')

    @include('layouts.partial.footer')

    <a href="#" class="go-top"><i class="fa fa-chevron-up"></i></a>

    @include('layouts.partial.script')

    @yield('page-script')  

</body>

</html>