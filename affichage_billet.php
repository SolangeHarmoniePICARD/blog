<?php include("includes/header.php"); ?>

<?php

$requete = $bdd->prepare('SELECT * FROM billets WHERE id_billet = ?');
$requete->execute(array($_GET['billet']));
$donnees = $requete->fetch();

echo "Titre : " . $donnees['titre_billet'] . "<br>";
echo "Auteur : " . $donnees['auteur_billet'] ."<br>";
echo "Date : " . $donnees['date_billet'] ."<br>";
echo "Billet :<br>" . $donnees['contenu_billet']."<br>";


$id_billet = $donnees['id_billet'];
$requete->closeCursor(); // Important : on libère le curseur pour la prochaine requête

?>

<h3>Ajouter un commentaire :</h3>

<form action="publication_commentaire.php?billet=<?php echo $donnees['id_billet']; ?>" method="post">
  <p>
    <label for="auteur_commentaire" style="cursor:pointer;">Votre pseudo : </label>
    <input type="text" id="auteur_commentaire" name="auteur_commentaire"><br>
    <label for="contenu_commentaire" style="cursor:pointer;">Votre texte : </label><br>
    <textarea id="contenu_commentaire" name="contenu_commentaire"></textarea><br>
    <input type="hidden" name="billet" value="<?php $_GET['billet']?>">
    <input type="submit" value="Ajouter un commentaire">
  </p>
</form>

<h3>Commentaires :</h3>

<?php //Affichage des commentaires

$requete = $bdd->prepare('SELECT id_billet, auteur_commentaire, contenu_commentaire, date_commentaire FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
$requete->execute(array($_GET['billet']));

while ($donnees = $requete->fetch())
{
?>
    <p><strong><?php echo $donnees['auteur_commentaire']; ?></strong> le <?php echo $donnees['date_commentaire']; ?></p>
    <p><?php echo $donnees['contenu_commentaire']; ?></p>
<?php
}
$requete->closeCursor();
?>

<p><a href='index.php'>Revenir au blog.</a></p>
<?php include("includes/footer.php"); ?>
