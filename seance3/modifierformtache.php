<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="icon-font/lineicons.css">
</head>
<body>
     
    <?php include 'connexionBD.php' ?>

    <div class="container">
        <?php
            // Récupérer l'id de la tâche à modifier
            $id_tache = $_GET['id'];
                
            // Récupérer les infos du client à modifier
            $sql = "SELECT * FROM todos WHERE id = $id_tache";
            $reponse = $pdo->query($sql);

            $tache = $reponse->fetch(PDO::FETCH_ASSOC);
        ?>
        <hr>
        <fieldset>
            <legend><h2>Modifier la tâche</h2></legend>
            <hr>
             <form action="modifiertache.php?idt=<?= $id_tache ?>" method="post">
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label" for="nom">title</label>
                    <div class="col-sm-7">
                        <input type="text" name="Title" class="form-control" id="Title" value="<?= $tache['Title'] ?>" placeholder="titre de la tache">
                    </div>
                </div>
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label" for="description">description</label>
                    <div class="col-sm-7">
                        <input type="text" name="Description" class="form-control" id="Description" value="<?= $tache['Description'] ?>" placeholder="description de la tache">
                    </div>
                </div>
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label" for="due_date">Due date</label>
                    <div class="col-sm-7">
                        <input type="date" name="due_date" class="form-control" id="due_date" value="<?= $tache['due_date'] ?>" placeholder="Date d'achèvement de la date">
                    </div>
                </div>
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label" for="complete">complete</label>
                    <div class="col-sm-7">
                        <input type="text" name="complete" class="form-control" id="complete" value="<?= $tache['complete'] ?>" placeholder="tache accomplie?">
                    </div>
                </div>
                 
                
                <div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btValider" class="btn btn-secondary">Valider</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>