<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <?php
            include 'menu.php'
        ?>
        <div id="texte3">
            <p>Merci de remplir ce formulaire  pour ajouter un nouveau article </p>
        </div>
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
                        <p>Ajouter un Article</p>
                    </div>
                    
                    <label><b>Libellé</b></label>
                    <input type="text" placeholder="Entrer le libellé" name="libelle" required>

                    <label><b>Quantité</b></label>
                    <input type="number" placeholder="Entrer la quantité" name="quantite" required>

                    <label><b>Prix Unitaire</b></label>
                    <input type="number" placeholder="Entrer le prix unitaire" name="prixUnitaire" required>

                    <label><b>Prix Total</b></label>
                    <input type="number" placeholder="Entrer le prix total" name="prixTotal" required>

                    <label><b>Date</b></label>
                    <input type="date"  name="date" id="date" required>

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
                            <input type="submit" name='submit' value='Ajouter' >
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