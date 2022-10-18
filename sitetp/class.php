<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php

        /////////////////////////////////////////////////////////////

        /*   include 'personne.php';
        
        $valdo = new personne("valdo", 18, "G", "valdo.coding@gmail.com");
        $noe = new personne("Noé", 19, "G", "valdo.coding@gmail.com");
        $noa = new personne("Noa", 28, "G", "valdo.coding@gmail.com");
        $hamza = new personne("Hamza", 38, "G", "valdo.coding@gmail.com");
        



        $array = [$valdo, $noe, $noa, $hamza]; //On créé un tableau 
        $moyenne = 0;
        
        foreach($array as $user){ //On créé une boucle
            $user -> toString(); // On affiche les info de la personne
            $moyenne += $user -> getAge(); //On additionne l'age de la personne à la moyenne
        }
        
        $moyenne /= count($array); 
        echo "<br> la moyenne est de : ". $moyenne; */

        ///////////////////////////////////////////////////////////////////////////////

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=puissance-4', "root", "");
            foreach ($dbh->query('SELECT * from Game') as $row) {
                print_r($row);
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }


        /////////////////////////////////////////////////////////////////////////////////////////////////



        /* $valdo->toString();
        $noe->toString();
        $noa->toString();
        $hamza->toString();

        $moyenne = ($valdo->getAge() + $noa->getAge() + $noe->getAge() + $hamza->getAge() ) / 4;
        echo "<br> La moyenne d'age est : ". $moyenne; */










        /* echo $valdo->getPersonne() ."<br>"; 
        echo $noé->getPersonne() . "<br>";
        echo $noa->getPersonne() . "<br>";
        echo $hamza->getPersonne() . "<br>"; */

        /* echo $valdo->getAge(); */

        /* $table = array ($valdo, $noé, $noa, $Hamza ) */


        /* $age = 0; */











        ?>
    </div>

</body>

</html>