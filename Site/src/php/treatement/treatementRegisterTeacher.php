<?php
/**
 * ETML
 * User: mayorjo
 * Date: 16.05.2017
 * Summmary : Page de traitement pour l'enregistrement d'un professeur
 */

//Variables
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$address = $_POST["adress"];
$zipcode = $_POST["zipcode"];
$job = $_POST["job"];
$avs = $_POST["avs"];

//Variable de contrôle
$fieldControl = false;

//Regex

$regexName = "#^[a-zA-Z\-\ \é\è\ö]+$#";
$regexLastname = "#^[a-zA-Z\-\ \é\è\ö]+$#";
$regexMail = "#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#";
$regexTel = "#^[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}$#";
$regexAddress = "#^[a-zA-Z éàü.,-]+ [0-9]{1,4}$#";
$regexZipcode = "#^[0-9]{4}$#";
$regexJob = "#^[a-zA-Z\-\ \é\è\ö]+$#";
$regexAvs = "#^756\.[0-9]{4}\.[0-9]{4}\.[0-9]{2}$#";

//Vérification de
if($name == ""|| $lastname == ""|| $mail == ""|| $phone == ""|| $address == ""|| $zipcode == ""|| $job == "")
{
    echo "<p>Champs incomplets !</p>";
    $fieldControl = true;
}
if($fieldControl == false) {
//Début - Vérfication des différents champs
    if (!preg_match($regexName, $name)) {
        echo "<p> Le prénom est faux </p>";
        $fieldControl = true;
    }
    if (!preg_match($regexLastname, $lastname)) {
        echo "<p> Le nom est faux </p>";
        $fieldControl = true;
    }
    if (!preg_match($regexMail, $mail)) {
        echo "<p> Le E-mail est faux </p>";
        $fieldControl = true;
    }
    if (!preg_match($regexTel, $phone)) {
        echo "<p> Le Nb de téléphone est faux </p>";
        $fieldControl = true;
    }
    if (!preg_match($regexAddress, $address)) {
        echo "<p> L'adresse est fausse </p>";
        $fieldControl = true;
    }
    if (!preg_match($regexZipcode, $zipcode)) {
        echo "<p> Le numéro postale est faux </p>";
        $fieldControl = true;
    }
    if (!preg_match($regexJob, $job)) {
        echo "<p> Le champ \"travail\" est faux </p>";
        $fieldControl = true;
    }
    if (!preg_match($regexAvs, $avs)) {
        echo "<p> Le champ \"AVS\" est faux </p>";
        $fieldControl = true;
    }
//FIN - Vérfication des différents champs
}
//Redirection en cas de fautes
if($fieldControl == true)
{
    ?>
    <p>redirection dans 3 secondes </p>
    <meta http-equiv="refresh" content="3; URL=../registerTeacher.php">
    <?php
}

else
{
    //Inclusion des fonctions PDOLink
    include "../functions/PDOLink.php";

    //Création d'un objet PDOLink
    $connection = new PDOlink();

    //Requête
    $querry = "INSERT INTO `t_former`(`forName`, `forFirstname`, `forAddress`, `forEmail`, `forPhoneNumber`, `forJob`, `forAVSNumber`) VALUES ('$name','$lastname','$address','$mail','$phone','$job','$avs')";

    //Exécution de la reqête
    $connection->executeQuery($querry);

    ?>
    <p>
        Ajout des données à la base
    </p>
    <p>redirection dans 3 secondes </p>
    <meta http-equiv="refresh" content="3; URL=../index.php">
    <?php
}
