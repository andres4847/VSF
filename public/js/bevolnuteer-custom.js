

	$( document ).ready(function() {   

       /* =============================================================================
	   INICIO FOOTER
	   ================================================================================= */
		function LoadInstagram()
		{
			var clientid = '2956610311.1677ed0.f7c95af97584430591bcb10d494b9698',
			userid = 2956610311,
			num_photos = 10;
		
			$.ajax({
				url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent/?access_token='+clientid,
				dataType: 'jsonp',
				type: 'GET',
				data: {count: num_photos},
				success: function(data){
					//console.log(data);
					for( x in data.data ){
						$('#galeria-instagram').append('<a target="_blank" href="'+data.data[x].link+'" ><img src="'+data.data[x].images.thumbnail.url+'"></a>');
					}
				},
				error: function(data){
					console.log(data);
				}
			});
		}

	   	LoadInstagram();
        
		//Seccion suscribir newsletter
		$("#btnSuscribir").click(function() {

			var token = $('input[name="_token"]').val(); 
            var email_suscripcion = $('input[name=email]').val();

			// Do simple validations of the values entered
			var proceed = true;
			if (email_suscripcion == "") {
				// $('input[name=name-id]').css('border-color', 'red');
				proceed = false;
			}

			// Check if we can proceed
			if (proceed) {
				// Data to be sent to server
				post_data = {
					'email': email_suscripcion
				};

				var output;

				$.ajax({
					data: post_data,
					url: '/subscribe',
					headers: {'X-CSRF-TOKEN': token},
					type: 'POST',
					dataType:'json',
					success: function(response) {
						output = '<p>' + response.mensaje + '</p>';
						$("#mensaje-suscribir").html(output);
					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(textStatus, errorThrown);
						output = '<p>' + textStatus + '</p>';

						$("#mensaje-suscribir").html(output);
					}
				});

			}
		});
     

	   /* =============================================================================
	   INICIO BLOGS
	   ================================================================================= */
	   

		// Submenu Show/Hide
        $('nav ul.main-menu > li, nav ul.main-menu > li > ul > li').hover(function () {
            $(this).children('ul').stop(true, true).slideDown(250);
        }, function () {
            $(this).children('ul').stop(true, true).slideUp(250);
        });


	    // Responsive Menu
	    if( $().meanmenu ){
		    $('nav.main-navigation').meanmenu({
		        meanMenuClose: '<i class="fa fa-times"></i>', // single character you want to represent the close menu button
		        meanExpand: "+", // single character you want to represent the expand for ULs
		        meanContract: "-", // single character you want to represent the contract for ULs
		        meanMenuContainer: '#responsive-menu', // Choose where meanmenu will be placed within the HTML
		        meanScreenWidth: "767", // set the screen width you want meanmenu to kick in at
		        meanRemoveAttrs: true // true to remove classes and IDs, false to keep them
		    });
		}


		// donate pricing buttons
		$('.btn-group *').click(function(){
			$('.btn-group button.active').removeClass('active');
			$(this).addClass('active')
			
		});


	    // Testimonial carousel
		$(".owl-testimonial").owlCarousel({
			autoPlay: 4000, //Set AutoPlay to 3 seconds
	      	items : 1,
	      	itemsDesktop: [1199,1],
	      	itemsDesktopSmall: [979,1],
	      	itemsTablet: [768,1],
	      	itemsMobile: [479,1],
			pagination : true,
			navigation : false
	  	});

	  	// bxslider init
	  	$('.bxslider').bxSlider({
	  		pager : false
	  	});	

		// Parallax Section
		if ($(window).outerWidth() > 1024) {
			$(window).stellar({
				horizontalScrolling: false,
			});
		}

		// Gallery Filters
		$('#Grid').mixitup({
	        effects: ['fade','grayscale'],
	        easing: 'snap',
	        transitionSpeed: 400
	    });

		// slide toggle
		$(".gallery-controls").click(function(){
           $(this).find(".gallery-categories").slideToggle('fast');
           return false;
        });

		// go top
		//hide or show the "back to top" link
		$(window).scroll(function(){
			( $(this).scrollTop() > 300 ) ? $('.go-top').addClass('visible') : $('.go-top').removeClass('visible fadeout');
			if( $(this).scrollTop() > 1200 ) { 
				$('.go-top').addClass('fadeout');
			}
		});

		//smooth scroll to top
		$('.go-top').on('click', function(event){
			event.preventDefault();
			$('body,html').animate({
				scrollTop: 0 ,
			 	}, 700
			);
		});
	});

//=============================================================
// goole analytic
//=============================================================
	if (document.location.hostname.search("voluntariossf.org.ar") !== -1) {
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-57007617-1', 'auto');
		ga('send', 'pageview');
	}





