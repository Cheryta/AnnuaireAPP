<?php
  session_start();
  include "config.php";
  
  #Check if form submitted
  $message="";
  if($_SERVER["REQUEST_METHOD"]=='POST'){
    $libelle=mysqli_real_escape_string($con,$_POST["libelle"]);
    $quantite=mysqli_real_escape_string($con,$_POST["quantite"]);
    $prixUnitaire=mysqli_real_escape_string($con,$_POST["prixUnitaire"]);
    $prixTotal=mysqli_real_escape_string($con,$_POST["prixTotal"]);
    $date=mysqli_real_escape_string($con,$_POST["date"]);
    $lieu=mysqli_real_escape_string($con,$_POST["lieu"]);
    $sql="UPDATE articles SET Libelle='{$libelle}',quantite='{$quantite}',prixUnitaire='{$prixUnitaire}',prixTotal='{$prixTotal}',date='{$date}',lieu='{$lieu}', WHERE codeArticle='{$_GET["id"]}'";
    if($con->query($sql)){
      flash('msg','User Updated Successfully');
    }else{
      flash('msg','User Updated Failed','red');
    }
  }
  
  #Select user details from the table
  $sql="select * from articles where codeArticle='{$_GET["id"]}'";
  $res=$con->query($sql);
  if($res->num_rows>0){
    $donnee=$res->fetch_assoc();
?>
<html>
  <head>
    <title>Modifier </title>
    <link rel='stylesheet' href='style.css'>
  </head>
  <body>
    <div class='container'>
      <?php flash('msg'); ?>
      <div id="texte3">
        <a href='liste.php'>Revenir à la liste</a>
    </div>
      <form method='post' action='<?php echo $_SERVER["REQUEST_URI"]; ?>' class='frm'>
            <div id="texte4">
                <p>Modifier un Article</p>
            </div>
                  
            <label><b>Libellé</b></label>
            <input type="text" placeholder="Entrer le libellé" name="libelle" required value="<?php echo $donnee["libelle"]; ?>">

            <label><b>Quantité</b></label>
            <input type="number" placeholder="Entrer la quantité" name="quantite" required value="<?php echo $donnee["quantite"]; ?>">

            <label><b>Prix Unitaire</b></label>
            <input type="number" placeholder="Entrer le prix unitaire" name="prixUnitaire" required value="<?php echo $donnee["prixUnitaire"]; ?>">

            <label><b>Prix Total</b></label>
            <input type="number" placeholder="Entrer le prix total" name="prixTotal" required value="<?php echo $donnee["prixTotal"]; ?>">

            <label><b>Date</b></label>
            <input type="date"  name="date" id="date" required value="<?php echo $donnee["date"]; ?>">

            <label><b>Lieu de Provenance</b></label>
            <select name="lieu" id="Choississez un continent" selected>
                <option value="Afrique">Afrique</option>
                <option value="Amerique">Amerique</option>
                <option value="Asie">Asie</option> 
                <option value="Europe">Europe</option>
                <option value="Oceannie">Oceanie</option>
            </select>
            <input type="submit" name='submit' value='Modifier' >
      </form>
    </div>
    
  </body>
</html>
<?php 
  }
?>