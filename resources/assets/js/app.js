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

				var services = $('#service').multiselect({
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
				$.validator.addMethod("valueNotEquals", function(value, element, arg) {
					return arg !== element.value;
				}, "Value must not equal arg.");
				$.validator.addMethod("needsSelection", function (value, element) {
					var count = $(element).find('option:selected').length;
					return count > 0;
				});
				$("#prices-form").validate({
					ignore: [],
					submitHandler: function(form) {
						$.ajax({
							type: "POST",
							url: "api/send",
							beforeSend: function() {
								console.log($('#service').val());
							},
							data: {
								"brand": $("#prices-form #brand").val(),
								"type": $("#prices-form #type").val(),
								"engine": $("#prices-form #engine").val(),
								"power": $("#prices-form #power").val(),
								"year": $("#prices-form #year").val(),
								"service": $("#prices-form #service").val(),
								"name": $("#prices-form #name").val(),
								"email": $("#prices-form #email").val()
							},
							dataType: "json",
							success: function (data) {
								if (data.sent == "yes") {
									$(".submit-button").html('Poslato <i class="fa fa-check"></i>');
									$("#prices-form .form-control").each(function() {
										$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
									});
									$('#service').multiselect('refresh');
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
						service: {
							needsSelection: true,
						},
						name: {
							required: true,
							minlength: 6
						},
						email: {
							required: true,
							email: true
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
						service: {
							needsSelection: "Odaberite usluge!"
						},
						name: {
							required: "Unesite vaše ime i prezime!",
							minlength: "Unesite ispravno ime i prezime!"
						},
						email: {
							required: "Unesite vašu email adresu!",
							email: "Unesite ispravnu email adresu!"
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
			console.log('servisi')
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
			$("#contact-form").validate({
				submitHandler: function(form) {
					$('.submit-button').button("loading");
					$.ajax({
						type: "POST",
						url: "api/send",
						data: {
							"name": $("#contact-form #name").val(),
							"email": $("#contact-form #email").val(),
							"subject": $("#contact-form #subject").val(),
							"message": $("#contact-form #message").val(),
							"g-recaptcha-response": $("#g-recaptcha-response").val()
						},
						dataType: "json",
						success: function (data) {
							if (data.sent == "yes") {
								$("#MessageSent").removeClass("hidden");
								$("#MessageNotSent").addClass("hidden");
								$(".submit-button").removeClass("btn-default").addClass("btn-success").prop('value', 'Poslato');
								$("#contact-form .form-control").each(function() {
									$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
								});
							} else {
								$("#MessageNotSent").removeClass("hidden");
								$("#MessageSent").addClass("hidden");
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
						email: true
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
						email: "Molimo unesite ispravnu email adresu"
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
			$("#faq-form").validate({
				submitHandler: function(form) {
					$('.submit-button').button("loading");
					$.ajax({
						type: "POST",
						url: "api/send",
						data: {
							"name": $("#faq-form #name").val(),
							"email": $("#faq-form #email").val(),
							"question": $("#faq-form #question").val(),
							"g-recaptcha-response": $("#g-recaptcha-response").val()
						},
						dataType: "json",
						success: function (data) {
							if (data.sent == "yes") {
								$("#MessageSent").removeClass("hidden");
								$("#MessageNotSent").addClass("hidden");
								$(".submit-button").removeClass("btn-default").addClass("btn-success").prop('value', 'Poslato');
								$("#faq-form .form-control").each(function() {
									$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
								});
							} else {
								$("#MessageNotSent").removeClass("hidden");
								$("#MessageSent").addClass("hidden");
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
						email: true
					},
					message: {
						required: true
					}
				},
				messages: {
					name: {
						required: "Unesite vaše ime i prezime",
					},
					email: {
						required: "Unesite vašu email adresu",
						email: "Unesite ispravnu email adresu"
					},
					message: {
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
		if($("#sidebar-form").length>0) {

			$("#sidebar-form").validate({
				submitHandler: function(form) {
					$('.submit-button').button("loading");
					$.ajax({
						type: "POST",
						url: "php/email-sender.php",
						data: {
							"name": $("#sidebar-form #name3").val(),
							"email": $("#sidebar-form #email3").val(),
							"subject": "Message from FAQ page",
							"category": $("#sidebar-form #category").val(),
							"message": $("#sidebar-form #message3").val()
						},
						dataType: "json",
						success: function (data) {
							if (data.sent == "yes") {
								$("#MessageSent3").removeClass("hidden");
								$("#MessageNotSent3").addClass("hidden");
								$(".submit-button").removeClass("btn-default").addClass("btn-success").prop('value', 'Message Sent');
								$("#sidebar-form .form-control").each(function() {
									$(this).prop('value', '').parent().removeClass("has-success").removeClass("has-error");
								});
							} else {
								$("#MessageNotSent3").removeClass("hidden");
								$("#MessageSent3").addClass("hidden");
							}
						}
					});
				},
				errorPlacement: function(error, element) {
					error.insertAfter( element );
				},
				onkeyup: false,
				onclick: false,
				rules: {
					name3: {
						required: true,
						minlength: 2
					},
					email3: {
						required: true,
						email: true
					},
					message3: {
						required: true,
						minlength: 10
					}
				},
				messages: {
					name3: {
						required: "Please specify your name",
						minlength: "Your name must be longer than 2 characters"
					},
					email3: {
						required: "We need your email address to contact you",
						email: "Please enter a valid email address e.g. name@domain.com"
					},
					message3: {
						required: "Please enter a message",
						minlength: "Your message must be longer than 10 characters"
					}
				},
				errorElement: "span",
				highlight: function (element) {
					$(element).parent().removeClass("has-success").addClass("has-error");
				},
				success: function (element) {
					$(element).parent().removeClass("has-error").addClass("has-success");
				}
			});
		};


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

		// Affix Menu
		//-----------------------------------------------
		if ($(".affix-menu").length>0) {
			setTimeout(function () {
				var $sideBar = $('.sidebar')

				$sideBar.affix({
					offset: {
						top: function () {
							var offsetTop = $sideBar.offset().top
							return (this.top = offsetTop - 65)
						},
						bottom: function () {
							var affixBottom = $(".footer").outerHeight(true) + $(".subfooter").outerHeight(true)
							if ($(".footer-top").length>0) {
								affixBottom = affixBottom + $(".footer-top").outerHeight(true)
							}
							return (this.bottom = affixBottom+50)
						}
					}
				})
			}, 100)
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
