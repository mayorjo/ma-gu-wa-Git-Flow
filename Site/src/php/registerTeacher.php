<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Description: Page d'inscription des enseignants
 */

#Ajout de la partie HEADER
include "include/head.php"
?><!------------------------------------------------------------------------------------------------------------------->

<!--Ajout du fichier style de la page-->
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerTeacher.css">

<!--Affichage des données du site-->
<body>
    <div id="form">

        <!--Affichage du formulaire d'inscription-->
        <form action="treatement/treatementRegisterTeacher.php" method="POST" enctype="multipart/form-data">

            <h2>INSCRIPTION</h2>

            <!--Champ NOM-->
            <div class="left">
                <span class="titleForm">Nom</span><br>
                <input type="text" class="champText champs" name="name" placeholder="..."><br>
            </div>

            <!--Champ PRENOM-->
            <div class="right">
                <span class="titleForm">Prénom</span><br>
                <input class="champs" type="text" name="lastname" placeholder="..."><br>
            </div>

            <!--Champ MAIL-->
            <div class="left">
                <span class="titleForm">Adresse e-mail</span><br>
                <input class="champs" type="text" name="mail" placeholder="..."><br>
            </div>

            <!--Champ TELEPHONE-->
            <div class="right">
                <span class="titleForm">N° Téléphone</span><br>
                <input class="champs" type="text" name="phone" placeholder="0XX XXX XX XX"><br>
            </div>

            <!--Champ ADRESSE-->
            <div class="left">
                <span class="titleForm">Adresse</span><br>
                <input class="champs" id="street" type="text" name="adress" placeholder="..."><br>
            </div>

            <!--Champ NPA-->
            <div class="right">
                <span class="titleForm">NPA°</span><br>
                <input class="champs numbre" type="text" name="zipcode" placeholder="XXXX"><br>
            </div>

            <!--Champ PROFESSION-->
            <div class="left">
                <span class="titleForm">Profession actuelle</span><br>
                <input class="champs" id="job" type="text" name="job" placeholder="..."><br>
            </div>

            <!--Champ AVS-->
            <div class="right">
                <span class="titleForm">N°AVS</span><br>
                <input class="champs" id="avs" type="text" name="avs" placeholder="756.XXXX.XXXX.XX"><br>
            </div>

            <!--Boutons Ajouter / Réinitialiser-->
            <button id="submit" type="submit">Ajouter</button>
            <button id="reset" type="reset">Réinitialiser</button>

        </form>
    </div><!--form-->
</body>

<?php
#Ajout de la partie FOOTER
include "include/footer.php";
?>
