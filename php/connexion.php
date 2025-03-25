<?php
session_start();
include 'squeleton-html.php';
?>
<div id="fond_page_connexion">
    <p id="titre">REJOIGNEZ LE DAFT CLUB !</p>
    <div id="bloc_forms">
        <!-- formulaire d'inscription -->
        <form class="form_inscription" method="POST" action="creation_compte.php">
            <p class="titre_form">Nouveau ? Créez votre compte !</p>
            <label>Nom : </label>
            <input required type="text" id="nom-inscription" name="nom" placeholder="insérez votre nom"><br>
            <label>Prénom : </label>
            <input required type="text" id="prenom-inscription" name="prenom" placeholder="insérez votre prenom"><br>
            <label>Identifiant : </label>
            <input required type="text" id="pseudo-inscription" name="identifiant" placeholder="insérez votre identifiant"><br>
            <label>Mot de passe : </label>
            <input required type="password" id="mdp-inscription" name="mdp" placeholder="insérez votre mot de passe"><br>
            <input class="submit" type="submit" value="TERMINÉ">
        </form>
        <!-- formulaire de connexion -->
        <form class="form_inscription" method="POST" action="verif-connexion.php">
            <p class="titre_form">Déjà membre ? Connectez vous !</p>
            <label>Identifiant : </label>
            <input required type="text" id="pseudo-connexion" name="identifiant" placeholder="insérez votre identifiant"><br>
            <label>Mot de passe : </label>
            <input required type="password" id="mdp-connexion" name="mdp" placeholder="insérez votre mot de passe"><br>
            <input class="submit" type="submit" value="TERMINÉ">
        </form>
    </div>
</div>
