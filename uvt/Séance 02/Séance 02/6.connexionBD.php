<!DOCTYPE html>
<html>
    <head>
        <title>Gestion des taches avec php et base de données</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Connexion à la base de données en php</h2>
         
    <h2> Eyape 1: script php pour faire une connexion à la base </h2>

    
    <?php
    
     //connexion au serveur BD
     //il existe plusieurs facons pour faire cette connexion
 
     $pdo=new PDO('mysql:host=localhost;dbname=dsi22_todo_app', 'root', '' );  //on a crée une nouvelle connexion et il faut indiquer des paramètres
     
     //requête 
     $requete = $pdo->query('SELECT * FROM todos order by complete, due_date');
     //requete contient les données mais non organisées
     //contenu de $requete
    // var_dump($requete);
     //pour aficher ces informations
     $todos = $requete->fetchAll(); 
     //contenu de $todos
     //var_dump($todos);

     //il faut donc améliorer l'affichage des données avec un tableau HTML
   
   ?>
    
<div class="container">
    <h1>Liste des tâches</h1>
    <!--on va utiliser un tableau (chercher donc tables dans bootdstrap-->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Complete</th>
      <th scope="col">Title</th>
      <th scope="col">Opérations</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($todos as $todo): ?>
    <tr>
      <th scope="row"><input type="checkbox" <?php if($todo['complete']) echo 'checked'; echo '';  // echo $todo['complete'] ? 'checked' : ' ' ?>  ></th> 
      <td class=<?= $todo['complete'] ? 'text-decoration-line-through' : '';  ?> ><?= $todo['title'] ?> </td>  
      <td>
      <button type="button" class="btn btn-secondary">Details</button>
<button type="button" class="btn btn-success">Edit</button>
<button type="button" class="btn btn-danger">Delete</button>


      </td>
       
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    </body>
</html>