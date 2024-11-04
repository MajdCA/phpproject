<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Conversion de types</h1>
        
    
    <h2> La conversion de type en php </h2>
        <?php
        $a='10';
        echo gettype($a) .'<br>';
        //conversion en entier
        $b=(int)$a;
        echo gettype($b).'<br>';
        //conversion en float
        $c=(float)$a;
        echo gettype($c);
        //conversion en booléen
        $d=(bool)$a;
        echo gettype($d).'<br>';
        //il y'a d'autres facon de conversion mais celle la est laplus simple


        ?>
    </body>
</html>