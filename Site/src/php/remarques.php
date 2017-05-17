<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Brief : Page d'ajout de remqrques
 */

#Ajout de la partie HEADER
include "include/head.php"
?><!------------------------------------------------------------------------------------------------------------------->

<!--Ajout du fichier style-->
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerTeacher.css">

<!--Affichage des données du site-->
<body>
    <div id="form">

        <!--Début du formulaire-->
        <form action="#" method="POST" enctype="multipart/form-data">

            <h2>Remarques</h2>

            <!--Champ NOM-->
            <div class="left">
                <span class="titleForm">Nom</span><br>
                <input type="text" class="champText champs" name="name" placeholder="..."><br>
            </div>

            <!--Champ Prénom-->
            <div class="right">
                <span class="titleForm">Prénom</span><br>
                <input class="champs" type="text" name="lastname" placeholder="..."><br>
            </div>

            <!--Champ MESSAGE-->
            <div class="left">
                <span class="message">Message :</span><br>
                <textarea placeholder="..." class="champs" name="message"></textarea><br>
            </div>

            <!--Boutons Envoyer / Réinitialiser-->
            <button id="submit" type="submit">Envoyer</button>
            <button id="reset" type="reset">Réinitialiser</button>

        </form>
    </div><!--form-->
</body>

<?php
#Ajout de la partie FOOTER
include "include/footer.php";
?>
