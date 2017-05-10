<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/> 
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!-- Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut 
             prendre comme valeur :
             - Homme
             - Femme
             La fonction doit renvoyer en fonction des paramètres :
             - Vous êtes un homme et vous êtes majeur
             - Vous êtes un homme et vous êtes mineur
             - Vous êtes une femme et vous êtes majeur
             - Vous êtes une femme et vous êtes mineur
             Gérer tous les cas. -->
        <title>Exercice 7 de la partie 4 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php

            // Déclaration de ma fonction pour concaténer un nombre et une chaîne de caractères 
            function checkGenderAge($gender, $age) {
                // J'indique ce que doit renvoyer ma fonction               
                // Déclaration des conditions sur le genre
                if ($gender == 'femme') {
                    $variable_gender = 'Vous êtes une femme ';
                }else{
                    $variable_gender = 'Vous êtes un homme ';
                }
                // Déclaration des conditions sur l'âge
                if (!is_int($age) || $age < 0) {
                    $variable_age = ' mais vous n\'avez pas entré une valeur correspondant à un âge !! ';
                }elseif ($age < 18) {
                    $variable_age = 'et vous êtes mineur.';
                }else{
                    $variable_age = 'et vous êtes majeur.';
                }
                // Indique ce que doit retourner ma fonction en tenant compte des valeurs de ses paramètres                
                return $variable_gender . $variable_age;
            }

            // Appel de la fonction en donnant des valeurs aux deux paramètres de ma fonction checkGenderAge
            $gender = 'femme';
            $age = -3;
            echo checkGenderAge($gender, $age);
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