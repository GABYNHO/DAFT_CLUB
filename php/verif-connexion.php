<?php
session_start();

// connexion a la base de donné
include "../bdd/bdd.php";
bdd_connexion();
global $bdd;

//récupération des données du form
$identifiant = $_POST['identifiant'];
$mdp = $_POST['mdp'];

// requete sql pour avoir une listes des utilisateurs du site
$sql = "SELECT * FROM utilisateur";
$result = mysqli_query($bdd, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = $result->fetch_assoc()) {

        if (($row["identifiant"]==$identifiant) && ($row["mdp"]==md5($mdp))) {
            //connexion réussi
            $_SESSION['connected']=true;
            //on init les variables de session
            $_SESSION['login']=$identifiant;
            $_SESSION['password']=$mdp;
            $_SESSION['prenom']=$row["prenom"];
            $_SESSION['nom']=$row["nom"];

            //redirection vers l'accueil
            header('location: ./accueil.php');
        }
    }
}
if($_SESSION['connected']==false) {
    //si l'identifiant et le mot de passe ne correspondent pas
    header('location: ./connexion.php');
}

    