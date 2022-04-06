<?php
$host = "localhost";
$dbname = "bdannuaire";
$username = "root";
$password = "";


if(isset($_POST['submit'])){

  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", "root", "");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $libelle = $_POST['libelle'];
  $quantite = $_POST['quantite'];
  $prixUnitaire = $_POST['prixUnitaire'];
  $prixTotal = $_POST['prixTotal'];
  $date = $_POST['date'];
  $lieu = $_POST['lieu'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `articles`(`libelle`, `quantite`,`prixUnitaire`, `prixTotal`,`date`, `lieu`) VALUES (:libelle,:quantite,:prixUnitaire,:prixTotal,:date,:lieu)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":libelle"=>$libelle,":quantite"=>$quantite,":prixUnitaire"=>$prixUnitaire,":prixTotal"=>$prixTotal,":date"=>$date,":lieu"=>$lieu));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    header("Location: liste.php");
    exit();
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>