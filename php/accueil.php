<?php
session_start();
// inclusion du squelette html et de la zone du bas
include 'squeleton-html.php';
include 'zone-gauche.php';
?>
<div id="z-droite">
      <?php
            // si on est connecté notre identifiant est en titre
            if ($_SESSION['connected']==true) {
                  echo '<p id="titre">Bonjour '.$_SESSION['login'].' !</p>';
            } 
            // sinon message par defaut
            else {
                  echo '<p id="titre">Welcome to the Daft Club !</p>';
            }
      ?>
      
      <a href="https://www.youtube.com/@daftpunk"><img id="baniere-accueil" src="../img/reddit%20(1).jpg"></a>
</div>
<?php
// inclusion zone du bas
include 'zone-bas.php';
?>