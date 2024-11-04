<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Les types de variables</h1>
        <h2>Les chaines de caractères</h2>
                 
            <?php 
            $chaine="chaine double cote";
            $chaine1='chaine 2';
            //la différence au niveau de la concaténation simple et double 
            //exemple chaine double côte (3 façons de faire)
            $classe="dsi22";
            $msg="Bonjour $classe <br>";
            echo $msg;
            //ou bien concat avec le point
            $msg="Bonjour" .$classe. " et bienvenus <br>";
            echo $msg;
            //ou bien concat avec les accolades
            $msg= "Bonjour {$classe} et bienvenus encore une fois <br>";
            echo $msg;

            //exemple concat chaine simple cote
            $classe= "DSI21";
            $msg='Bonjour $classe <br>'; //elle se lit comme une partie du msg et non pas une variable
            echo $msg;
            //solution: faire sortir la variable du message
            $msg='Bonjour ' .$classe. '<br>'; 
            echo $msg;
            //===donc pour la déclaration c le m^me principe mais la différence c'est au niveau de l'affichage ===
            ?>

        <h2>Les nombres </h2>    
            
            <?php
            //NB. php distingue entre les types float, int, booleen, double, etc ou (pas comme js Number)
            //la distinction se fait sellon la valeur
            //la fonction gettype() permet de retourner le type d'une variable
            $nombre1=23.5;
            $nombre2=11;
            
            echo gettype($nombre1) . "<br>";
            echo gettype($nombre2) . "<br>";
        ?>
        
        <h2>Les booléens </h2> 
        <?php
            $var=True;
            $var1=False;
            echo gettype($var) . "<br>";
            echo gettype($var1) . "<br>";



            
        ?>

    <h2>Le type null</h2>
        <?php

        $var=null; 
        echo gettype($var);
        ?>
    
    <h2> Les Tableaux </h2>
    
        <?php
        // Les tableaux indexés 
        $tabnombres=[1,2,3,4];
        echo gettype($tabnombres) .'<br>';
        //ou bien 
        $tabnombres1=array(1,2,3,4);
        echo gettype($tabnombres1).'<br>';
        //afficher le contenu
        echo $tabnombres[2] .'<br>';

        //puisqu'on accède par les indices ce type de tableaux s'appelle les tableaux indexés
        //on peut aussi ajouter de nouvelles valeurs
        $tabnombres[3]=5;
        echo $tabnombres[3] .'<br>';
        $tabnombres[13]=33;
        echo $tabnombres[13] .'<br>';

        echo 'la taille ede mon tableau' . count($tabnombres);
        //echo 'valeur de 11 est' . $tabnombres[11] .'<br>';

        //les tableaux associatifs
        //c'est le m^me principe que les tableaux indexés sauf qu'o peut utiliser des indices qui ne sont pas de numéros 
        //c'est la meme différence entre un tab et un objet en javascript
        //les objet clé:valeur
        //de meme en php 
        $personne=[
            "nom"=>"Ben Ahmed",
            "prénom" =>"Mohamed",
            "age"=>23
        ];
                //associatif: il associe une clé à une valeur nb on peut avoir un tab ou les cases de differents types 

        echo gettype($personne) . '<br>';
        echo $personne["nom"] .'<br>';
        //on peut ajouter des elements 
        $personne['classe']='dsi22';
        echo $personne["classe"];

        ?>
    
    
    </body>
</html>