<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Brief : Formulaire d'inscription à un cours
 */

#Ajout des fchiers HEADER et de connexion à la base de données
include "functions/PDOLink.php";
include "include/head.php";

#Récupération de l'ID et du nom de l'élève / enseignant
$id = $_GET['id'];
$name = $_GET['name'];

#Ouvre une nouvelle connexion à la base de données
$connector = new PDOLink();

#Inserer la requête dans un variable "query"
$query = "SELECT traWording, idTraining FROM t_training";

#Lance la requête
$req = $connector->executeQuery($query);
?><!------------------------------------------------------------------------------------------------------------------->

<!--Ajout de la page de style-->
<link rel="stylesheet" type="text/css" href="../../ressources/css/registerTeacher.css">

<!--Affichage des informations du site-->
<body>
    <div id="form">

        <!--Affichage du formulaire-->
        <form action="treatement/treatmentRegisterTraining.php" method="POST" enctype="multipart/form-data">

            <h2>INSCRIPTION</h2>

            <!--Champ NOM-->
            <div class="left">
                <span class="titleForm">Nom</span><br>
                <input type="text" class="champText champs" name="name"  value="<?php echo $name ?>"><br>
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

            <div class="hidden">
                <span class="titleForm"></span><br>
                <input type="hidden"  name="idStudent"  value="<?php echo $id ?>"><br>
            </div>

            <!--Bouton d'envoi-->
            <button id="submit" type="submit">Envoyer</button>
        </form>
    </div><!--form-->
</body>

<?php
#Fermeture de la connexion à la base de données
$connector->closeCursor($req);
$connector->destroyObject();
include "include/footer.php";
?>
