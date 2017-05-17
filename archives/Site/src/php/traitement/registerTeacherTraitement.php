<?php
/**
 * ETML
 * User: mayorjo
 * Date: 09.05.2017
 * Summary: Page de traitement pour la page registerTeacher
 */

include "../include/head.php";
?>

    <h1>Traitement en cours !</h1>

    <meta http-equiv="refresh" content="3; URL=../index.php">
<?php
include "../include/footer.php";

/**********************************************************************************************************************/

    //Variables
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $mailAddress = $_POST['mail'];
    $phoneNb = $_POST['phone'];
    $address = $_POST['adress']." ".$_POST['streetNumbre'];
    $job = $_POST['job'];
    $avsNb = $_POST['avs'];

    //Inclusion de la classe PDOLink
    include "../include/PDOLink.php";

    //Création d'un objet PDOLink
    $connection = new PDOLink();

    //Requête
    $querry = "INSERT INTO `t_former` (`idFormer`, `forName`, `forFirstname`, `forAddress`, `forEmail`, `forPhoneNumber`, `forJob`, `forAVSNumber`) VALUES (NULL, '$name', '$firstname', '$address', '$mailAddress', '$phoneNb', '$job', '$avsNb')";
    //echo $querry;

    //Exécution de la requête
    $connection->executeQuery($querry);