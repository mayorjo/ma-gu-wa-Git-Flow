<?php
/**
 *   ETML
 *   Auteur : Jérôme Wassenberg, Jonathan Mayor, Timothée Guggisberg
 *   Date : 21.03.2017
 *   Description : Fonctions de connexion à la BD
 */
include "config.php";
class PDOlink {

    /** @var PDO $connector (constructeur par défaut)*/
    private $connector;

    #Etablissement de la connexion
    function __construct()
    {
        $this->connector = new PDO('mysql:host='.$GLOBALS['config']['location'].';dbname='. $GLOBALS['config']['dbname'],$GLOBALS['config']['username'],$GLOBALS['config']['password']);
    }

    #Prépare les données
    function executeQuery ($req)
    {
        $req = $this->connector->prepare($req);
        $req->execute();
        return $req;
    }

    #Affiche les données
    function prepareData ($req)
    {
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    #Ferme la connexion
    function closeCursor ($req)
    {
        $req->closeCursor();
    }

    #Destruit l'objet de connexion
    function destroyObject ()
    {
        unset($connector);
    }
}
?>