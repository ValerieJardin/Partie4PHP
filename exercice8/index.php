<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
             Tous les paramètres doivent avoir une valeur par défaut. -->
        <title>Exercice 8 de la partie 4 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php

// Déclaration de ma fonction add servant à additionner 3 nombres ayant une valeur par défaut 
            function add($number1=0, $number2=0, $number=0) {
// J'indique ce que doit renvoyer ma fonction càd la somme des trois nombres
                $sum = $number1 + $number2 + $number;
                return $sum;
            }
            ?>
        <!--Appel de la fonction--> 

        <p><?php echo add(156, 52, 2); ?></p>
        <!-- L'intéret de mettre des variables par défaut qui n'ont pas d'incidence c'est qu'ensuite je peux mettre que 2 valeurs-->
        <p><?php echo add(156, 52); ?></p>  
        </p>
        <!-- Mise en place des boutons de re-direction-->
        <div class="buttons">
            <a href="http://partie4/exercice1"><button>Exercice 1</button></a>
            <a href="http://partie4/exercice2"><button>Exercice 2</button></a>
            <a href="http://partie4/exercice3"><button>Exercice 3</button></a>
            <a href="http://partie4/exercice4"><button>Exercice 4</button></a>
            <a href="http://partie4/exercice5"><button>Exercice 5</button></a>
            <a href="http://partie4/exercice6"><button>Exercice 6</button></a>
            <a href="http://partie4/exercice7"><button>Exercice 7</button></a>
            <a href="http://partie4/exercice8"><button>Exercice 8</button></a>
        </div>
    </body>
</html>