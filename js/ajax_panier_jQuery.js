
jQuery(document).ready(function () {
    
    //detection du clic sur le formulaire add_cart
    $(".add_cart").click(function(){
        
        //recupération des id qte et id_articles
        
        //récupère l'article cliqué
        var $id = $(this);
        //récupère son id article
        var id_article = $id.attr("id");
        
        // recupère la valeur de l'id qte concatené suivant la valeur de l'id article
        var qte = $("qte_"+id_article).val();
        
        console.log(id_article);  
        console.log(qte);
        
        //
        $.post(
            'panier.ajax.php', // Le fichier cible côté serveur.
            {
                qte : $("qte").val(),// Nous supposons que ce formulaire existe dans le DOM.
                codeA : $("id_article").val()
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



