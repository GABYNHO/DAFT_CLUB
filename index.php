<?php
    // destruction puis re-création de la session
    session_destroy();
    session_start();

    // nous sommes de base non connecté
    $_SESSION['connected']=false;

    // on se connecte a la base de donnés
    include "/bdd/bdd.php";
    bdd_deconnexion();
    bdd_connexion();

    foreach($_SESSION['tableau'] as $id => $ligne) {
        $_SESSION['panier'][$id] = 0;
    }
    $_SESSION['somme_panier'] = 0;
    $_SESSION['prix_panier'] = 0;

    // après ces paramètrages on redirige vers accueil
    header("Location: /php/accueil.php");
?>

