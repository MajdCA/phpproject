<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="icon-font/lineicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body>


<div class="container">


<?php include 'connexionBD.php' ?>
<?php
if (!empty($_POST)) {
    // Récupérer les informations de la tâche à partir du formulaire
    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $due_date = $_POST['due_date'];
// Ajouter le contenu dans la table todos dans la BD
                // Préparer la requête d'insertion
                $sql = "INSERT INTO todos (title,description, due_date) 
                        VALUES ('$title', '$description', '$due_date')";
                // Envoyer la requête
                $reponse = $pdo->exec($sql);

                if ($reponse) {
                    echo '<div class="alert alert-success" role="alert">';
                        echo "Insertion efféctuée avec succès";
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">';
                        echo "Problème d'insertion de cette tâche";
                    echo '</div>';    
                }
            }
        
        
?>
     <hr>
     <div class="col">
            <a href="taches.php" class="btn btn-primary float-end"><i class="bi bi-house-heart-fill"></i></a>
      </div>
<form action="<?= $_SERVER['PHP_SELF']?>"  method="POST">
    
  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" class="form-control" name="title" id="Title" aria-describedby="emailHelp">
     
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <input type="text" class="form-control" name="description" id="Description">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">due_date</label>
    <input type="date" class="form-control" name="due_date" id="due_date">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>