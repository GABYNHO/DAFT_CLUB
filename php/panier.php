<?php
    include "squeleton-html.php";
    include "zone-gauche.php";
    if($_POST['supAll']==1) {
        $_SESSION['somme_panier'] = 0;
        $_SESSION['prix_panier'] = 0;
        foreach ($_SESSION['tableau'] as $id => $ligne) {
            $_SESSION['tableau'][$id]['quantite'] += $_SESSION['panier'][$id];
            $_SESSION['panier'][$id] = 0;
        }
    }
    $_SESSION['somme_panier']-=$_POST['nb_item'];
    $_SESSION['prix_panier']-=$_POST['nb_item']*$_SESSION['tableau'][$_POST['id_item']]['prix']*100;
    $_SESSION['panier'][$_POST['id_item']]-=$_POST['nb_item'];
    $_SESSION['tableau'][$_POST['id_item']]['quantite']+=$_POST['nb_item'];
    echo '<div id="z-droite">';
    echo '<p id="titre">Panier</p>';
    if($_SESSION['prix_panier']<0.01){
        echo '<p id="total_panier">Votre panier est vide !</p>';
    } else {
        echo '<p id="total_panier">Prix total du panier : ' . ($_SESSION['prix_panier'] / 100) . '€</p>';
    }
    if($_SESSION['somme_panier']>0) {
        echo '<form id="viderPanier" name="viderPanier" method="POST" action="panier.php"><input id="supValue" type="number" name="supAll" value=0 hidden><input type="button" value="VIDER LE PANIER" class="hide_stock" onclick="changeSupValue()"></form>';
    // ici faut mettre un bouton valider panier qui ne remet pas les stock aux données de base
    }
    foreach ($_SESSION['tableau'] as $id => $ligne) {
            if($_SESSION['panier'][$id]>0) {
                echo '<div class="rectangle-item" style="margin-right: 70px">';
                echo '<img class="img-cd" src="../img/'.$ligne['lien_image'].'">';
                echo '<p class="titre-item">' . $ligne['nom'] . '<br><br>' . $ligne['objet'] . '</p>';
                echo '<p class="prix-item">Prix : ' . $ligne['prix'] . ' €</p>';
                if ($_SESSION['connected']) {
                    echo '<p class="stock-item">Quantité : <input type="button" class="stock_button" value="' . $_SESSION['panier'][$id] . '"></p>';
                    echo '<form id="form-sup" method="POST" action="panier.php">';
                    echo '<input type="button" class="button-minus" value="-" onclick="sign(event, this)">';
                    echo '<input type="number" min="0" max="' . $_SESSION['panier'][$id] . '" name="nb_item" class="number-item" value="0" readonly>';
                    echo '<input type="number" style="display:none;" name="id_item" value="' . $id . '" readonly>';
                    echo '<input type="button" class="button-plus" value="+" onclick="sign(event, this)">';
                    echo '<input type="submit" class="button-sup" value="SUPPRIMER">';
                    echo '</form>';
                    echo '<p class="total_prix">Prix total : '.$ligne['prix']*$_SESSION['panier'][$id].'€</p>';
                    }
                echo '</div>';
            }

    }
    echo '</div>';
    include "zone-bas.php";