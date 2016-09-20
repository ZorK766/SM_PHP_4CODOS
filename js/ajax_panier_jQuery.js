

$(".add_cart").submit(function() { 
     console.log("test reussi");
     
});
    // Quand l'utilisateur clique sur "Ajouter au panier"
   /* var form_data =$(this).serialize();   // prepare form data for Ajax
    var button_content = $(this).find('button[type=submit]');
    button_content.html('Ajoute le produit au panier...');
    
    $.ajax({                             // effectue une requete AJAX sur CommandeManager.php
        
        url:'../inc/class/CommandeManager.class.php', // la ressource ciblée
        type: 'POST',                                 // le type de la requete HTTP
        datatype: 'json',                           // le type de données à recevoir
        data: form_data  
    }).done(function(data){    // on Ajax success
        $("")
        
    })
        
    
    
});*/








/*


function ajaxRequest() {
	
	try  //navigateur autre que IE ?
	{	// Oui
		var request = new XMLHttpRequest();
	}
		
	catch(e1)
	{
		try //navigateur IE6+ ou non?
		{
			request = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e2)
		{
			try //navigateur IE5 ou non?
			{ 
				request = ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e3)
			{
				request = false;
			}
		}
	}
	
	return request;
	
}



//params = "CommandeManager.class.php";
request = new ajaxRequest();

request.open("POST","CommandeManager.class.php", true);



request.onreadystatechange = function ()
{
	if (this.readyState === 4) 
	{
		if (this.status === 200)
		{
			if(this.responseText !== null)
			{
				document.getElementById('info').innerHTML = this.responseText;
			}
			else alert( " Erreur Ajax: Aucune donnée reçue");
		}
		else alert("Erreur Ajax :" + this.statusText);
	}
};


request.send(params);

*/