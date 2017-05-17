<?php
/**
 * ETML
 * Auteur: Jérôme Wassenberg
 * Date: 21.03.2017
 * Description: Page de visualisation des élèves et des enseignants
 **/

#Inclusion des fichier d'en-tête et de fonctions de connexion à la BD
include 'include/head.php';
include 'functions/PDOLink.php';

#Connexion à la BD
$PDOLink = new PDOLink();

#Récupération de l'identifiant de l'élève
$id = $_GET['id'];

#Séléction des informations de l'élève pour l'affichage
$query="SELECT * FROM t_student WHERE idStudent = $id";
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
                <h1>Informations de l'élève</h1>

                <div id="container">
                    <div id="photo">
                        <img src="../../ressources/images/logo_student.png">
                    </div>

                    <div id="informations">
                        <h2>Nom : <?php echo $display['stuName'] ?></h2><br><br>
                        <h2>Prénom : <?php echo $display['stuFirstname'] ?></h2><br><br>
                        <h2>Adresse : <?php echo $display['stuAddress'] ?></h2><br><br>
                        <h2>Téléphone : <?php echo $display['stuPhoneNumber'] ?></h2><br><br>
                        <h2>Email : <?php echo $display['stuEmail'] ?></h2><br><br>
                        <h2>N° d'AVS : <?php echo $display['stuAVSNumber'] ?></h2><br><br>
                    </div>

                    <div id="link">
                        <a href="registerTraining.php?id=<?php echo $display['idStudent']?>&name=<?php echo $display['stuFirstname']?>">
                            <img src="../../ressources/images/book.jpg">
                        </a><br>
                        <a href="registerTraining.php?id=<?php echo $display['idStudent']?>&name=<?php echo $display['stuFirstname']?>">S'inscrire à un cours</a>
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