<?php
include '../bdd/bdd.php';
function produits($cat){
  switch($cat){
    case "cd": $titre = "CD";
      break;
    case "vinyle": $titre = "Vinyle";
      break;
    case "accessoire": $titre = "Accessoire";
      break;
    case "vetement": $titre = "Vêtement is coming sooooon !";
      break;
    default: return false;
  }
  include "squeleton-html.php";
  include "zone-gauche.php";
  $_SESSION['somme_panier']+=$_POST['nb_item'];
  $_SESSION['prix_panier']+=$_POST['nb_item']*$_SESSION['tableau'][$_POST['id_item']]['prix']*100;
  $_SESSION['panier'][$_POST['id_item']]+=$_POST['nb_item'];
  $_SESSION['tableau'][$_POST['id_item']]['quantite']-=$_POST['nb_item'];
  echo '<div id="z-droite">';
  echo '<p id="titre">'.$titre.'</p>';
  if($cat != "vetement") {
    if(($_SESSION['connected']) && ($_SESSION['login']=="admin")) {
      echo '<input type="button" value="AFFICHER QUANTITÉ" class="hide_stock" onclick="cacher()">';
    }
    foreach ($_SESSION['tableau'] as $id => $ligne) {
      if ($ligne['categorie'] == $cat) {
        echo '<div class="rectangle-item">';
        echo '<img class="img-cd" src="../img/'.$ligne['lien_image'].'">';
        echo '<p class="titre-item">' . $ligne['nom'] . '<br><br>' . $ligne['objet'] . '</p>';
        echo '<p class="prix-item">Prix : ' . $ligne['prix'] . ' €</p>';
        if (($_SESSION['connected'])) {
          echo '<p hidden class="stock-item">Quantité : <input type="button" class="stock_button" value="' . $ligne['quantite'] . '"></p>';
          if($ligne['quantite']>0) {
            echo '<form method="POST" action="produits.php?cat=' . $cat . '">';
            echo '<input type="button" class="button-minus" value="-" onclick="sign(event, this)">';
            echo '<input type="number" min="0" max="' . $ligne['quantite'] . '" name="nb_item" class="number-item" value="0" readonly>';
            echo '<input type="number" style="display:none;" name="id_item" value="' . $id . '" readonly>';
            echo '<input type="button" class="button-plus" value="+" onclick="sign(event, this)">';
            echo '<input type="submit" class="button-add" value="AJOUTER">';
            echo '</form>';
          }else{
            echo '<p style="color:red">RUPTURE DE STOCK !</p>';
          }
        } 
        echo '</div>';
      }
    }
  }
  echo '</div>';

  include "zone-bas.php";
  return true;
}

if(!produits($_GET["cat"])){
  header('location: ./accueil.php');
}

?>
