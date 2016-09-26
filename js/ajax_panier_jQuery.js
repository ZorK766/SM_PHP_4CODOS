
jQuery(document).ready(function () {
    
    $(".add_cart").click(function(){
        var $id = $(this);
        var id_article = $id.attr("id");
        
        console.log(id_article);
        $.post(
            'panier.ajax.php', // Le fichier cible côté serveur.
            {
                qte : $("#ajouter_panier").val(),// Nous supposons que ce formulaire existe dans le DOM.
                codeA : $("#contenu").val()
            },
            'nom_fonction_retour', // Nous renseignons uniquement le nom de la fonction de retour.
            'text' // Format des données reçues.
        );
        function nom_fonction_retour(texte_recu){
            // Du code pour gérer le retour de l'appel AJAX.
        }
    });
});



        /*
         $("#panier").on("click",function clickEvent(e) { 
         e.preventDefault();
         var test = 1;
         $.ajax({
         'url':'index.php', // la ressource ciblée
         'type': 'POST',                                 // le type de la requete HTTP
         'data': {'article_ajax_requete': test},
         'success': function(data){
         $("#panier_content").text(data);
         }, 
         'error' :function(request, error)
         {
         alert("Problème de requete ajax");
         }
         })
         });
         
         */



