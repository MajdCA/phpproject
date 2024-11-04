<!DOCTYPE html>
<html>
    <head>
        <title>Les variables</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Les variables</h2>
        
         
            
            <?php 
            //déclaration des variables
            $classe='DSI22';//variable de type chaine de caractère
            $annee=2022; //variable de type entier
            echo $classe;
            //echo '<br>';
            //ou bien
            echo "<p> $classe</p>";
            echo $annee .'<br>';

            $a = 0;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.<br>";
  var_dump((isset($a)));
}

$b = null;
// False because $b is NULL
var_dump((isset($b)));
if (isset($b)) {
  echo "Variable 'b' is set.";
}    
 ?>
        
    </body>
</html>