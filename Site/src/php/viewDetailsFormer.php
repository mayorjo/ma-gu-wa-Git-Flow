<?php
/**
 * ETML
 * Auteur: Timothée Guggisberg
 * Date: 17.05.2017
 * Description: Page de détail des enseignants
 **/

#Inclusion des fichier d'en-tête et de fonctions de connexion à la BD
include 'include/head.php';
include 'functions/PDOLink.php';

#Connexion à la BD
$PDOLink = new PDOLink();

#Récupération de l'identifiant de l'élève
$id = $_GET['id'];

#Séléction des informations de l'élève pour l'affichage
$query="SELECT `idFormer`, `forName`, `forFirstname`, `forAddress`, `forEmail`, `forPhoneNumber`, `forJob`, `forAVSNumber` FROM `t_former` WHERE idFormer = $id";
$req = $PDOLink->executeQuery($query);
$result = $PDOLink->prepareData($req);
?>

    <!--Récupération du fichier de style-->
    <link type="text/css" rel="stylesheet" href="../../ressources/css/viewDetails.css">

    <!--Début de l'affichage du site-->
    <body>
    <section>
        <?php foreach ($result as $display)
        {?>
            <h1>Informations du formateur</h1>

            <div id="container">
                <div id="photo">
                    <img src="../../ressources/images/logo_teacher.png">
                </div>

                <div id="informations">
                    <h2>Nom : <?php echo $display['forName'] ?></h2><br><br>
                    <h2>Prénom : <?php echo $display['forFirstname'] ?></h2><br><br>
                    <h2>Adresse : <?php echo $display['forAddress'] ?></h2><br><br>
                    <h2>Téléphone : <?php echo $display['forPhoneNumber'] ?></h2><br><br>
                    <h2>Email : <?php echo $display['forEmail'] ?></h2><br><br>
                    <h2>Travail : <?php echo $display['forJob'] ?></h2><br><br>
                    <h2>N° d'AVS : <?php echo $display['forAVSNumber'] ?></h2><br><br>
                </div>
                
            </div>
            <?php
        }
        ?>
    </section>
    </body>

<?php
#Fermeture de la connexion à la BD
$PDOLink->closeCursor($req);
$PDOLink->destroyObject();

#Ajout du footer
include 'include/footer.php';
?>