<?php
  session_start();
  include 'squeleton-html.php';
  include 'zone-gauche.php';
?>

<div id="z-droite">
  <p id="titre">Nous Contacter !</p>
  <!-- formulaire de contact -->
  <form id="form" name="form" method="POST" action="verif-contact.php">
    <label>Nom : </label>
    <input type="text" id="nom" name="nom" <?php echo 'value="'.$_SESSION['nom_form'].'"'?> placeholder="insérez votre nom (sans accents)" pattern="[A-Za-z -]+"><?php echo '<p class="erreur_form">'.$_SESSION['error_nom'].'</p>'; ?><br>
    <label>Prénom : </label>
    <input type="text" id="prenom" name="prenom" <?php echo 'value="'.$_SESSION['prenom_form'].'"'?> placeholder="insérez votre prenom (sans accents)" pattern="[A-Za-z -]+"><?php echo '<p class="erreur_form">'.$_SESSION['error_prenom'].'</p>'; ?><br>
    <label>Email : </label>
    <input type="email" id="email" name="email" <?php echo 'value="'.$_SESSION['email_form'].'"'?> placeholder="insérez votre email"><?php echo '<p class="erreur_form">'.$_SESSION['error_email'].'</p>'; ?><br>
    <label>Genre : </label>
    <input id="homme" type="radio" value="homme" name="genre"> Homme
    <input id="femme" type="radio" value="femme" name="genre"> Femme
    <input id="autre" type="radio" value="autre" name="genre"> Autre <?php echo '<p class="erreur_form">'.$_SESSION['error_genre'].'</p>'; ?><br>
    <label>Fonction : </label>
    <select id="fonction" name="fonction">
      <option value="rien">Veuillez choisir une fonction</option>
      <option value="etudiant">Étudiant</option>
      <option value="salarié">Salarié</option>
      <option value="retraité">Retraité</option>
      <option value="chomeur">Chômeur</option>
    </select><?php echo '<p class="erreur_form">'.$_SESSION['error_fonction'].'</p>'; ?><br>
    <label>Date de naissance : </label>
    <input type="date" id="date" name="date"><?php echo '<p class="erreur_form">'.$_SESSION['error_date'].'</p>'; ?><br>
    <label>Sujet : </label>
    <input type="text" id="sujet" name="sujet" <?php echo 'value="'.$_SESSION['sujet_form'].'"'?> placeholder="insérez le sujet"><?php echo '<p class="erreur_form">'.$_SESSION['error_sujet'].'</p>'; ?><br>
    <label>Contenu : </label>
    <textarea id="contenu" name="contenu" placeholder="insérez le contenu"></textarea><?php echo '<p class="erreur_form">'.$_SESSION['error_contenu'].'</p>'; ?><br>
    <input type="submit" class="submit" value="Envoyer">
    <input type="reset" id="effacer" value="Réinitialiser">
  </form>
  <script>
  //écouteur d'événements au bouton de réinitialisation
  document.getElementById("form").addEventListener("reset", function(event) {
    //on empêche la soumission du formulaire lors de la réinitialisation
    event.preventDefault();
    //on réinitialise le formulaire en effaçant les données
    document.getElementById("nom").value = "";
    document.getElementById("prenom").value = "";
    document.getElementById("email").value = "";
    document.getElementById("sujet").value = "";
  });
  <?php
  // si l'envoie est réussi on averti l'utilisateur
  if ($_SESSION['envoi']==true) {
    echo 'alert("Votre mail a bien été envoyé !");';
    $_SESSION['envoi']=false;
  }
  ?>
</script>
</div>

<?php
  include 'zone-bas.php';
?>