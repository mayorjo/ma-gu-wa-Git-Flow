<?php
/**
 * ETML
 * Auteur: Jérôme Wassenberg
 * Date: 29.03.2017
 * Description: Partie HEAD des pages HTML
 */

?>
<!--PAGE HTML-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>P_Scrum</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Laison aux fichiers de styles-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../ressources/css/common.css">
        <link rel="stylesheet" type="text/css" href="../../ressources/css/login.css">
    </head>

    <!--Affichage du site-->
    <body>
        <!--Partie suppérieure du site-->
        <header>
            <!--Barre de naviguation-->
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="registerTeacher.php">S'inscrire en tant qu'enseignant</a>
                    </li>
                    <li>
                        <a href="viewStudentTeacher.php">Elèves & Formateurs</a>
                    </li>
                    <li>
                        <a href="commentCours.php">Remarques</a>
                    </li>
                    <li>
                        <a href="registerToCours.php">S'inscrire à un cours</a>
                    </li>
                </ul>
            </nav>
        </header>
