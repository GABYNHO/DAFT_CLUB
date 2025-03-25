<?php
session_start();
include 'squeleton-html.php';
include 'zone-gauche.php';
?>
<div id="z-droite">
    <p id="titre">Mon compte</p>
    <div id="liste_info_compte">
        <?php
            // affichage des informations personnelles
            echo '<p class="info_compte">Nom : '.$_SESSION['nom'].'</p>';
            echo '<p class="info_compte">Prenom : '.$_SESSION['prenom'].'</p>';
            echo '<p class="info_compte">Identifiant : '.$_SESSION['login'].'</p>';
        ?>
        <!-- possibilité de déconnexion -->
        <a href="index.php"><input class="submit" type="button" value="DECONNEXION"></a>
    </div>
    
</div>
<?php
include 'zone-bas.php';
?>