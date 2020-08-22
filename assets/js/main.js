;
(function ($) {

    "use strict";


    jQuery(document).on('ready', function () {

        /*===============================  
             Sticky
        ================================*/

        jQuery(window).on('scroll', function (event) {
            var scroll = jQuery(window).scrollTop();
            if (scroll < 160) {
                jQuery(".header-nav").removeClass("sticky");
            } else {
                jQuery(".header-nav").addClass("sticky");
            }
        });

        /*===============================  
             Mobile Menu 
        ================================*/

        var navtoggler = jQuery('.navbar-toggler');
        navtoggler.on('click', function () {
            jQuery(this).toggleClass('active');
        });
        
        var navbarnav = jQuery('.navbar-nav a');
        navbarnav.on('click', function () {
            jQuery(".navbar-toggler").removeClass('active');
        });
        var subMenu = jQuery(".sub-menu-bar .navbar-nav .sub-menu");

        if (subMenu.length) {
            subMenu.parent('li').children('a').append(function () {
                return '<button class="sub-nav-toggler"> <i class="fal fa-angle-down"></i> </button>';
            });

            var subMenuToggler = jQuery(".sub-menu-bar .navbar-nav .sub-nav-toggler");

            subMenuToggler.on('click', function () {
                jQuery(this).parent().parent().children(".sub-menu").slideToggle();
                return false
            });

        }


        

        /*===============================  
             Select Active 
        ================================*/

        // Iterate over each select element
        var selectitem = jQuery('select');
        selectitem.each(function () {

            // Cache the number of options
            var $this = $(this),
                numberOfOptions = $(this).children('option').length;

            // Hides the select element
            $this.addClass('s-hidden');

            // Wrap the select element in a div
            $this.wrap('<div class="select"></div>');

            // Insert a styled div to sit over the top of the hidden select element
            $this.after('<div class="styledSelect"></div>');

            // Cache the styled div
            var $styledSelect = $this.next('div.styledSelect');

            // Show the first select option in the styled div
            $styledSelect.text($this.children('option').eq(0).text());

            // Insert an unordered list after the styled div and also cache the list
            var $list = $('<ul />', {
                'class': 'options'
            }).insertAfter($styledSelect);

            // Insert a list item into the unordered list for each select option
            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val()
                }).appendTo($list);
            }

            // Cache the list items
            var $listItems = $list.children('li');

            // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
            $styledSelect.on('click', function (e) {
                e.stopPropagation();
                $('div.styledSelect.active').each(function () {
                    $(this).removeClass('active').next('ul.options').hide();
                });
                $(this).toggleClass('active').next('ul.options').toggle();
            });

            // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
            // Updates the select element to have the value of the equivalent option
            $listItems.on('click', function (e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel'));
                $list.hide();
                / alert($this.val()); Uncomment this for demonstration! /
            });

            // Hides the unordered list when clicking outside of it
            $(document).on('click', function () {
                $styledSelect.removeClass('active');
                $list.hide();
            });

        });

        /*===============================  
             Back to top
        ================================*/

        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > 600) {
                jQuery('.back-to-top').fadeIn(200)
            } else {
                jQuery('.back-to-top').fadeOut(200)
            }
        });
        jQuery('.back-to-top').on('click', function (event) {
            jQuery('html, body').animate({
                scrollTop: 0,
            }, 1500);
            event.preventDefault();
        });

        /*===============================  
             wow js
        ================================*/

        if ($('.wow').length) {
            var wow = new WOW({
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 250, // distance to the element when triggering the animation (default is 0)
                mobile: true, // trigger animations on mobile devices (default is true)
                live: true // act on asynchronously loaded content (default is true)
            });
            wow.init();
        }




    });


    jQuery(window).on('load', function (event) {

        /*===============================  
             Prealoder 
        ================================*/
        jQuery('#preloader').delay(500).fadeOut(500);
    });



    /*===============================  
         
    ================================*/









})(jQuery);
