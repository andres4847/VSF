    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 widget">
                    <h4 class="widget-title">Instagram</h4>
                    <span class="line-seperator"></span>
                    <div class="small-thumb gallery">
                      <!-- ALBUM INSTAGRAM -->
                      <div id="galeria-instagram"></div>  
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 widget">
                    <h4 class="widget-title">Últimos Tweets</h4>
                    <span class="line-seperator"></span>
                    <a class="twitter-timeline" href="https://twitter.com/voluntariossf" data-chrome="nofooter noheader noborders noscrollbar transparent" data-theme="dark" height="220">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 widget">
                    <h4 class="widget-title">Newsletter</h4>
                    <span class="line-seperator"></span>
                    <p>Suscribite a nuestro Newsletter</p>                 
                  {!! Form::open() !!}
                    {{ csrf_field() }}                    
                    <div class="form-group">
                         {!!Form::email('email', null, $attributes = ['id'=>'email','class'=>'form-control','placeholder'=>'Ingresa tu email.'])!!}
                    </div>             
                     <a class="btn btn-accent" id="btnSuscribir" name="btnSuscribir" >Suscribir</a>
                     <div id="mensaje-suscribir" class="suscribir-mensaje-ok">
                    </div>       
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright-text">&copy; Copyright 2016. Designed by VSF</div>
                    <div class="col-md-6 credits">El hosting se lo agradecemos a <a href="#"><a href="http://www.xmundo.net/ar/es/">xmundo</a></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>