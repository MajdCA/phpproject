<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>La concaténation</h1>
                
            <?php 
            //$chaine="chaine double cote";
           // $chaine1='chaine 2';
            //la différence au niveau de la concaténation simple et double 
            //exemple chaine double côte (3 façons de faire)
            $classe="dsi22";
            $msg="Bonjour $classe <br>";
            echo $msg;
            
            //ou bien concat avec le point
            $msg="Bonjour " .$classe. " et bienvenus <br>";
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

       
    
    </body>
</html>