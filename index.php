<!DOCTYPE html>
<html lang="en">
<head>

    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="My outfit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

 

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="styles/style.css"> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.js"></script>


</head>

<body>


    <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark ">
        <div class="container" >
            <a class="navbar-brand" href="index.php">My Outfit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="templates/weather.php">Weather</a>
                    </li>

                    <li class="nav-item">
                            <!-- <a class="nav-link" href="../templates/join.html">Join</a> -->
							<a class="nav-link" href="templates/join.php">Join</a>
						</li>

                    <li class="nav-item">
                        <a class="nav-link" href="templates/about.php">About</a>
                    </li>  
                </ul>
            </div>

            <!-- Buton de cautare alta locatie-->
            <div class="col-sm-3 col-md-3">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Find location.." name="q" id="search_location">
                            <div class="input-group-btn">
                                 <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                         </div>
                    </form>
            </div>

        </div>
    </nav>

    <div class="container" >

            <!-- Caseta de cautare -->
            <section class="search-sec">
                    <div class="container">
                        <form action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <!-- <input type="text" class="form-control search-slt" placeholder="Enter Pickup City"> -->
                                            <select class="form-control search-slt" id="Genul">
                                                <option value="0">Select gender</option>
                                                <option value="1">Female</option>
                                                <option value="2">Male</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <!-- <input type="text" class="form-control search-slt" placeholder="Enter Drop City"> -->
                                            <select class="form-control search-slt" id="Activitate">
                                                <option value="0">Select activity</option>
                                                <option value="1">Park</option>
                                                <option value="2">Dinner</option>
                                                <option value="3">Sport</option>
                                                <option value="4">Festival</option>
                                                <option value="5">Party</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="Stil">
                                                <option value="0">Select style</option>
                                                <option value="1">Elegant</option>
                                                <option value="2">Sport</option>
                                                <option value="3">Casual</option>
                                                <option value="4">Classic</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <button type="button" class="btn btn-dark ">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                
                <!-- Afisare imagini -->
                <section class="projects-section">		
                        <div class="outer-container">
                            <div class="projects-carousel owl-carousel owl-theme">
                                <div class="project-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="images/out2.jpg" alt="" />
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="title">Poza1</div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>				
                                <div class="project-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="images/out3.jpg" alt="" />
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="title">Poza2</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>				
                                <div class="project-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="images/out4.jpg" alt="" />
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="title">Poza3</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>				
                            </div>			
                        </div>		
                    </section>    
            </div>
        </div>
    </div>    

        <!--    {% for new in news %}-->
        <!--        <h1><b> {{ new.stare_vreme }}</b></h1>-->
        <!--        <p> <b>Localitate:</b> {{new.oras}}, {{new.tara}}</p>-->
        <!--        <p> <b>Temperatura:</b> {{new.temperatura}}</p>-->
        <!--        <p> <b>Data:</b> {{ new.data_new}}</p>-->
        <!--    {% endfor %}-->
        
              <!-- <div class="row">
                <div class="col-sm-4">
                  <h2>London</h2>
                  <p>London is the most populous city in the United Kingdom,
                  with a metropolitan area of over 13 million inhabitants.</p>
                </div>
                <div class="col-sm-4">
                  <h2>Paris</h2>
                  <p>The Paris area is one of the largest population centers in Europe,
                  ith more than 12 million inhabitants.</p>
                </div>
                <div class="col-sm-4">
                  <h2>Tokyo</h2>
                  <p>Tokyo is the center of the Greater Tokyo Area,
                  and the most  populous metropolitan area in the world.</p>
                </div>
              </div> -->
    </div>
</body>
</html>




<!-- Javascript pentru viziualizarea imaginilor  -->
<script>

(function($) {
	
	"use strict";
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var sticky_header = $('.main-header .sticky-header, .header-style-five');
			var scrollLink = $('.scroll-to-top');
			if (windowpos > 55) {
				siteHeader.addClass('fixed-header');
				sticky_header.addClass("animated slideInDown");
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				sticky_header.removeClass("animated slideInDown");
				scrollLink.fadeOut(300);
			}
		}
	}
	
	headerStyle();

	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		$('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}


	//Hide / Show Pricing Features / Togglw
	$('.price-block-two .show-btn').on('click', function(e) {
		e.preventDefault();
		$(this).parents('.price-block-two').toggleClass('show-features');
	});


	//Banner Carousel
	if ($('.banner-carousel').length) {
		$('.banner-carousel').owlCarousel({
			animateOut: 'slideOutUp',
    		animateIn: 'fadeDown',
			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout:10000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1024:{
					items:1
				},
			}
		});    		
	}

	
	// Projects Carousel
	if ($('.projects-carousel').length) {
		$('.projects-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:4
				},
				1100:{
					items:4
				},
				1200:{
					items:5
				},
				1600:{
					items:6
				}
			}
		});    		
	}
	
	
	// Projects Carousel Two
	if ($('.projects-carousel-two').length) {
		$('.projects-carousel-two').owlCarousel({
			loop:true,
			margin:45,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});    		
	}
	
	
	//Price Range Slider
	if($('.price-range-slider').length){
		$( ".price-range-slider" ).slider({
			range: true,
			min: 0,
			max: 90,
			values: [ 8, 85 ],
			slide: function( event, ui ) {
			$( "input.property-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
		});
		
		$( "input.property-amount" ).val( $( ".price-range-slider" ).slider( "values", 0 ) + " - $" + $( ".price-range-slider" ).slider( "values", 1 ) );	
	}
	
	
	//Jquery Spinner / Quantity Spinner
	if($('.quantity-spinner').length){
		$("input.quantity-spinner").TouchSpin({
		  verticalbuttons: true
		});
	}
	
	
	// Projects Carousel Three
	if ($('.projects-carousel-three').length) {
		$('.projects-carousel-three').owlCarousel({
			loop:true,
			animateOut: 'slideOutUp',
    		animateIn: 'slideDown',
			margin:45,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="fas fa-angle-up"></span>', '<span class="fas fa-angle-down"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});    		
	}
	
	
	// Three Item Carousel
	if ($('.three-item-carousel').length) {
		$('.three-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				}
			}
		});    		
	}
	
	
	// Client Testimonial Carousel
	if ($('.client-testimonial-carousel').length) {
		$('.client-testimonial-carousel').owlCarousel({
			loop:true,
			margin:60,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	
	
	
	// Testimonial Carousel
	if ($('.testimonial-carousel').length) {
		$('.testimonial-carousel').owlCarousel({
			loop:true,
			animateOut: 'slideOutUp',
    		animateIn: 'slideDown',
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});    		
	}
	
	
	// Single Item Carousel
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			//animateOut: 'slideOutUp',
    		//animateIn: 'slideDown',
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back-5"></span>', '<span class="flaticon-next"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});    		
	}
	
	
	// News Carousel
	if ($('.news-carousel').length) {
		$('.news-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	

	// Services Carousel
	if ($('.services-carousel').length) {
		$('.services-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:false,
			smartSpeed: 700,
			autoplay: true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1024:{
					items:3
				},
				1280:{
					items:3
				}
			}
		});
	}
	
	
	// Client Carousel
	if ($('.client-carousel').length) {
		$('.client-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			navText: [ '<span class="flaticon-back-5"></span>', '<span class="flaticon-next"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1024:{
					items:1
				},
				1280:{
					items:1
				}
			}
		});
	}
	
	
	// Team Carousel
	if ($('.team-carousel').length) {
		$('.team-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				}
			}
		});    		
	}
	
	
	// Product Carousel Slider
	if ($('.history-carousel .content-carousel').length && $('.history-carousel .thumbs-carousel').length) {

		var $sync3 = $(".history-carousel .content-carousel"),
			$sync4 = $(".history-carousel .thumbs-carousel"),
			flags = false,
			durations = 500;

			$sync3
				.owlCarousel({
					loop:false,
					items: 1,
					margin: 0,
					nav: true,
					navText: [ '<span class="icon flaticon-left-arrow"></span>', '<span class="icon flaticon-next-1"></span>' ],
					dots: false,
					autoplay: true,
					autoplayTimeout: 5000
				})
				.on('changed.owl.carousel', function (e) {
					if (!flags) {
						flags = false;
						$sync4.trigger('to.owl.carousel', [e.item.index, durations, true]);
						flags = false;
					}
				});

			$sync4
				.owlCarousel({
					loop:false,
					margin: 0,
					items: 1,
					nav: true,
					navText: [ '<span class="icon flaticon-left-arrow"></span>', '<span class="icon flaticon-next-1"></span>' ],
					dots: false,
					center: false,
					autoplay: true,
					autoplayTimeout: 5000,
					responsive: {
						0:{
				            items:1,
				            autoWidth: false
				        },
				        400:{
				            items:1,
				            autoWidth: false
				        },
				        600:{
				            items:1,
				            autoWidth: false
				        },
				        900:{
				            items:1,
				            autoWidth: false
				        },
				        1000:{
				            items:1,
				            autoWidth: false
				        }
				    },
				})
				
		.on('click', '.owl-item', function () {
			$sync3.trigger('to.owl.carousel', [$(this).index(), durations, true]);
		})
		.on('changed.owl.carousel', function (e) {
			if (!flags) {
				flags = true;		
				$sync3.trigger('to.owl.carousel', [e.item.index, durations, true]);
				flags = false;
			}
		});

	}

	
	
	// Sponsors Carousel
	if ($('.sponsors-carousel').length) {
		$('.sponsors-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-next-1"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1024:{
					items:5
				}
			}
		});
	}
	
	
	// Sponsors Carousel Two
	if ($('.sponsors-carousel-two').length) {
		$('.sponsors-carousel-two').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back"></span>', '<span class="flaticon-next-1"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1024:{
					items:4
				}
			}
		});
	}
	

	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
	}
	

	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab animated fadeIn');
				$(target).fadeIn(0);
				$(target).addClass('active-tab animated fadeIn');
			}
		});
	}


	//Masonary
	function enableMasonry() {
		if($('.masonry-items-container').length){
	
			var winDow = $(window);
			// Needed variables
			var $container=$('.masonry-items-container');
	
			$container.isotope({
				itemSelector: '.masonry-item',
				 masonry: {
					columnWidth : 1
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
	
			winDow.bind('resize', function(){

				$container.isotope({ 
					itemSelector: '.masonry-item',
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});
		}
	}
	
	enableMasonry();
	
	
	
	//
	//====================================================================//
	// Sortable Masonary with Filters
	//====================================================================//
	//
	function sortableMasonry() {
		if($('.sortable-masonry').length){
	
			var winDow = $(window);
			// Needed variables
			var $container=$('.sortable-masonry .items-container');
			var $filter=$('.filter-btns');
	
			$container.isotope({
				filter:'*',
				 masonry: {
					columnWidth : '.masonry-item.col-lg-6'
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
			// Isotope Filter 
			$filter.find('li').on('click', function(){
				var selector = $(this).attr('data-filter');
	
				try {
					$container.isotope({ 
						filter	: selector,
						animationOptions: {
							duration: 500,
							easing	: 'linear',
							queue	: false
						}
					});
				} catch(err) {
	
				}
				return false;
			});
	
	
			winDow.bind('resize', function(){
				var selector = $filter.find('li.active').attr('data-filter');

				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});
	
	
			var filterItemA	= $('.filter-btns li');
	
			filterItemA.on('click', function(){
				var $this = $(this);
				if ( !$this.hasClass('active')) {
					filterItemA.removeClass('active');
					$this.addClass('active');
				}
			});
		}
	}
	
	sortableMasonry();


	//Progress Bar
	if($('.progress-line').length){
		$('.progress-line').appear(function(){
			var el = $(this);
			var percent = el.data('width');
			$(el).css('width',percent+'%');
		},{accY: 0});
	}


	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				
			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}

	
	//Custom Seclect Box
	if($('.custom-select-box').length){
		$('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
	}
	

	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}
	
	
	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true
				},
				website: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}
	
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}
	
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}
	

	//Gallery Filters
	 if($('.filter-list').length){
	 	 $('.filter-list').mixItUp({});
	 }


/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
		enableMasonry();
		sortableMasonry();
	});	

})(window.jQuery);

</script>