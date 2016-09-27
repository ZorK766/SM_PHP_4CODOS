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









//Scripts a charger avec la page
jQuery(document).ready(function ($) {

//Functions Ajax pour l'ajout de produits dynamique
//detection du clic sur le formulaire add_cart
    $(".ajouter_panier").click(function (e) {

        e.preventDefault();
        //recupération des id qte et id_articles

        //récupère l'article cliqué
        var $id = $(this);
        //récupère son id article
        var id_article = $id.attr("id");
        // recupère la valeur de l'id qte concatené suivant la valeur de l'id article
        var qte = $("#qte_" + id_article + " option:selected").val();
        console.log(id_article);
        console.log(qte);
        //
        $.post(
                'panier.ajax.php', // Le fichier cible côté serveur.
                {
                    Sujet: id_article, // Nous supposons que ce formulaire existe dans le DOM.
                    codeA: id_article,
                    qte: qte
                },
                'nom_fonction_retour', // Nous renseignons uniquement le nom de la fonction de retour.
                'html' // Format des données reçues.
                )
                .done(function (data) {

                    $('#panier_content').html(data);
                    opencart();
                }).fail(function () {
//alert("error");
        })
                .always(function () {
                    //alert("finished");
                });
        //Function pour l'affichage dynamique du panier
        function nom_fonction_retour(texte_recu) {
            // Du code pour gérer le retour de l'appel AJAX.

        }
    });
// Effet de Hover sur une image
    $(function () {
        $('#menu img').hover(function () {
            $(this).css("cursor", "pointer");
            this.src = 'images/icon_03_over.png';
        }, function () {
            this.src = 'images/icon_03.png';
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





//Panier qui s'ouvre au clic
$(function () {
    $('#panier_ico').click(function () {
        var cart = $('#panier_ico');
        if (cart.hasClass('show2')) {
            $("#panier").animate({
                right: "-68px"
            }, 500, function () {
                // Animation complete.
            });
            cart.removeClass('show2').addClass('hide2');
        } else {
            $("#panier").animate({
                right: "-330px"
            }, 500, function () {

            });
            cart.removeClass('hide2').addClass('show2');
        }
    });
});

// Fenêtre panier qui s'ouvre
function opencart() {
    var cart = $('#panier_ico');
   
        $("#panier").animate({
            right: "-68px"
        }, 500, function () {
            // Animation complete.
        });
        cart.removeClass('show2').addClass('hide2');
  
}
;






