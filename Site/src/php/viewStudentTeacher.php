<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Brief : Page de visualisation des élèves / enseignants
 */

#Ajout de la partie HEADER et du fichier de connexion à la base de données
include 'include/head.php';
include 'functions/PDOLink.php';

#Nouvelle connexion à la base de données
$PDOLink = new PDOLink();

#Stockage des requêtes SQL
$query1="SELECT stuName, stuFirstname, idStudent FROM t_student";
$query2="SELECT forName, forFirstname, idFormer FROM t_former";

#Execution des requêtes
$req1 = $PDOLink->executeQuery($query1);
$req2 = $PDOLink->executeQuery($query2);
?><!------------------------------------------------------------------------------------------------------------------->

<!--Ajout du fichier style-->
<link type="text/css" rel="stylesheet" href="../../ressources/css/viewStudentTeacher.css">

<!--Affichage des données du site-->
<body>
    <section>

        <div id="container">

            <!--Titre-->
            <h1>Elèves</h1>

                <?php
                #Préparation des données
                $result1 = $PDOLink->prepareData($req1);

                #Affichage des informations des élèves
                foreach($result1 as $display)
                {
                    ?>
                        <a href="viewDetails.php?id=<?php echo $display['idStudent']?>">
                            <div id="cour">
                                <div>
                                    <div id="logo">
                                        <img src="../../ressources/images/logo_student.png">
                                    </div>
                                    <div id="name">
                                        <p><?php echo $display['stuFirstname']?></p>
                                        <p><?php echo $display['stuName']?></p>

                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                }
                ?>

                <!--Titre-->
                <h1>Enseignants</h1>

                <?php
                #Préparation des données
                $result2 = $PDOLink->prepareData($req2);

                #Affichage des informations des enseignants
                foreach($result2 as $display)
                {
                    ?>
                        <a href="viewDetailsFormer.php?id=<?php echo $display['idFormer']?>">
                            <div id="cour">
                                <div>
                                    <div id="logo">
                                        <img src="../../ressources/images/logo_teacher.png">
                                    </div>
                                    <div id="name">
                                        <p><?php echo $display['forFirstname']?></p>
                                        <p><?php echo $display['forName']?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                }
                ?>
        </div><!--container-->
    </section>
</body>

<?php
#Fermeture de la connexion à la base de données
$PDOLink->closeCursor($req1);
$PDOLink->closeCursor($req2);
$PDOLink->destroyObject();

#Ajout de la partie FOOTER
include 'include/footer.php';
?>