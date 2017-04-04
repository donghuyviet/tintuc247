(function($) {
    "use strict";
    $(document).ready(function() {

        // back top
        var backtop = $(".back-to-top");
        backtop.hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                backtop.fadeIn();
            } else {
                backtop.fadeOut();
            }
        });
        $('.back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        // tab
        $(".tabContents").hide();
        $(".tabContents:eq(0)").show();
        $("#tabContaier ul li:eq(0) a").addClass("active");
        $("#tabContaier ul li a").click(function() {
            var activeTab = $(this).attr("href");
            $("#tabContaier ul li a").removeClass("active");
            $(this).addClass("active");
            $(".tabContents").hide();
            $(activeTab).fadeIn();
            return false;
        });
        // end tab

        // end back top

        /* * demo owl
            $("#owl-example").owlCarousel({
                items: 5,
                itemsDesktop: [1199,4],
                itemsCustom: [[0, 2], [400, 4], [700, 6], [1000, 8], [1200, 10], [1600, 16]],
                singleItem: false,
                slideSpeed: 200,
                paginationSpeed: 800,
                autoPlay: false,
                stopOnHover: false,
                navigation: false,
                navigationText: ["prev","next"],
                pagination: true,
                paginationNumbers: false,
                responsive: true,
                addClassActive: false
            });
        */
        $(".news-event").owlCarousel({
            items: 4,
            singleItem: false,
            slideSpeed: 800,
            paginationSpeed: 800,
            autoPlay: false,
            stopOnHover: false,
            navigation: true,
            navigationText: ["", ""],
            pagination: false,
            paginationNumbers: false,
            responsive: true,
            addClassActive: false
        });

        $("#footer-logo .image-adv").owlCarousel({
            items: 4,
            singleItem: false,
            slideSpeed: 800,
            paginationSpeed: 800,
            autoPlay: false,
            stopOnHover: false,
            navigation: true,
            navigationText: ["", ""],
            pagination: false,
            paginationNumbers: false,
            responsive: true,
            addClassActive: false
        });

        var nav = $('.nav-primary');

        $(window).scroll(function() {
            if ($(this).scrollTop() > 76) {
                nav.addClass("f-nav animated fadeInDown");
            } else {
                nav.removeClass("f-nav animated fadeInDown");
            }
        });

    });
})(jQuery);