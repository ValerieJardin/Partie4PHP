<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit 
             la concaténation de ces deux paramètres. -->
        <title>Exercice 5 de la partie 4 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php

// Déclaration de ma fonction pour concaténer un nombre et une chaîne de caractères 
            function concatStringNumber($integer, $character) {
// J'indique ce que doit renvoyer ma fonction               
                return $integer . $character;
            }

// Appel de la fonction en donnant des valeurs aux deux paramètres de ma fonction concatStringNumber
            echo concatStringNumber(10, ' % de réduction sur les champignons !');
            ?>       
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