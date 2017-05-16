<?php
/**
 * Created by PhpStorm.
 * User: guggisbeti
 * Date: 10.05.2017
 * Time: 14:00
 */
include "include/head.php"
?>
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerTeacher.css">
<body>
<div id="form">
    <form action="#" method="POST" enctype="multipart/form-data">

        <h2>Remarques</h2>

        <div class="left">
            <span class="titleForm">Nom</span><br>
            <input type="text" class="champText champs" name="name" placeholder="..."><br>
        </div>

        <div class="right">
            <span class="titleForm">Prénom</span><br>
            <input class="champs" type="text" name="lastname" placeholder="..."><br>
        </div>

        <div class="left">
            <span class="message">Message :</span><br>
            <textarea placeholder="..." class="champs" name="message"></textarea><br>
        </div>

        <button id="submit" type="submit">Envoyer</button>
        <button id="reset" type="reset">Réinitialiser</button>

    </form>
</div>
</body>

<?php
include "include/footer.php";
?>
