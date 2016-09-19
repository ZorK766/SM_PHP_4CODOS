//Réglages du slider Vegas
$("#homeslider, body").vegas({
    delay: 3000,
    timer: false,
    /*shuffle: true,
     transition: 'slideDown2',
     transitionDuration: 2000,*/
    slides: [
        {src: "img/sm_background_proximite_01.jpg"},
        {src: "img/backgrounds/background_01.jpg"},
        {src: "img/backgrounds/background_02.jpg"},
        {src: "img/backgrounds/background_03.jpg"},
        {src: "img/backgrounds/background_04.jpg"},
        {src: "img/backgrounds/background_05.jpg"},
        {src: "img/backgrounds/background_06.jpg"},
        {src: "img/backgrounds/background_07.jpg"},
        {src: "img/backgrounds/background_08.jpg"},
        {src: "img/backgrounds/background_09.jpg"},
        {src: "img/backgrounds/background_10.jpg"},
        {src: "img/backgrounds/background_11.jpg"},
        {src: "img/backgrounds/background_12.jpg"},
        {src: "img/backgrounds/background_13.jpg"},
        {src: "img/backgrounds/background_14.jpg"}
    ]
});










jQuery(document).ready(function ($) {
// Effet de Hover sur une image
    $(function () {
        $('#menu img').hover(function () {
            $(this).css("cursor", "pointer");
            this.src = 'images/icon_03_over.png';
        }, function () {
            this.src = 'images/icon_03.png';
        });
    });
    // Fenêtre panier qui s'ouvre
    $(function () {
        $('#panier_ico').click(function () {
            if ($(this).hasClass('show2')) {
                $("#panier").animate({
                    right: "-68px"
                }, 500, function () {
                    // Animation complete.
                });
                $(this).removeClass('show2').addClass('hide2');
            } else {
                $("#panier").animate({
                    right: "-230px"
                }, 500, function () {
                    // Animation complete.
                });
                $(this).removeClass('hide2').addClass('show2');
            }

        });


    });
    // Smooth scroll
    $(function () {
        $('#fleche').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    });
    // Changer d'affichage Grid List
    $(function () {
        $('#ligne').click(function () {
            $('.liste').css({
                "width": "100%"
            });
        });
        $('#grille').click(function () {
            $('.liste').css({
                "width": "33%"
            });
        });
    });


    $(window).scroll(function () {
        posScroll = $(document).scrollTop();
        if ((posScroll >= 600) && (posScroll !== 0))
            $('.menu_scroll').fadeIn(600);
        else
            $('.menu_scroll').fadeOut(600);
    });


});

//Function pour offir un scrolling doux lors du clic sur un lien pointant sur une ancre
var $smoothScrollTime = 500; //Le temps de l'animation en ms
$(function () {
    $('.smoothScroll').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, $smoothScrollTime);
                return false;
            }
        }
    });
});


/*$(window).bind('scroll', function () {
 var menu = $('header');
 if ($(window).scrollTop() > menu.offset().top) {
 menu.addClass('fixed');
 } else {
 menu.removeClass('fixed');
 }
 });*/