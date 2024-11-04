<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Les Boucles</h1>
        <?php /*
            Une structure itérative (ou boucle) est un bloc d’instructions dont le but est répéter une opération tant qu’une ou plusieurs conditions sont vérifiées. PHP en distingue 5 :
            - while
            - do while
            - for
            - foreach
                Les boucles permettent de répéter des opérations 
                élémentaires un grand nombre de fois sans avoir 
                à réécrire le même code. Selon l’instruction de 
                boucle utilisée, le nombre d’itérations peut être 
                défini à l’avance ou être 
                déterminé par une condition particulière.
             */
            ?>
        <h2>La boucle For</h2>
             
                 
            <?php 
             //identique à Javascript
             //Le nombre d’itérations est connu d’avance.
             /*Syntaxe
                for(expression1; expression2; expression3)
                    { //instruction ou bloc;
                        }*/
            //exemple 1
            for($i=0;$i<5;$i++)
            echo $i .'<br>';

            //exemple 2
            for($i=1;$i<7;$i++)
            { 
            echo "<h$i style='color:red'> $i:Titre de niveau $i</font></h$i>";
            }
            ?>
    <h2>La boucle while</h2>
            <?php
            /*
            while condition booléenne:
            Instruction 1 # Tant que la condition booléenne est vérifiée
            Instruction 2  # Faire les différentes instructions qui suivent
            .......
            Instruction n*/

            //exemple
            $i=1;
            while($i<5)
            {
                echo $i .'<br>';         
                $i++;
            }

            ?>
    <h2>La boucle do ... while</h2>
       <?php
        /*
        Syntaxe

        do
            {
                instructions
                } while (condition(s))

             */
       //exemple
       $i = 0;
        do {
         echo $i ." " . '<br>';
         $i++;
        } while ($i < 10);
 
       
       ?>
       


    <h2>La boucle for....each</h2>

    <?php
    /*
    pour la boucle for on commence par un indice et on fait les itérations en se basant sur un pas (par défaut 1)
    pour les tableaux associatifs, on a pas des indices 
    on a des couples clé/valeur

    $voiture=[
        marque =>"peuget",
        puissance =>"5CV",
        anneefab =>2005
    ]
    donc on peut pas utiliser la boucle for pour parcourir ce tableau associatif
 
    La boucle foreach est particulièrement efficace pour lister les tableaux associatifs dont il n’est nécessaire de connaître ni le nombre d’éléments ni les clés.
    Sa syntaxe est variable selon que vous souhaitez récupérer seulement les valeurs ou les valeurs et les clés (ou les indices).
    Syntaxe
    foreach($tableau as $valeur) car partie key non obligatoire 
    {
      //bloc utilisant la valeur de l'élément courant
     }

     foreach($tableau as $valeur) car partie key non obligatoire 
    {
      //bloc utilisant la valeur de l'élément courant
     }
    */
    //exemple 1
    $voiture=[
        'marque' => "peuget",
        'puissance' => "5CV",
        'anneefab' => 2005
    ];
    foreach($voiture as $x => $y)
     {
        echo $x . ' :'  . $y .'<br>';
     }

     //exemple 2

     $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
    echo "$x = $val<br>";
}

    //exemple 3
     $colors = array("red", "green", "blue", "yellow");

     foreach ($colors as $value) {
       echo "$value <br>";
     }
     
     //NB La boucle foreach tableau et tableau asociatif
     //boucle for tableau slt indexé
     //ts les boucles sont des cas particuliers de while sauf foreach

    ?>
    </body>
</html>