<?php include("includes/header.php"); ?>

<?php
  echo $_GET['billet'];
  echo $_POST['auteur_commentaire'];
  echo $_POST['contenu_commentaire'];


if (isset($_POST['auteur_commentaire']) && !empty($_POST['auteur_commentaire']) && isset($_POST['contenu_commentaire']) && !empty($_POST['contenu_commentaire'])) {

  if(isset($_POST['auteur_commentaire']) && !empty($_POST['auteur_commentaire'])){
    $auteur_commentaire = htmlspecialchars($_POST['auteur_commentaire']);
  } else {
    echo "<p style='color:red'>Écrivez votre nom.</p>";
  }

  if(isset($_POST['contenu_commentaire']) && !empty($_POST['contenu_commentaire'])){
    $contenu_commentaire = $_POST['contenu_commentaire'];
  } else {
    echo "<p style='color:red'>Écrivez votre commentaire.</p>";
  }

  $requete = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur_commentaire, contenu_commentaire, date_commentaire) VALUES(?,?,?,now())');
  $requete->execute( array( $_GET['billet'], $_POST['auteur_commentaire'], $_POST['contenu_commentaire'], ) );
  echo "<p style='color:green'>Votre commentaire a été publié. </p>";
}

header('Location: affichage_billet.php?billet='.$_GET['billet']);


?>

<?php include("includes/footer.php"); ?>
