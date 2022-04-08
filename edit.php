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
    $sql="UPDATE articles SET libelle='{$libelle}', quantite='{$quantite}', prixUnitaire='{$prixUnitaire}', prixTotal='{$prixTotal}', date='{$date}', lieu='{$lieu}', WHERE codeArticle='{$_GET["id"]}'";
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
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
  </head>
  <body>
  <?php
            include 'menu.php'
        ?>
        <div class="home">
            <div id="container1">
                <img src="./Images/ajout.jpg" alt="">
                <div id="atext1">
                    <p>Annuaire des</p>
                    <h1>articles</h1>
                </div>
                <div id="lien">
                    <a type="button" class="btn btn-info" href="liste.php">Voir la liste des articles</a>
                </div>
            </div>
            <div id="container">
                <!-- zone de connexion -->
            
                <form action="insertion.php" method="POST">
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
                    <div id="bouton">
                        <div id="bouton1" >
                            <input type="submit" name='submit' value='Modifier' onclick='return confirm("Etes-vous sûr ?")'  >
                        </div>
                        <div id="bouton2">
                            <input type="reset" name='reset' value='Annuler'>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    <?php
      include 'footer.php'
    ?> 
  </body>
</html>
<?php 
  }
?>