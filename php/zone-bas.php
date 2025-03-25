<div id="z-bas">
      <?php
            /*echo '<pre style="color:white;">';
            print_r($_SESSION['tableau'][$_POST['id_item']]);
            echo '</pre>';*/
            if ($_SESSION['connected']==true) {
                  echo '<a href="mon_compte.php"><button id="button-connect">Mon compte : '.$_SESSION['login'].'</button></a>';

                  if($_SESSION['somme_panier']<2){
                      $articles = "article";
                  }else{
                      $articles = "articles";
                  }
                  if($_SESSION['prix_panier']<0.01){
                      echo '
                  <div id="panier">
                  <p><a href="panier.php"><button id="button-panier">Votre panier</button></a> est vide</p>
                  </div>
                  ';
                  } else {
                      echo '
                  <div id="panier">
                  <p><a href="panier.php"><button id="button-panier">Votre panier</button></a> : ' . $_SESSION['somme_panier'] . ' ' . $articles . ' pour ' . ($_SESSION['prix_panier'] / 100) . '€</p>
                  </div>
                  ';
                  }
            } 
            else {
                  echo '<a href="connexion.php"><button id="button-connect">CONNEXION</button></a>';
            }
      ?>
</div>

<!-- 
<p>COPYRIGHT DAFT CLUB .INC <br> Arresseguet Yan & Brenot Gabriel</p>
-->
