<?php
session_start();

// inclusion pour récupérer la fonction bdd_connexion() et $bdd
include '../bdd/bdd.php';

// connexion à la base de donnée 
bdd_connexion();
global $bdd;
//le user est maintenant connecté sur sont nouveau compte
$_SESSION['connected']=true;

//récupération des données du form
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$identifiant = $_POST['identifiant'];
$mdp = $_POST['mdp'];

// encodage du mot de passe
$encode_mdp = md5($mdp);

// Préparer la requête d'insertion
$requete = "INSERT INTO utilisateur (identifiant, mdp, nom, prenom) VALUES ('$identifiant', '$encode_mdp', '$nom', '$prenom')";

// Exécuter la requête
mysqli_query($bdd, $requete);

//on init les variables de session
$_SESSION['login']=$identifiant;
$_SESSION['password']=$mdp;
$_SESSION['nom']=$nom;
$_SESSION['prenom']=$prenom;

//redirection vers l'accueil
header("Location: accueil.php");
?>


