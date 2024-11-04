<!DOCTYPE html>
<html>
    <head>
        <title>Les formulaires en PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Les formulaires avec php</h2>
        <!-- l'objectif des formulaires est de récupérer ce que l'utilisateur a écrit dans les champs -->
        <form action="traitementpost.php" method="post">
            <div class="container" py=4px>

            <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="password" name="password" class="form-control" id="exampleInputPassword1">
             </div>
             
            <button type="submit" class="btn btn-primary">Submit</button>
             <!-- voir documentation button bootsrap -->
        </div>
        <!-- une fois l'utilisateur saisit ces données et clique sur submit, 
        le login et password seront récupérer par le  serveur avec un mécanisme php-->

        <!-- paramètres pour envoyer les données -->
    

            </form>
            
           
            <?php 
             
            ?>
        
    </body>
</html>