<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Description: Page d'inscription à un cours
 */

#Ajout de la partie HEADER
include "include/head.php"
?><!------------------------------------------------------------------------------------------------------------------->

<!--Ajout de la page de style-->
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerToCours.css">

<!--Affichage de informations de la page-->
<body>
    <div id="form">

        <!--Affichage du formulaire-->
        <form action="treatement/treatmentRegisterToCours.php" method="POST" enctype="multipart/form-data">

            <h2>INSCRIPTION</h2>

            <!--Champ NOM-->
            <div class="left">
                <span class="titleForm">Nom</span><br>
                <input type="text" class="champText champs" name="name" placeholder="..."><br>
            </div>

            <!--Champ PRENOM-->
            <div class="right">
                <span class="titleForm">Prénom</span><br>
                <input class="champs" type="text" name="firstname" placeholder="..."><br>
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
                <input class="champs" id="street" type="text" name="address" placeholder="..."><br>
            </div>

            <!--Champ NPA-->
            <div class="right">
                <span class="titleForm">NPA</span><br>
                <input class="champs numbre" type="text" name="zipcode" placeholder="XXXX"><br>
            </div>

            <!--Champ AVS-->
            <div class="left">
                <span class="titleForm">N°AVS</span><br>
                <input class="champs" id="avs" type="text" name="avs" placeholder="756.XXXX.XXXX.XX"><br>
            </div>

            <!--Boutons ajouter / réinitialiser-->
            <button id="submit" type="submit">Ajouter</button>
            <button id="reset" type="reset">Réinitialiser</button>

        </form>
    </div><!--Form-->
</body>

<?php
#Ajout de la partie FOOTER
include "include/footer.php";
?>