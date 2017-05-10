<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!-- Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une 
             chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->
        <title>Exercice 6 de la partie 4 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php

// Déclaration de ma fonction pour concaténer 3 variables 
            /**
             * 
             * @param type $firstname
             * @param type $lastname
             * @param type $age
             * @return type
             * 
             */
            function welcome($firstname, $lastname, $age) {
// J'indique ce que doit renvoyer ma fonction càd concaténation des trois paramètres               
                return 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans.';
            }

// Appel de la fonction en donnant des valeurs aux 3 paramètres de ma fonction welcome
            $firstname = 'Will';
            $lastname = 'FRIDE';
            $age = 24;
            echo welcome($firstname, $lastname, $age);
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