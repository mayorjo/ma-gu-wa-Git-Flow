<?php
/**
 * ETML
 * User: Timothée Guggisberg
 * Date: 16.05.2017
 * Brief : Traitement du formulaire registerTraining.php afin de mettre les donnée insérée dans la BDD
 */

include '../functions/PDOLink.php';

$idStudent = $_POST['name'];
$training = $_POST['training'];


    $connector = new PDOLink();

//2ème : Faire la requête
//Inserer la requête dans un variable "query"
    $query = "INSERT INTO `t_participate`(`idTraining`, `idStudent`) VALUES ('$training','$idStudent')";
echo $query;
//Lance la requête
    $req = $connector->executeQuery($query);

    echo "La base de donnée a été mise à jour";

    //Ecrase la requête
    $connector->closeCursor($req);
    //Stop la connexion
    $connector->destroyObject();

?>
<meta http-equiv="refresh" content="3; URL=../index.php">

