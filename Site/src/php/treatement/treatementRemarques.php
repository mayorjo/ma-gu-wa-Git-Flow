<?php
/**
 * Created by PhpStorm.
 * User: mayorjo
 * Date: 17.05.2017
 * Time: 15:57
 */


//Variables
$name = $_POST["name"];
$lastname = $_POST["firstname"];
$message = $_POST["message"];
$idTraining = $_POST['training'];


//Variable de contrôle
$fieldControl = false;

//Regex
$regexName = "#^[a-zA-Z\-\ \é\è\ö]+$#";


//Vérification de
if($name == ""|| $lastname == ""|| $message == "")
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
    if (!preg_match($regexName, $lastname)) {
        echo "<p> Le nom est faux </p>";
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

    $connectionSel = new PDOlink();

    $querySel = "SELECT idStudent FROM t_student WHERE stuName = '$name' AND stuFirstname = '$lastname'";

    $req = $connectionSel->executeQuery($querySel);

    $data = $connectionSel->prepareData($req);

    foreach($data as $id)
    {
        $idStudent = $id['idStudent'];
    }

    //Vérification si le nom est dans la base
    if(isset($idStudent) == 0)
    {
        ?>
        <p>Vous n'êtes pas inscrit</p>
        <p>redirection dans 3 secondes </p>
        <meta http-equiv="refresh" content="3; URL=../registerTeacher.php">
        <?php
    }
    else {
        //Création d'un objet PDOLink
        $connection = new PDOlink();

        //Requête
        $query = "INSERT INTO `t_comment`(`comComment`, `idStudent`, `idTraining`) VALUES ('$message', $idStudent, $idTraining)";
        echo $query;
        //Exécution de la reqête
        $connection->executeQuery($query);

        ?>
        <p>
            Ajout des données à la base
        </p>
        <p>redirection dans 3 secondes </p>
        <meta http-equiv="refresh" content="3; URL=../index.php">
        <?php
    }
}
