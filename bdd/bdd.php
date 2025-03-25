<?php
require_once 'bddData.php';

// fonction de connexion à la base de donnés
function bdd_connexion(){
    global $bdd, $serveur, $utilisateur, $mot_de_passe, $base_de_donnees;
    $bdd = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
    // Vérifier la connexion
    if (!$bdd) {
        die("La connexion à la base de données a échoué : ".mysqli_connect_error());
    } else {
        return true;
    }    
}

// fonction de deconnexion à la base de donnés
function bdd_deconnexion(){
    global $bdd;
    // Fermer la connexion à la base de données
    mysqli_close($bdd);
}

// fonction de récuperation des donnés 
function bdd_recup(){
    global $bdd;
    //remplissage du tableau de session
    $sql = "SELECT * FROM produit";
    $result = mysqli_query($bdd, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Tableau associatif pour stocker les données
        $_SESSION['tableau'] = array();
        // Parcourir chaque ligne de résultats
        while ($row = $result->fetch_assoc()) {
            // Ajouter la ligne dans le tableau associatif
            $_SESSION['tableau'][] = $row;
        }
    }
}

// connexion à la base de donnée
bdd_connexion();

// on récupère les données
bdd_recup();
?>