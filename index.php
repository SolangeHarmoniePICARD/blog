<?php include("includes/header.php"); ?>
<p><a href="publier.php"> Publier un billet de blog ! </a></p>

<?php //Affichage
//Gestion du nombre limite de billets par page
  $billets_par_page = 10;
  $retour_total = $bdd->query('SELECT id FROM billets');
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
  $reponse = $bdd->query('SELECT * FROM billets ORDER BY ID DESC LIMIT '.$premiere_entree.', '.$billets_par_page); // On récupère tout le contenu de la table billets, on affiche les 10 derniers messages par ordre anté-chronologique
  while ($donnees = $reponse->fetch()){ // On affiche chaque entrée une à une
    echo "N° : " . $donnees['id'] . "<br>";
    echo "Auteur : " . $donnees['auteur']."<br>";
    echo "Titre : " . $donnees['titre']."<br>";
    echo "Date : " . $donnees['date']."<br>";
    echo "Billet :<br> \"" . $donnees['contenu']."\" <br><br>";
  }
//Affichage de la page en cours et de la navigation vers les autres pages
echo "Page(s) : ";
  for($i=1; $i<=$nombre_de_pages;$i++){
    if($i == $page_courante){
      echo  $i.' ';
  } else {
    echo '<a href ="index.php?page='.$i.'">'.$i.'&nbsp;</a>';}
  }
?>
<?php include("includes/footer.php"); ?>
