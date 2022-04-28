<?php

require_once 'index.php';

function login() {
    $logclient = filter_input(INPUT_POST, $login);
    $requete = $_bdd->query('select login from Utilisateurs;');
    $logserv = $requete;
    if ($logserv == $logclient) {
        echo 'Utilisateur Check';
    } else {
        echo 'Utilisateur incorrect';
    }
}

function mdp() {
    $mdpclient = filter_input(INPUT_POST, $pwd);
    $requete2 = $_bdd->query('select mdp from Utilisateurs;');
    $mdpserv = $requete2;
    if ($mdpclient == $mdpserv) {
        echo'MDP Check';
    } else {
        echo 'Mot de passe incorrect';
    }
}

echo '<h3>Affichage du contenu du cookie:</h3>';

if (!isset($_COOKIE ['Cookie'])) {
} else {
    $tabCookie = unserialize($_COOKIE ['Cookie']);

    foreach ($tabCookie as $champs => $valeur) {
        echo "$champs : $valeur <br/>";
    }
}


$tabCookie = array(
    "identifiant" => filter_input(INPUT_POST, "login"),
    "Mot de passe" => filter_input(INPUT_POST, "pwd"));
