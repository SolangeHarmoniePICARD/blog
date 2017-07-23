<?php
error_reporting(E_ALL & ~E_NOTICE); // supprime les messages d'erreur de type notice
  try{ // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) { // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
  } // Si tout se passe bien, on peut continuer
?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
  </head>

  <body>
