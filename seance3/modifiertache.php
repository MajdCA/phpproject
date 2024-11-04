<?php
    include "connexionBD.php";

    // Récupérer les informations du client à partir du formulaire
    $title = $_POST['Title'];
     $description = $_POST['Description'];
    $due_date= $_POST['due_date'];
    $complete = $_POST['complete']; 
      
    // Récupérer l'identifiant du client
    $id_tache = $_GET['ID'];

    // Préparer la requête de modification
    $sql = "UPDATE todos 
            SET title = '$title', 
                description = '$description',
                due_date = '$due_date',
                complete = '$complete'
                 
            WHERE id = $id_tache";

    $reponse = $pdo->exec($sql);
     

    header('Location:taches.php');
?>