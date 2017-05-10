<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
             Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
             Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
             Les deux nombres sont identiques si les deux nombres sont égaux. -->
        <title>Exercice 4 de la partie 4 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php

// Déclaration de ma fonction pour comparer deux nombres; elle ne peut être déclarer qu'une fois 
            function comparator($number1, $number2) {
                /** Déclaration des conditions avec utilisation d'une variable locale $result qui sera retourner "return" 
                  de ce fait qu'une fois * */
                if ($number1 < $number2) {
                    $result = 'Le premier nombre est plus petit';
                } elseif ($number1 > $number2) {
                    $result = 'Le premier nombre est plus grand';
                } elseif ($number1 == $number2) {
                    $result = 'Les deux nombres sont identiques';
                }
                // Résultat de la comparaison des deux nombres
                return $result;
            }
            ?>
            <!-- Appel de la fonction en donnant des valeurs aux deux paramètres de ma fonction comparator; 
                 elle peut être appellée plusieurs fois -->
        <p><?php echo comparator(123, 258) ?></p>
        <p><?php echo comparator(269, 147) ?></p>
        <p><?php echo comparator(258, 258) ?></p>       
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