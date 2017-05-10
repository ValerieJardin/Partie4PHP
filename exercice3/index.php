<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.-->
        <title>Exercice 3 de la partie 4 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php

// Déclaration de ma fonction pour concaténer 
            function concatenate($sentence1, $sentence2) {
// J'indique ce que doit renvoyer ma fonction               
                return $sentence1 . $sentence2;
            }

            $sentence1 = 'Il était seul, j\'étais seule ... ';
            $sentence2 = 'alors nous nous sommes dit pourquoi pas.';
// Appel de la fonction           
            echo concatenate($sentence1, $sentence2);
            ?>       
        </p>
        <!-- Mise en place des boutons de re-direction-->
        <div class="buttons">
            <a href="http://partie4/exercice1" title="Exercice 1"><button>Exercice 1</button></a>
            <a href="http://partie4/exercice2" title="Exercice 2"><button>Exercice 2</button></a>
            <a href="http://partie4/exercice3" title="Exercice 3"><button>Exercice 3</button></a>
            <a href="http://partie4/exercice4" title="Exercice 4"><button>Exercice 4</button></a>
            <a href="http://partie4/exercice5" title="Exercice 5"><button>Exercice 5</button></a>
            <a href="http://partie4/exercice6" title="Exercice 6"><button>Exercice 6</button></a>
            <a href="http://partie4/exercice7" title="Exercice 7"><button>Exercice 7</button></a>
            <a href="http://partie4/exercice8" title="Exercice 8"><button>Exercice 8</button></a>
        </div>
    </body>
</html>