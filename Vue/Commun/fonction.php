<?php

require 'Modele/modele.php';

class connexion extends modele {

    public function leLogin() {
        $requete = $this->_bdd->query("select login from Utilisateurs");
    }

}
