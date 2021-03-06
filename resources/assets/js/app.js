/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

/**
 * jQuery plugin to handle Animations and Waypoint
 */
(function($) {
	$.fn.animateWaypoint = function(options) {
		var settings = $.extend({
			offset: '95%'
		}, options);
		this.filter("[data-animation-effect]").each(function() {
			if(Modernizr.csstransitions) {
				var waypoints = $(this).waypoint(function(direction) {
					var appearDelay = $(this.element).attr("data-effect-delay"),
					animatedObject = $(this.element);
					setTimeout(function() {
						animatedObject.addClass('animated object-visible ' + animatedObject.attr("data-animation-effect"));
					}, appearDelay);
					this.destroy();
				},{
					offset: settings.offset
				});
			} else {
				$(this).addClass('object-visible');
			} 	
		});
 
		return this;
	};
}(jQuery));

/**
 * Magnific popup extend
 */
(function($) {
	$.extend(true, $.magnificPopup.defaults, {
		tClose: 'Zatvori (Esc)',
		tLoading: 'Ucitavanje...',
		gallery: {
			tPrev: 'Prethodna',
			tNext: 'Naredna',
			tCounter: '%curr% od %total%'
		},
		image: {
			tError: '<a href="%url%">Slika</a> se ne moze ucitati.'
		},
		ajax: {
			tError: '<a href="%url%">Sadrzaj</a> se ne moze ucitati.'
		}
	});
}(jQuery));

/**
 * Center element
 */
(function($) {
	$.fn.center = function() {
		this.css("margin-top", ( $(window).height() - this.height() ) / 2  + "px");
		return this;
	};
}(jQuery));

(function($) {
	$(window).on("load", function() {
		$("body").removeClass("no-trans");

		if ($(".transparent-header").length > 0) {
			trHeaderHeight = $("header.header").outerHeight();
			$(".transparent-header .tp-bannertimer").css("marginTop", (trHeaderHeight)+"px");
		}

		if ($("#fullscreen").length > 0) {
			$('#fullscreen').center();
		}
	});
	$(window).on("resize", function() {
		var headerTopHeight = $(".header-top").outerHeight();
		var headerHeight = $("header.header.fixed").outerHeight();
		
		if (($(this).scrollTop() < headerTopHeight + headerHeight -5 ) && ($(window).width() > 767)) {
			headerTopHeight = $(".header-top").outerHeight(),
			headerHeight = $("header.header.fixed").outerHeight();
		}

		if ($(".transparent-header").length > 0) {
			if ($(this).scrollTop()  < headerTopHeight + headerHeight -5) {
				trHeaderHeight = $("header.header").outerHeight();
				$(".transparent-header .tp-bannertimer").css("marginTop", (trHeaderHeight)+"px");
			}
		}

		if ($("#fullscreen").length > 0) {
			$('#fullscreen').center();
		}
	});
}(jQuery));

/**
 * Chip Tuning App
 */
(function($) {
	$(document).ready(function() {
		// Setup
		//-----------------------------------------------
		var timer_tr;
		var	headerTopHeight = $(".header-top").outerHeight();
		var	headerHeight = $("header.header.fixed").outerHeight();

		if ($(".transparent-header").length > 0) {
			$(window).scroll(function() {
				if ($(this).scrollTop() == 0 ) {
					if (timer_tr) {
						window.clearTimeout(timer_tr);
					};
					timer_tr = window.setTimeout(function() {
						trHeaderHeight = $("header.header").outerHeight();
						$(".transparent-header .tp-bannertimer").css("marginTop", (trHeaderHeight)+"px");
					}, 300);
				};
			});
		}

		if ($(".transparent-header .slideshow").length > 0) {
			$(".header-container header.header").addClass("transparent-header-on");
		} 
		else {
			$(".header-container header.header").removeClass("transparent-header-on");
		}

		$(window).scroll(function() {
			if (($(".header.fixed:not(.fixed-before)").length > 0)  && !($(".transparent-header .slideshow").length>0)) {
				if (($(this).scrollTop() > headerTopHeight + headerHeight) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
					$(".header.fixed:not(.fixed-before)").addClass('animated object-visible fadeInDown');
					$(".header-container").css("paddingBottom", (headerHeight)+"px");
				} else {
					$("body").removeClass("fixed-header-on");
					$(".header-container").css("paddingBottom", (0)+"px");
					$(".header.fixed:not(.fixed-before)").removeClass('animated object-visible fadeInDown');
				}
			} else if ($(".header.fixed:not(.fixed-before)").length > 0) {
				if (($(this).scrollTop() > headerTopHeight + headerHeight) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
					$(".header.fixed:not(.fixed-before)").addClass('animated object-visible fadeInDown');
				} else {
					$("body").removeClass("fixed-header-on");
					$(".header.fixed:not(.fixed-before)").removeClass('animated object-visible fadeInDown');
				}
			};
		});

		$(window).scroll(function() {
			if (($(".header.fixed.fixed-before").length > 0)  && !($(".transparent-header .slideshow").length>0)) {
				if (($(this).scrollTop() > headerTopHeight) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
					$(".header.fixed.fixed-before").addClass('object-visible');
					$(".header-container").css("paddingBottom", (headerHeight)+"px");
				} else {
					$("body").removeClass("fixed-header-on");
					$(".header-container").css("paddingBottom", (0)+"px");
					$(".header.fixed.fixed-before").removeClass('object-visible');
				}
			} else if ($(".header.fixed.fixed-before").length > 0) {
				if (($(this).scrollTop() > headerTopHeight) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
					$(".header.fixed.fixed-before").addClass('object-visible');
				} else {
					$("body").removeClass("fixed-header-on");
					$(".header.fixed.fixed-before").removeClass('object-visible');
				}
			};
		});

		if ($('.pagination').length > 0)
		{
			$('ul.pagination li.active a, ul.pagination li.disabled a').on('click', function(event) {
				event.preventDefault();
			});
		}

		// Animations
		//-----------------------------------------------
		if ($("[data-animation-effect]").length > 0)
		{
			if (typeof revApi !== 'undefined')	{
				$('.feature-box-2').addClass('object-non-visible');
				revApi.one('revolution.slide.onloaded', function() {
					$("[data-animation-effect]").animateWaypoint();	 
				});				
			}
			else
			{
				$("[data-animation-effect]").animateWaypoint();
			}
		}

		//Scroll totop
		//-----------------------------------------------
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$(".scrollToTop").addClass("fadeToTop");
				$(".scrollToTop").removeClass("fadeToBottom");
			} else {
				$(".scrollToTop").removeClass("fadeToTop");
				$(".scrollToTop").addClass("fadeToBottom");
			}
		});

		$(".scrollToTop").click(function() {
			$("body,html").animate({scrollTop:0},800);
		});

		//Modal
		//-----------------------------------------------
		if($(".modal").length> 0 ) {
			$(".modal").each(function() {
				$(".modal").prependTo("body");
			});
		}

		// Home
		//-----------------------------------------------
		if ($("#home").length > 0) {

			// Revolution slider
			if ($(".slider-revolution-5-container").length > 0) {
				var revApi = $(document).ready(function() {
					$(".tp-bannertimer").show();
					$('.transparent-header .slider-revolution-5-container .slider-banner-fullscreen').revolution({
						sliderType:"standard",
						sliderLayout:"fullscreen",
						delay:9000,
						autoHeight:"on",
						responsiveLevels:[1199,991,767,480],
						fullScreenOffsetContainer: ".header-top, .offset-container",
						navigation: {
							onHoverStop: "off",
							arrows: {
								style: "hebe",
								enable:true,
								tmp: '<div class="tp-title-wrap"><span class="tp-arr-titleholder">{{title}}</span></div>',
								left : {
									h_align:"left",
									v_align:"center",
									h_offset:0,
									v_offset:0,
								},
								right : {
									h_align:"right",
									v_align:"center",
									h_offset:0,
									v_offset:0
								}
							},
							bullets:{
								style:"",
								enable:true,
								hide_onleave:true,
								direction:"horizontal",
								space: 3,
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:20
							}
						},
						gridwidth:1140,
						gridheight:750
					});
				});	

				var services = $('#services').multiselect({
					numberDisplayed: 1,
					checkboxName: 'services[]',
					nonSelectedText: 'Izaberite...',
					nSelectedText: 'izabrane usluge...',
					allSelectedText: 'Sve usluge izabrane',
					onChange: function(option, checked, select) {
						if (checked)
							$('.multiselect').addClass('selected');
						else
							$('.multiselect').removeClass('selected');
					}
				});
				
				services.on('change', function (event) {
					$(this).valid();
				});

				// Prices
				$.validator.addMethod("needsSelection", function (value, element) {
					var count = $(element).find('option:selected').length;
					return count > 0;
				});
				$.validator.addMethod("regexEmail", function (value, element) {
					return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
				}, 'Please enter a valid email address.');

				$("#prices-form").validate({
					ignore: [],
					submitHandler: function(form) {
						$.ajax({
							type: "POST",
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
							beforeSend: function() {
								$('#prices-form button[type="submit"]').prop('disabled', true);
							},
							url: "email/price",
							data: {
								"brand": $("#prices-form #brand").val(),
								"type": $("#prices-form #type").val(),
								"engine": $("#prices-form #engine").val(),
								"power": $("#prices-form #power").val(),
								"year": $("#prices-form #year").val(),
								"services": $("#prices-form #services").val(),
								"name": $("#prices-form #name").val(),
								"email": $("#prices-form #email").val()
							},
							dataType: "json",
							success: function (data) {
								if (data.success) {
									$('#prices-form button.multiselect').removeClass('selected');
									$('#prices-form button[type="submit"]').html('Poslato <i class="fa fa-check"></i>');
									$("#prices-form .form-control").each(function() {
										$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
									});
									$('#services').multiselect('refresh');
								}
							}
						});
					},
					errorPlacement: function(error, element) {
						error.insertBefore( element );
					},
					onkeyup: false,
					onclick: false,
					rules: {
						brand: {
							required: true
						},
						type: {
							required: true
						},
						engine: {
							required: true
						},
						power: {
							required: true,
							number: true
						},
						year: {
							required: true,
							number: true,
							minlength: 4
						},
						services: {
							needsSelection: true,
						},
						name: {
							required: true,
							minlength: 6
						},
						email: {
							required: true,
							regexEmail: true
						}
					},
					messages: {
						brand: {
							required: "Unesite marku vozila!"
						},
						type: {
							required: "Unesite model vozila!"
						},
						engine: {
							required: "Unesite tip motora!"
						},
						power: {
							required: "Unesite snagu motora!",
							number: "Unesite ispravnu snagu motora!"
						},
						year: {
							required: "Unesite godinu proizvodnje!",
							number: "Unesite ispravnu godinu proizvodnje!",
							minlength: "Unesite ispravnu godinu proizvodnje!"
						},
						services: {
							needsSelection: "Odaberite usluge!"
						},
						name: {
							required: "Unesite vaše ime i prezime!",
							minlength: "Unesite ispravno ime i prezime!"
						},
						email: {
							required: "Unesite vašu email adresu!",
							regexEmail: "Unesite ispravnu email adresu!"
						}
					},
					errorElement: "span",
					highlight: function (element) {
						$(element).parent().removeClass("has-success").addClass("has-error");
						$(element).siblings("label").addClass("hide");
					},
					success: function (element) {
						$(element).parent().removeClass("has-error").addClass("has-success");
						$(element).siblings("label").removeClass("hide");
					}
				});
			}

			// Gallery
			if ($('.owl-carousel').length > 0 || $('.owl-carousel.content-slider').length > 0) {
				$(".owl-carousel.carousel").owlCarousel({
					items:1,
					dots: false,
					nav: true,
					loop: true,
					navText: false,
					responsive:{
						479:{
							items:2
						},
						768:{
							items:2
						},
						992:{
							items:4
						},
						1200:{
							items:4
						}
					}
				});
			}

			$('.magnific').magnificPopup({
				delegate: 'a',
				type: 'image',
				titleSrc: 'title',
				gallery: {
					enabled: true,
				}
			});				

			// Stats Count To
			if ($(".stats [data-to]").length > 0) {
				$(".stats [data-to]").each(function() {
					var stat_item = $(this),
					offset = stat_item.offset().top;
					if($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
						stat_item.addClass('counting');
						stat_item.countTo();
					};
					$(window).scroll(function() {
						if($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
							stat_item.addClass('counting');
							stat_item.countTo();
						}
					});
				});
			}
		}

		// Services
		//-----------------------------------------------
		if (($("#services").length > 0))
		{
			$(".service-img").magnificPopup({
				type:"image",
				gallery: {
					enabled: true,
				}
			});
		}


		// Blog
		//-----------------------------------------------
		if ($("#blog").length > 0)
		{
			$(".popup-img").magnificPopup({
				type:"image"
			});		
		}

		// Gallery
		//-----------------------------------------------
		if ($("#gallery").length > 0 || $("#mini-gallery").length > 0) {

			if ($('.isotope-container').length > 0) {
				$('.isotope-container').fadeIn();
				$('.isotope-container').magnificPopup({
					delegate: 'a:visible',
					type: 'image',
					titleSrc: 'title',
					gallery: {
						enabled: true,
					}
				});				
				var $container = $('.isotope-container').isotope({
					itemSelector: '.isotope-item',
					layoutMode: 'masonry',
					transitionDuration: '0.6s',
					filter: "*"
				});

				$('.filters').on('click', 'ul.nav li a', function() {
					var filterValue = $(this).attr('data-filter');
					$(".filters").find("li.active").removeClass("active");
					$(this).parent().addClass("active");
					$container.isotope({ filter: filterValue });
					return false;
				});
			}

			if ($("#mini-gallery").length > 0)
			{
				$('.mini-magnific').magnificPopup({
					delegate: 'a',
					type: 'image',
					titleSrc: 'title',
					gallery: {
						enabled: true,
					}
				});				
			}
		}

		// Contact
		//-----------------------------------------------
		if ($("#contact").length > 0) {
			// Contact form
			$.validator.addMethod("regexEmail", function (value, element) {
				return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
			}, 'Please enter a valid email address.');

			$("#contact-form").validate({
				submitHandler: function(form) {
					$.ajax({
						type: "POST",
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						beforeSend: function() {
							$('#contact-form button[type="submit"]').prop('disabled', true);
						},
						url: "kontakt",
						data: {
							"name": $("#contact-form #name").val(),
							"email": $("#contact-form #email").val(),
							"subject": $("#contact-form #subject").val(),
							"message": $("#contact-form #message").val()
						},
						dataType: "json",
						success: function (data) {
							var message = $('<div />', {
								'id': 'message',
								'class': 'alert alert-success'
							});

							if (data.success) {
								$('#contact-form button[type="submit"]').html('Poslato');
								$("#contact-form .form-control").each(function() {
									$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
								});
								message.html(data.message);
								$('#contact-form button[type="submit"]').before(message);
							}
						}
					});
				},
				errorPlacement: function(error, element) {
					error.insertBefore( element );
				},
				onkeyup: false,
				onclick: false,
				rules: {
					name: {
						required: true,
						minlength: 6
					},
					email: {
						required: true,
						regexEmail: true
					},
					subject: {
						required: true
					},
					message: {
						required: true,
						minlength: 10
					}
				},
				messages: {
					name: {
						required: "Molimo unesite vaše ime i prezime",
						minlength: "Ime i prezime mora imati više od 6 karaktera"
					},
					email: {
						required: "Molimo unesite vašu email adresu",
						regexEmail: "Molimo unesite ispravnu email adresu"
					},
					subject: {
						required: "Molimo unesite naslov vaše poruke"
					},
					message: {
						required: "Molimo unesite vašu poruku",
						minlength: "Vaša poruka mora biti duža od 10 karaktera"
					}
				},
				errorElement: "span",
				highlight: function (element) {
					$(element).parent().removeClass("has-success").addClass("has-error");
					$(element).siblings("label").addClass("hide");
				},
				success: function (element) {
					$(element).parent().removeClass("has-error").addClass("has-success");
					$(element).siblings("label").removeClass("hide");
				}
			});

			// Google Maps
			if ($("#map-canvas").length > 0) {
				var map, myLatlng, myZoom, marker;
				myLatlng = new google.maps.LatLng(44.76892191864368, 19.688599705696106);
				myZoom = 13;

				function initialize() {
					var mapOptions = {
						zoom: myZoom,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						center: myLatlng,
						scrollwheel: false
					};
					map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
					marker = new google.maps.Marker({
						map: map,
						draggable: true,
						animation: google.maps.Animation.DROP,
						position: myLatlng
					});
					google.maps.event.addDomListener(window, "resize", function() {
						map.setCenter(myLatlng);
					});
				}
				google.maps.event.addDomListener(window, "load", initialize);
			}
		}

		if ($('#faq').length > 0) {
			// Faq form
			$.validator.addMethod("regexEmail", function (value, element) {
				return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
			}, 'Please enter a valid email address.');

			$("#faq-form").validate({
				submitHandler: function(form) {
					$.ajax({
						type: "POST",
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						beforeSend: function() {
							$('#faq-form button[type="submit"]').prop('disabled', true);
						},
						url: "cesta-pitanja",
						data: {
							"name": $("#faq-form #name").val(),
							"email": $("#faq-form #email").val(),
							"subject": $("#faq-form #subject").val(),
							"question": $("#faq-form #question").val()
						},
						dataType: "json",
						success: function (data) {
							var message = $('<div />', {
								'id': 'message',
								'class': 'alert alert-success'
							});

							if (data.success) {
								$('#faq-form button[type="submit"]').html('Poslato');
								$("#faq-form .form-control").each(function() {
									$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
								});
								message.html(data.message);
								$('#faq-form button[type="submit"]').before(message);
							}
						}
					});
				},
				errorPlacement: function(error, element) {
					error.insertBefore( element );
				},
				onkeyup: false,
				onclick: false,
				rules: {
					name: {
						required: true
					},
					email: {
						required: true,
						regexEmail: true
					},
					subject: {
						required: true
					},
					question: {
						required: true
					}
				},
				messages: {
					name: {
						required: "Unesite vaše ime i prezime",
					},
					email: {
						required: "Unesite vašu email adresu",
						regexEmail: "Unesite ispravnu email adresu"
					},
					subject: {
						required: "Unesite naslov vaše poruke",
					},
					question: {
						required: "Unesite vaše pitanje",
					}
				},
				errorElement: "span",
				highlight: function (element) {
					$(element).parent().removeClass("has-success").addClass("has-error");
					$(element).siblings("label").addClass("hide");
				},
				success: function (element) {
					$(element).parent().removeClass("has-error").addClass("has-success");
					$(element).siblings("label").removeClass("hide");
				}
			});
		}

		// Testimonials
		//-----------------------------------------------
		if ($(".content-slider").length>0) {
			$(".owl-carousel.content-slider").owlCarousel({
				items: 1,
				autoplay: true,
				autoplayTimeout: 8000,
				autoplaySpeed: 750,
				loop: true,
				nav: false,
				navText: false,
				dots: false
			});
		}

		// Newsletter
		if ($('#subscribe-form').length > 0)
		{
			$.validator.addMethod("regexEmail", function (value, element) {
				return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
			}, 'Please enter a valid email address.');
			$("#subscribe-form").validate({
				submitHandler: function(form) {
					$.ajax({
						type: "POST",
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						beforeSend: function() {
							$("#subscribe-form button").prop('disabled', true);
						},
						url: "/subscription/subscribe",
						data: {
							"email": $("#subscribe-form #email").val()
						},
						dataType: "json",
						success: function (data) {
							var message = $('<div />', {
								'id': 'message'
							});

							if (data.success) {
								$('#error').remove();
								$("#subscribe-form button").html('Poslato <i class="fa fa-check"></i>');
								$("#subscribe-form .form-control").each(function() {
									$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
								});
								message.html(data.message);
								$('#subscribe-form').after(message);
							}
						},
						error: function (data) {
							var error = $('<div />', {
								'id': 'error'
							});
							$('#error').remove();
							$("#subscribe-form .form-control").each(function() {
								$(this).prop('value', '').parent().addClass("has-error");
							});
							error.html('Uneta email adresa nije ispravna.');
							$('#subscribe-form').after(error);
							$("#subscribe-form button").prop('disabled', false);
						}
					});
				},
				errorPlacement: function(error, element) {
					return true;
				},
				onkeyup: false,
				onclick: false,
				rules: {
					email: {
						required: true,
						regexEmail: true
					}
				},
				highlight: function (element) {
					$(element).parent().removeClass("has-success").addClass("has-error");
				},
				unhighlight: function(element) {
					$(element).parent().removeClass('has-error').addClass('has-success');
				},
				success: function (element) {
					$(element).parent().removeClass("has-error").addClass("has-success");
				}
			});
		}

		//Scroll Spy
		//-----------------------------------------------
		if($(".scrollspy").length>0) {
			$("body").addClass("scroll-spy");
			if($(".fixed.header").length>0) {
				$('body').scrollspy({
					target: '.scrollspy',
					offset: 85
				});
			} else {
				$('body').scrollspy({
					target: '.scrollspy',
					offset: 20
				});
			}
		}

		//Smooth Scroll
		//-----------------------------------------------
		if ($(".smooth-scroll").length>0) {
			if(($(".header.fixed").length>0) && (Modernizr.mq('only all and (min-width: 768px)'))) {
				$('.smooth-scroll a, a.smooth-scroll').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html,body').animate({
								scrollTop: target.offset().top-63
							}, 1000);
							return false;
						}
					}
				});
			} else {
				$('.smooth-scroll a, a.smooth-scroll').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html,body').animate({
								scrollTop: target.offset().top
							}, 1000);
							return false;
						}
					}
				});
			}
		}

		// Full Width Image Overlay
		//-----------------------------------------------
		if ($(".full-image-overlay").length>0) {
			overlayHeight = $(".full-image-overlay").outerHeight();
			$(".full-image-overlay").css("marginTop",-overlayHeight/2);
		};
	});
})(jQuery);
