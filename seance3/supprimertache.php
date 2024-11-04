<?php
    include "connexionBD.php";
    
    // Récupérer l'id de la tâche à supprimer
    $idtache = $_GET['id'];
 

    // Supprimer la tache avec l'id récupéré
    // Préparer la requête SQL
    $sql = "DELETE FROM todos WHERE id = $idtache";

    // Exécuter la requête
    $rep = $pdo->exec($sql);

    // Retourner vers la page clients.php
    header('Location:taches.php');
?>