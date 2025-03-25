<?php
session_start();

//suppression des variables d'erreur
unset($_SESSION['error_nom']);
unset($_SESSION['error_prenom']);
unset($_SESSION['error_email']);
unset($_SESSION['error_genre']);
unset($_SESSION['error_fonction']);
unset($_SESSION['error_date']);
unset($_SESSION['error_sujet']);
unset($_SESSION['error_contenu']);

//récupération des données du form
$_SESSION['nom_form'] = $_POST['nom'];
$_SESSION['prenom_form'] = $_POST['prenom'];
$_SESSION['email_form'] = $_POST['email'];
$_SESSION['genre_form'] = $_POST['genre'];
$_SESSION['fonction_form'] = $_POST['fonction'];
$_SESSION['date_form'] = $_POST['date'];
$_SESSION['sujet_form'] = $_POST['sujet'];
$_SESSION['contenu_form'] = $_POST['contenu'];

//variable de détection d'erreur
$error = false;

//verification des données
//le nom
if ($_SESSION['nom_form']=="") {
    $error = true;
    $_SESSION['error_nom'] = "Veuillez renseigner ce champ correctement"; 
}
//le prenom
if ($_SESSION['prenom_form']=="") {
    $error = true;
    $_SESSION['error_prenom'] = "Veuillez renseigner ce champ correctement"; 
}
//l'email
if ($_SESSION['email_form']=="") {
    $error = true;
    $_SESSION['error_email'] = "Veuillez renseigner ce champ correctement"; 
}
//le genre
if ($_SESSION['genre_form']=="") {
    $error = true;
    $_SESSION['error_genre'] = "Veuillez renseigner ce champ correctement"; 
}
//la fonction
if ($_SESSION['fonction_form']=="rien") {
    $error = true;
    $_SESSION['error_fonction'] = "Veuillez renseigner ce champ correctement"; 
}
//la date
if ($_SESSION['date_form']=="") {
    $error = true;
    $_SESSION['error_date'] = "Veuillez renseigner ce champ correctement"; 
}
//le sujet
if ($_SESSION['sujet_form']=="") {
    $error = true;
    $_SESSION['error_sujet'] = "Veuillez renseigner ce champ correctement"; 
}
//le contenu
if ($_SESSION['contenu_form']=="") {
    $error = true;
    $_SESSION['error_contenu'] = "Veuillez renseigner ce champ correctement"; 
}

//si pas d'erreur
if ($error==false) {
    //confrmation de l'envoi
    $_SESSION['envoi'] = true;
    //on efface toute les variables du form
    unset($_SESSION['nom_form']);
    unset($_SESSION['prenom_form']);
    unset($_SESSION['email_form']);
    unset($_SESSION['genre_form']);
    unset($_SESSION['fonction_form']);
    unset($_SESSION['date_form']);
    unset($_SESSION['sujet_form']);
    unset($_SESSION['contenu_form']);
}
//on revient à la page contact
header('location: ./contact.php');
?>

