<?php include("includes/header.php"); ?>

    <form action="publication_billet.php" method="post">
      <p>
        <label for="auteur_billet" style="cursor:pointer;">Votre pseudo : </label><br>
        <input type="text" id="auteur_billet" name="auteur_billet"><br><br>
        <label for="titre_billet" style="cursor:pointer;">Titre du billet : </label><br>
        <input type="text" id="titre_billet" name="titre_billet"><br><br>
        <label for="contenu_billet" style="cursor:pointer;">Votre texte : </label><br>
        <textarea id="contenu_billet" name="contenu_billet"></textarea><br><br>
        <input type="submit" value="Envoyer">
      </p>
    </form>

<?php //Insertion dans la base de données

  if(isset($_POST['auteur_billet']) && !empty($_POST['auteur_billet']) && isset($_POST['titre_billet']) && !empty($_POST['titre_billet']) && isset($_POST['contenu_billet']) && !empty($_POST['contenu_billet'])) {

    if(isset($_POST['auteur_billet']) && !empty($_POST['auteur_billet'])){
      $auteur = htmlspecialchars($_POST['auteur_billet']);
    } else {
      echo "<p style='color:red'>Écrivez votre nom.</p>";
    }
    if(isset($_POST['titre_billet']) && !empty($_POST['titre_billet'])){
      $titre = htmlspecialchars($_POST['titre_billet']);
    } else {
      echo "<p style='color:red'>Écrivez un titre.</p>";
    }
    if(isset($_POST['contenu_billet']) && !empty($_POST['contenu_billet'])){
      $contenu = $_POST['contenu_billet'];
    } else {
      echo "<p style='color:red'>Écrivez votre texte.</p>";
    }

      $requete = $bdd->prepare('INSERT INTO billets(auteur_billet, titre_billet, contenu_billet, date_billet) VALUES(?,?,?,now())');
      $requete->execute(array($auteur,$titre,$contenu));
      echo "<p style='color:green'>Votre billet a été publié. </p>";

  }

?>

  <p><a href='index.php'>Revenir au blog.</a></p>
  <script src="js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea'});</script>

<?php include("includes/footer.php"); ?>
