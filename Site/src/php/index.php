<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Description: Page d'accueil du site
 */

#Ajout de la partie HEADER
include 'include/head.php';
?><!------------------------------------------------------------------------------------------------------------------->

<!--Ajout du fichier style d ela page-->
<link rel="stylesheet" type="text/css" href="../../ressources/css/index.css">

<!--Affichage des informations de la page-->
<section>

    <!--Texte de bienvenue-->
    <div id="welcomeText">
        <h1>Bienvenue sur Catalogin</h1>
        <p>Ce site permet de vous inscrire à des cours sur les branches dans lesquels vous rencontrez des difficultés ! En cas de problème sur le site, n'hésitez pas à nous contacter</p>
    </div>

    <!--Images et redirection vers les différentes sections-->
    <div id="images">

        <!--Rediréction vers la page d'inscription à un cours-->
        <div class="leftImage">
            <a href="registerToCours.php">
                <img class="indexImages" src="../../ressources/images/wallpaper_registerStudent.jpg"><br>
            </a>
            <a id="link1" href="registerToCours.php">S'inscrire à un cours</a>
        </div>

        <!--Rediréction vers la page de visualisation des élèves-->
        <div class="rightImage">
            <a href="viewStudentTeacher.php">
                <img class="indexImages" src="../../ressources/images/wallpaper_registerStudent.jpg"><br>
            </a>
            <a id="link2" href="viewStudentTeacher.php">Visualiser les élèves</a>
        </div>

        <!--Rediréction vers la page d'inscription en temps qu'enseignant-->
        <div class="leftImage">
            <a href="registerTeacher.php">
                <img class="indexImages" src="../../ressources/images/wallpaper_registerStudent.jpg"><br>
            </a>
            <a id="link3" href="registerToCours.php">s'inscrire en temps qu'enseignant</a>
        </div>

        <!--Rediréction vers la page d'évaluation-->
        <div class="rightImage">
            <a href="commentCours.php">
                <img class="indexImages" src="../../ressources/images/wallpaper_registerStudent.jpg"><br>
            </a>
            <a id="link4" href="registerToCours.php">Evaluer une formation</a>
        </div>
    </div>
</section>

<?php
#Ajout de la partie FOOTER
include 'include/footer.php';
?>