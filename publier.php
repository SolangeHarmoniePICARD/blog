<?php include("includes/header.php"); ?>
    <form action="publier.php" method="post">
      <p>
        <label for="auteur" style="cursor:pointer;">Votre pseudo : </label><br>
        <input type="text" id="auteur" name="auteur"><br><br>
        <label for="titre" style="cursor:pointer;">Titre du billet : </label><br>
        <input type="text" id="titre" name="titre"><br><br>
        <label for="contenu" style="cursor:pointer;">Votre texte : </label><br>
        <textarea id="contenu" name="contenu"></textarea><br><br>
        <input type="submit" value="Envoyer">
      </p>
    </form>

<?php //Insertion dans la base de données
  if(isset($_POST['auteur']) && !empty($_POST['auteur']) && isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['contenu']) && !empty($_POST['contenu'])) {
    if(isset($_POST['auteur']) && !empty($_POST['auteur'])){  $auteur = htmlspecialchars($_POST['auteur']); } else { echo "<p style='color:red'>Écrivez votre nom.</p>"; }
    if(isset($_POST['titre']) && !empty($_POST['titre'])){  $titre = htmlspecialchars($_POST['titre']); } else { echo "<p style='color:red'>Écrivez un titre.</p>"; }
    if(isset($_POST['contenu']) && !empty($_POST['contenu'])){  $contenu = htmlspecialchars($_POST['contenu']); } else { echo "<p style='color:red'>Écrivez votre texte.</p>"; }
    $requete = $bdd->prepare('INSERT INTO billets(auteur, titre, contenu, date) VALUES(?,?,?,now())');
    $requete->execute(array($auteur,$titre,$contenu));
    echo "<p style='color:green'>Votre billet a été publié. </p>";
  }
?>
  <p><a href='index.php'>Revenir à la page d'accueil.</a></p>
<?php include("includes/footer.php"); ?>
