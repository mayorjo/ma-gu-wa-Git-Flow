<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Brief : Page d'ajout de remqrques
 */

#Ajout de la partie HEADER
include "include/head.php";
include "functions/PDOLink.php";

#Ouvre une nouvelle connexion à la base de données
$connector = new PDOLink();

#Inserer la requête dans un variable "query"
$query = "SELECT traWording, idTraining FROM t_training";

#Lance la requête
$req = $connector->executeQuery($query);
?><!------------------------------------------------------------------------------------------------------------------->

<!--Ajout du fichier style-->
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerTeacher.css">

<!--Affichage des données du site-->
<body>
    <div id="form">

        <!--Début du formulaire-->
        <form action="treatement/treatementRemarques.php" method="POST" enctype="multipart/form-data">

            <h2>Remarques</h2>

            <!--Champ NOM-->
            <div class="left">
                <span class="titleForm">Nom</span><br>
                <input type="text" class="champText champs" name="name" placeholder="..."><br>
            </div>

            <!--Champ Prénom-->
            <div class="right">
                <span class="titleForm">Prénom</span><br>
                <input class="champs" type="text" name="firstname" placeholder="..."><br>
            </div>

            <p>
                <!--Affichage des cours-->
                <label for="training">Cours :
                    <select name="training" id="training">

                        <?php
                        #Préparation des données
                        $data = $connector->prepareData($req);
                        foreach($data as $training)
                        {
                            ?><option value='<?php echo $training['idTraining'] ?>'> <?php echo $training['traWording'] ?></option><?php
                        }
                        ?>
                    </select>
                </label>
            </p>
            <br>

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
