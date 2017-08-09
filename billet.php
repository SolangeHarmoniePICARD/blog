<?php include("includes/header.php"); ?>

<?php //Récupération du billet
$requete = $bdd->prepare('SELECT * FROM billets WHERE id_billet = ?');
$requete->execute(array($_GET['billet']));
$donnees = $requete->fetch();

echo "Titre : <a href='billet.php?billet=" . $donnees['id_billet'] . "'>" . htmlspecialchars($donnees['titre_billet']). "</a><br>";
echo "Auteur : " . htmlspecialchars($donnees['auteur_billet'])."<br>";
echo "Date : " . htmlspecialchars($donnees['date_billet'])."<br>";
echo "Billet :<br>" . $donnees['contenu_billet']."<br>";


$id_billet = $donnees['id_billet'];
$requete->closeCursor(); // Important : on libère le curseur pour la prochaine requête
?>

<?php //Récupération des commentaires

if (isset($_GET['billet']) && !empty($_GET['billet']) && isset($_POST['auteur_commentaire']) && !empty($_POST['auteur_commentaire']) && isset($_POST['contenu_commentaire']) && !empty($_POST['contenu_commentaire'])) {
  if(isset($_POST['auteur_commentaire']) && !empty($_POST['auteur_commentaire'])){  $auteur_commentaire = htmlspecialchars($_POST['auteur_commentaire']); } else { echo "<p style='color:red'>Écrivez votre nom.</p>"; }
  if(isset($_POST['contenu_commentaire']) && !empty($_POST['contenu_commentaire'])){  $contenu_commentaire = $_POST['contenu_commentaire']; } else { echo "<p style='color:red'>Écrivez votre commentaire.</p>"; }
  $requete = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur_commentaire, contenu_commentaire, date_commentaire) VALUES(?,?,?,now())');
  $requete->execute(array($_GET['billet'],$auteur_commentaire,$contenu_commentaire));
  echo "<p style='color:green'>Votre commentaire a été publié. </p>";
}



?>

<h3>Ajouter un commentaire :</h3>

<form action="billet.php?billet=<?php echo $donnees['id']; ?>'" method="post">
  <p>
    <label for="auteur_commentaire" style="cursor:pointer;">Votre pseudo : </label>
    <input type="text" id="auteur_commentaire" name="auteur_commentaire"><br>
    <label for="contenu_commentaire" style="cursor:pointer;">Votre texte : </label><br>
    <textarea id="contenu_commentaire" name="contenu_commentaire"></textarea><br>
    <input type="hidden" name="billet" value="<?php $_GET['billet']?>"/>
    <input type="submit" value="Ajouter un commentaire">
  </p>
</form>


<?php include("includes/footer.php"); ?>
