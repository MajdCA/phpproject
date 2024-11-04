<!DOCTYPE html>
<html>
    <head>
        <title>Les formulaires en PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <meta charset="utf-8" />
    </head>
    <body>
        <div class="container">
        <h2>Afficher les données du formulaire dans une liste ul</h2>
        <ul class="list-group">
            <!--on utilise une boucle foreach pour récupérer les éléments  -->

           
            <?php 
             foreach ($_POST as $key => $value)
             {
             ?>
            <li class="list-group-item">
                <?php
                echo $key .":" . $value ?>
                <!-- remarque ici puisque c'est un simple echo on fait juste '< ?= pour remplacer '< ?php echo' -->

             </li>
              <?php  
             }
              //NB. on peut utiliser au lieu de {} : et endforeach ?>


        </div>
    </body>
</html>