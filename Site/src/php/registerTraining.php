<?php
/**
 * ETML
 * User: guggisbeti
 * Date: 16.05.2017
 * Brief : Formulaire d'inscription à un cours
 */

include "functions/PDOLink.php";

include "include/head.php";

$id = $_GET['id'];
$name = $_GET['name'];
?>
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerTeacher.css">

<body>
<div id="form">
    <form action="treatement/treatmentRegisterTraining.php" method="POST" enctype="multipart/form-data">

        <h2>INSCRIPTION</h2>

        <div class="left">
            <span class="titleForm">Nom</span><br>
            <input type="text" class="champText champs" name="name"  value="<?php echo $name ?>"><br>
        </div>
        <?php
        $connector = new PDOLink();

        //2ème : Faire la requête
        //Inserer la requête dans un variable "query"
        $query = "SELECT traWording, idTraining FROM t_training";

        //Lance la requête
        $req = $connector->executeQuery($query);

        //Preparation des données à s'afficher
        $data = $connector->prepareData($req);
        ?>
        <p>
            <label for="training">Cours :
                <select name="training" id="training">

                    <?php

                    foreach($data as $training)
                    {
                        ?>
                            <option value='<?php echo $training['idTraining'] ?>'> <?php echo $training['traWording'] ?></option>
                         <?php
                    }
                    //Ecrase la requête
                    $connector->closeCursor($req);
                    //Stop la connexion
                    $connector->destroyObject();
                    ?>
                </select>
            </label>
        </p>

        <div class="hidden">
            <span class="titleForm"></span><br>
            <input type="hidden"  name="idStudent"  value="<?php echo $id ?>"><br>
        </div>

        <button id="submit" type="submit">Envoyer</button>

    </form>
</div>
</body>

<?php
include "include/footer.php";
?>
