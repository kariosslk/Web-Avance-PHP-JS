<?php

require_once 'config.inc.php';

class Modele {

    protected $_bdd;

    function connexionBdd() {
        try {
            $pdoOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $bdd = new PDO('mysql:host=' . SERVEURBD . ';dbname=' . NOMDELABASE, LOGIN, MOTDEPASSE, $pdoOptions);
            $bdd->exec("set names utf8");
            return $bdd;
        } catch (PDOException $ex) {
            print "Erreur : " . $ex->getMessage() . "<br/>";
            die();
        }
    }
}
