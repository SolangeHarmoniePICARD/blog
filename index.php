<?php include("includes/header.php"); ?>
<p><a href="publier.php"> Publier un billet de blog ! </a></p>

<?php //Affichage
//Gestion du nombre limite de billets par page
  $billets_par_page = 10;
  $retour_total = $bdd->query('SELECT id_billet FROM billets');
  $donnees_total = $retour_total->RowCount();
  $nombre_de_pages = ceil($donnees_total/$billets_par_page); //On compte le nombre de pages.
  if(isset ($_GET['page']) && !empty($_GET['page']) && $_GET['page'] >0 ){
    $_GET['page'] = intval($_GET['page']);
    $page_courante = $_GET['page'];
  } else {
    $page_courante = 1;
  }
  $premiere_entree = ($page_courante-1)*$billets_par_page; // On calcule la première entrée à lire
//Affichage de 10 billets
  $reponse = $bdd->query('SELECT * FROM billets ORDER BY id_billet DESC LIMIT '.$premiere_entree.', '.$billets_par_page); // On récupère tout le contenu de la table billets, on affiche les 10 derniers messages par ordre anté-chronologique
  while ($donnees = $reponse->fetch()){ // On affiche chaque entrée une à une
    echo "N° : " . htmlspecialchars($donnees['id_billet']) . " - ";
    echo "<a href='billet.php?billet=" . $donnees['id_billet'] . "'>Voir les commentaires</a><br><br>";
    echo "Auteur : " . htmlspecialchars($donnees['auteur_billet'])."<br>";
    echo "Titre : " . htmlspecialchars($donnees['titre_billet'])."<br>";
    echo "Date : " . htmlspecialchars($donnees['date_billet'])."<br>";
    echo "Billet :<br>" . $donnees['contenu_billet']."<br>";
  }
//Affichage de la page en cours et de la navigation vers les autres pages
echo "Page(s) : ";
  for($i=1; $i<=$nombre_de_pages;$i++){
    if($i == $page_courante){
      echo  $i.' ';
  } else {
    echo '<a href ="index.php?page='.$i.'">'.$i.'&nbsp;</a>';}
  }// Fin de la boucle des billets
$reponse->closeCursor();
?>
<?php include("includes/footer.php"); ?>
