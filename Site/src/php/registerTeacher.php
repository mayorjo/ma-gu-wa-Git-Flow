<?php
/**
 * Created by PhpStorm.
 * User: wassenbeje
 * Date: 05.04.2017
 * Time: 15:31
 */
include "include/head.php"
?>
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerTeacher.css">
<body>
    <div id="form">
        <form action="traitement/registerTeacherTraitement.php" method="POST" enctype="multipart/form-data">

            <h2>INSCRIPTION</h2>

            <div class="left">
                <span class="titleForm">Nom</span><br>
                <input type="text" class="champText champs" name="name" placeholder="..."><br>
            </div>

            <div class="right">
                <span class="titleForm">Prénom</span><br>
                <input class="champs" type="text" name="firstname" placeholder="..."><br>
            </div>

            <div class="left">
                <span class="titleForm">Adresse e-mail</span><br>
                <input class="champs" type="text" name="mail" placeholder="..."><br>
            </div>

            <div class="right">
                <span class="titleForm">N° Téléphone</span><br>
                <input class="champs" type="text" name="phone" placeholder="..."><br>
            </div>

            <div class="left">
                <span class="titleForm">Adresse</span><br>
                <input class="champs" id="street" type="text" name="adress" placeholder="..."><br>
            </div>

            <div class="right">
                <span class="titleForm">NPA°</span><br>
                <input class="champs numbre" type="text" name="streetNumbre" placeholder="..."><br>
            </div>

            <div class="left">
                <span class="titleForm">Profession actuelle</span><br>
                <input class="champs" id="job" type="text" name="job" placeholder="..."><br>
            </div>

            <div class="right">
                <span class="titleForm">N°AVS</span><br>
                <input class="champs" id="avs" type="text" name="avs" placeholder="..."><br>
            </div>

            <button id="submit" type="submit">Ajouter</button>
            <button id="reset" type="reset">Réinitialiser</button>

        </form>
    </div>
</body>

<?php
include "include/footer.php";
?>
