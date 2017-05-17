<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 16.05.2017
 *   Brief : Page de traitement du formulaire d'inscription à un cours
 */

include '../functions/PDOLink.php';

#Récupération des informations du formulaire
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$avs = $_POST['avs'];

#Regex
$regexName = "#^[a-zA-Z\-\ \é\è\ö]+$#";
$regexMail = "#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#";
$regexPhone = "#^[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}$#";
$regexAddress = "#^[a-zA-Z éàü.,-]+ [0-9]{1,4}$#";
$regexZipcode = "#^[0-9]{4}$#";
$regexAVS = "#^756\.[0-9]{4}\.[0-9]{4}\.[0-9]{2}$#";

if(!preg_match($regexName, $name) && !preg_match($regexName, $firstname) && !preg_match($regexMail, $mail) && !preg_match($regexPhone, $phone) && !preg_match($regexAddress, $address) && !preg_match($regexZipcode, $zipcode) && !preg_match($regexAVS, $avs))
{
    echo "Certains de vos champs sont inccorects, veuillez les corrigés";
    ?>
    <meta http-equiv="refresh" content="3; URL=../registerToCours.php">
<?php
}
else
{
    $connector = new PDOLink();

    #2ème : Faire la requête
    #Inserer la requête dans un variable "query"
    $query = "INSERT INTO `t_student`(`stuName`, `stuFirstname`, `stuAddress`, `stuEmail`, `stuPhoneNumber`, `stuAVSNumber`) VALUES ('$name','$firstname','$address','$mail','$phone','$avs')";

    #Lance la requête
    $req = $connector->executeQuery($query);

    echo "La base de donnée a été mise à jour";

    #Ecrase la requête
    $connector->closeCursor($req);
    #Stop la connexion
    $connector->destroyObject();
?>
    <meta http-equiv="refresh" content="3; URL=../index.php">
<?php
}
?>