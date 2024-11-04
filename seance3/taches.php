<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="icon-font/lineicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    

</head>
<body>
     <?php include 'connexionBD.php' ?>
    <?php
        // Requête SQL
        $sql = 'SELECT * FROM todos';
        // Envoyer la requête au serveur et récupérer le résultat
        $reponse = $pdo->query($sql);

        $todo = $reponse->fetchall(PDO::FETCH_ASSOC);
    ?>
    <!--Améliorer l'affichage des données -->
    <div class="container">
     <hr>
      <div class="row">
      <a href="ajoutertache.php"> <i class="bi bi-plus-square"></i></a>
    </div>
    <hr>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Cin</th>
      <th scope="col">due_date</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach($todo as $tab) : ?>
  <tr>
       
      <td><?php echo $tab['ID'] ?></td>
      <td><?php echo $tab['Title'] ?></td>
      <td><?php echo $tab['Description'] ?></td>
      <td><?php echo $tab['due_date'] ?></td>
      <td><?php echo $tab['complete'] ?></td>
      <td>
        <a href="supprimertache.php?id=<?= $tab['ID'] ?> "><i class="bi bi-trash3-fill"></i></a> 
      <a href="modifierformtache.php?id=<?= $tab['ID'] ?>"><i class="bi bi-pencil"></i></a>
    </td>
    </tr>
     
    <?php endforeach; ?>
     
  </tbody>
</table>
    </div>

 
    <script src="js/bootstrap.min.js"></script>
</body>
</html>