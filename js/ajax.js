function ajouterArticle(idArticle)
    {
        var ajax = new XHR();
        ajax.appendData('action','insert');
        ajax.appendData('ajax','ok');        
        ajax.appendData('id',''+idArticle);

        // mise à jour de l'apercu panier
        ajax.send("panier_update.php");
        ajax.complete = function (xhr)
        {
            document.getElementById('ajax_panier').innerHTML = xhr.responseText;
        }
        
    }




function modifierQTeArticle($libelleProduit,$qteProduit){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qteProduit > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
         }
      }
      else
      supprimerArticle($libelleProduit);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}



function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
   {
      $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}


function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}


function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['libelleProduit']);
   else
   return 0;

}



/*
function ajax()
{
    var xhr=null;
 
    if (window.XMLHttpRequest) { 
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) 
    {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    //on définit l'appel de la fonction au retour serveur
    xhr.onreadystatechange = function add($commande) { alert_ajax(xhr); };
 
    //on appelle le fichier reponse.txt
    xhr.open("POST", "http://gael-donat.developpez.com/web/intro-ajax/fichiers/reponse.txt", true);
    xhr.send(null);
}
 
function alert_ajax(xhr)
{
	alert(xhr.responseText);
}
*/