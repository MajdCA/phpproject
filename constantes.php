<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Les constantes</h1>

        <?php
            define('moyenne', 10);
            
            echo 'La constante moyenne stocke la valeur ' .moyenne .'<br>';

            define('moy',23); //tester avec le même nom
            echo 'La constante moy stocke la valeur ' .moy .'<br>';
        ?>
         

         
             
        <?php
            define("cars", [
              "Alfa Romeo guilietta",
              "BMW",
              "Toyota"
            ]);
            echo cars[0];
        ?>

<?php
            //Affiche le numéro de la ligne où la constante a été appelée (dans le code)
            echo 'Numéro de ligne : ' .__LINE__. '<br>';
            
            //Affiche le chemin du ficher et son nom
            echo 'Chemin complet du fichier : ' .__FILE__. '<br>';
            
            //Affiche le nom du dossier qui contient le fichier
            echo 'Dossier contenant le fichier : ' .__DIR__. '<br>';
             
            //Affiche à nouveau la ligne où la constante a été appelée
            echo 'Version du PHP : ' .PHP_VERSION. '<br>';
            
            //Renvoie le nom de la fonction depuis laquelle la constante est appelée
             
        ?>


    </body>
</html>