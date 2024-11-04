
<?php

//on va voir comment accepter les données

//puisque lors de l'envoie on a utilisé la méthode post, lors de la réception on va utiliser la 
// variable $_post 
//c'est une variable prédifinie pour php (c'est un tableau associatif)
//elle va stocker les données envoyées par la méthode post

var_dump($_POST); 
//pour voir le nom de la variable et son contenu
//essayer de supprimer un name de email il ne sera pas envoyé un input doit donc obligatoirement avoir un name

?>