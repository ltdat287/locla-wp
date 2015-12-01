(function($) {
    "use strict";
	
	// clear inputs on focus
	$( "input[type=text]" ).focus(function() {
		this.value = "";
	});

	// search form toggle
	$( "a.search-button" ).on( "click", function(e) {
	  	e.preventDefault();
	  	
	  	$( "#searchform" ).toggle();
	  	$( "a.search-button i" ).toggleClass( "icon-remove" );
	});
	
    // set default search text
    $( "#searchform input[type='text']" ).attr( "placeholder", "Tìm kiếm..." );
    
    // set comment form placeholder text
    $( ".comment-form-author input" ).attr( "placeholder", $( ".comment-form-author label" ).text() );
    $( ".comment-form-email input" ).attr( "placeholder", $( ".comment-form-email label" ).text() );
    $( ".comment-form-url input" ).attr( "placeholder", $( ".comment-form-url label" ).text() );
    $( ".comment-form-comment textarea" ).attr( "placeholder", $( ".comment-form-comment label" ).text() );

    // remove elements from the dom for display purposes
    $( "h1.page-title, .woocommerce-result-count, .woocommerce-ordering, p.demo_store" ).remove();
     
	// image zoom
	$( ".woocommerce-main-image" ).magnificPopup({
		type				: 'image',
        closeOnContentClick : true,
        closeBtnInside		: false,
        fixedContentPos		: true,
        mainClass			: 'mfp-no-margins mfp-with-zoom',
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300
          }
	});
	
    // product thumbnails
    $( ".thumbnails a" ).on( "click", function(e) {
        e.preventDefault();

        var fullsize_img = $( this ).attr( 'href' );
        $( '.woocommerce-main-image img' ).attr( 'src', fullsize_img );
    }); 
    
    // change related products title
    $( ".woo-single .related.products h2" ).html( "Sản phẩm liên quan" );
    
    // inject title into cart
    $( ".shop_table thead" ).before( "<h2>Giỏ hàng</h2>" );
    
    // add button class to various cart functions
    $( ".shipping-calculator-button, .woocommerce .edit, .woocommerce-message > a" ).addClass( "button" );
    
    // add masonry class to products grid
    $( "#woo.grid > .products" ).addClass( "masonry" );
    
    // bind filter button click
    $( "#store-cat li a" ).on( "click", function(e) {
        e.preventDefault();
        
        // change button state
        $( "#store-cat li a.current" ).removeClass( "current" );
		$( this ).addClass( "current" );
      
        var filterValue = $( this ).attr( "data-filter" );
        $container.isotope({ filter: filterValue });
    });
	
	// sidebar toggle
	$( "a.aside-open" ).on( "click", function(e) {
		e.preventDefault();
		
		$( "html, body" ).animate({ scrollTop: 0 }, 0);
		$( "#push, #aside" ).toggleClass( "toggled" );
		$( "a.aside-open i" ).toggleClass( "icon-remove" );
	});
    
    // primary drop menu
    $("#primary li").hover(function() {
          $(this).find('ul:first').stop(true, true).animate({
                height: ['toggle', 'swing'],
                opacity: 'toggle'
          }, 200, 'linear');
    });
	
    // masonry
    var $container = $( ".masonry" );
    
    $container.imagesLoaded( function(){
        $container.isotope({
            layoutMode: 'packery',
            packery: {
              columnWidth: '.masonry-item, .product'
            },
            itemSelector: '.masonry-item, .product'
        });
    });

	// form validation
	$( "#contact_form" ).validate({
        rules: {
            firstname    : 'required',
            lastname     : 'required',
            email : {
                required : true,
                email    : true
            },
            phone : {
                required : true,
                digits   : true
            },
            message      : 'required'
        },
        messages : {
            firstname    : 'Hãy điền Họ của bạn',
            lastname     : 'Hãy điền Tên của bạn',
            email : {
                required : 'Chúng tôi cần email để liên hệ với bạn',
                email    : 'Không đúng định dạng email. Email phải có dạng hello@example.com'
            },
            phone : {
                required : 'Chúng tôi cần số điện thoại của bạn để liên hệ.',
                digits   : 'Hãy điền số và không có khoảng trắng.'
            },
            message      : 'Hình như bạn quên điều gì đó.'
        }
    });
})(jQuery);