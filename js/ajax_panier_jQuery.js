
jQuery(document).ready(function() {
    $("#panier").on("click",function clickEvent() { 
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
                console.log("trgfguc");
            }
        })
    });
});

