@extends('layouts.principal')   

@section('page-styles')
     {{ Html::style('css/jquery-ui.css') }}
@endsection

@section('content')

    @include('layouts.partial.titulo') 

    <section class="contact-section">
        <div class="container">
            <div class="row section-header">
                <div class="col-sm-12">
                    <h3>Formulario de Contacto</h3>
                    <span class="line-seperator"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form" id="contact">
                        <div id="result"></div>
                        <div class="form-group">
                            <div class="row">
                            {!!Form::open() !!}
                                 {{ csrf_field() }}         
                                <div class="col-md-6 col-sm-6">
                                    {!! Form::text('nombre', null, ['required' => 'required','placeholder'=>'Nombre']) !!}
                                    {!! Form::text('apellido', null, ['required' => 'required','placeholder'=>'Apellido']) !!}
                                    {!! Form::email('email', null, ['required' => 'required','placeholder'=>'Email']) !!}
                                    <input id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha Nacimiento" data-date-viewmode="years" data-date-format="mm/dd/yyyy">  
                                </div>
                                <div class="col-md-6 col-sm-6">  
                                    {!! Form::text('nacionalidad', null, ['required' => 'required','placeholder'=>'Nacionalidad']) !!}                        
                                    <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                                   <!-- <button id="submit-contact" type="button" class="btn btn-accent">Enviar Mensaje</button> -->
                                    {!!Form::submit('Enviar Mensaje',['id'=>'btnSubmitContact','class'=>'btn btn btn-accent'])!!} 
                                 <!--   {!!link_to('#','Enviar Mensaje',['id'=>'btnSubmitContact','class'=>'btn btn-accent'])!!} -->
                                </div>
                            
                                {!!Form::close()!!}
                            </div>
                        </div> 

                    </div>
                </div>

                <div class="col-md-4">
                    <!--<p> se puede agregar texto.</p> -->
                    <br>
                    <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Uruguay 390, 18 "A", Buenos Aires</p>
                    <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:info@voluntariossf.org.ar">info@voluntariossf.org.ar</a></p>
                    <p><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp; 4373-0509</p>
                </div>  
            </div>            
        </div>

        <div class="contact-map"></div>
    </section>

@endsection

@section('page-script')
    {{ Html::script('js/jquery-ui.js') }}
    <!-- Google Map -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZURPfDPZwCBt1CEm_9VbIPUDl_Ib7CtE&callback=initMap">
    </script>
    {{ Html::script('js/jquery.gmap3.min.js') }}  


    <!-- Contact Form Validation -->
    <script type="text/javascript">
        $(document).ready(function() {   

                $.datepicker.regional['es'] = 
                 {
                 closeText: 'Cerrar', 
                 prevText: 'Previo', 
                 nextText: 'Próximo',
                 
                 monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                 monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                 'Jul','Ago','Sep','Oct','Nov','Dic'],
                 monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
                 dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                 dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
                 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
                 dateFormat: 'dd/mm/yy', firstDay: 0, 
                 initStatus: 'Selecciona la fecha', isRTL: false};

                $.datepicker.setDefaults($.datepicker.regional['es']);                
              

            $('#fechaNacimiento').datepicker(
                {
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1940:2012"
                });            
             

             $('.contact-map').gmap3({
                marker: {
                    address: '-34.604138,-58.386703'
                },
                map: {
                    options: {
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl: true
                    }
                }
            }); 
   

            $("#btnSubmitContact").click(function(e) {

               e.preventDefault();            

                //Get input field values
                var nombre = $('input[name=nombre]');
                var last_name = $('input[name=apellido]').val();
                var user_email = $('input[name=email]').val();
                var nacionalidad = $('input[name=nacionalidad]').val();
                var fechaNacimiento = $('#fechaNacimiento').val();
                var user_message = $('textarea[name=mensaje]').val();


                // Do simple validations of the values entered
                var proceed = true;
                if (nombre.val() == "") {
                    nombre.css('border-color', 'red');
                    proceed = false;
                }
                if (last_name == "") {
                    $('input[name=apellido]').css('border-color', 'red');
                    proceed = false;
                }
                if (user_email == "") {
                    $('input[name=email]').css('border-color', 'red');
                    proceed = false;
                }
                if (user_message == "") {
                    $('textarea[name=mensaje]').css('border-color', 'red');
                    proceed = false;
                }

                if (nacionalidad == "") {
                    $('input[name=nacionalidad]').css('border-color', 'red');
                    proceed = false;
                }
                if (fechaNacimiento == "") {
                    $('input[name=fechaNacimiento]').css('border-color', 'red');
                    proceed = false;
                }

                // Check if we can proceed
                if (proceed) {
                    // Data to be sent to server
                   var post_data = {
                        'nombre': nombre.val(),
                        'apellido': last_name,
                        'email': user_email,
                        'mensaje': user_message,
                        'nacionalidad': nacionalidad,
                        'fechaNacimiento': fechaNacimiento
                    };                   

                    var output;

                    var token = $('input[name="_token"]').val();                

                     $.ajax({
                            data: post_data,
                            url: '/send',
                            headers: {'X-CSRF-TOKEN': token},
                            type: 'POST',
                            dataType: 'json',                           
                            success: function (response) {                                  
                                     output = '<div class="alert alert-success">' + response.mensaje + '</div>';

                            // Reset values in all input fields
                            $('#contact input').not('#btnSubmitContact').val('');                      
                            $('#contact textarea').val('');

                              $("#result").hide().html(output).slideDown();
                            },
                             error: function(jqXHR, textStatus, errorThrow) {      
                               //   console.log(textStatus);                  
                                  output = '<div class="alert alert-danger">' + jqXHR.mensaje + '</div>';
                                  $("#result").hide().html(output).slideDown();
                                }
                    });

                    $("#result").hide().html(output).slideDown();
                }
            });

            // Reset previously set border colors and hide all message on .keyup()
            $("#contact input, #contact textarea").keyup(function() {
                $("#contact input, #contact textarea").css('border-color', '');             
                $("#result").slideUp();
            });

        });
    </script>

@endsection