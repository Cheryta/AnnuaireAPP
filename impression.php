<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    </head>
    <body onload="window.print()">
      
         <div id="texte3" text-center p-3>
            <p>Liste des articles </p>
        </div>
        
        <div id="container-fluid">
            <!-- zone de connexion -->
            
            <form action="insertion.php" method="POST"><br>
                
                <table class="table table bordered " border="1">
                    <thead class="table-primary">
                        <tr>
                        <th scope="col">CODE</th>
                        <th scope="col">LIBELLE</th>
                        <th scope="col">QUANTITE</th>
                        <th scope="col">PRIX UNITAIRE</th>
                        <th scope="col">PRIX TOTAL</th>
                        <th scope="col">DATE</th>
                        <th scope="col">LIEU DE PROVENANCE</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php

                            try {
                            // se connecter à mysql
                            $pdo = new PDO("mysql:host=localhost;dbname=bdannuaire", "root", "");
                            } catch (PDOException $exc) {
                            echo $exc->getMessage();
                            exit();
                            }

                            // mysql select query
                            //$stmt = $con->prepare('SELECT name, model, os, type, ip, idrac FROM P_SERVERS');
                            $q = $pdo->prepare('SELECT * FROM articles');

                            $q->execute();
                            $data = $q->fetchAll();

                        ?>

                        <?php
                        foreach ($data as $donnee) {
                        ?>
                            <tr>
                                <td><?php echo $donnee['codeArticle']; ?></td>
                                <td><?php echo $donnee['libelle']; ?></td>
                                <td><?php echo $donnee['quantite']; ?></td>
                                <td><?php echo $donnee['prixUnitaire']; ?></td>
                                <td><?php echo $donnee['prixTotal']; ?></td>
                                <td><?php echo $donnee['date']; ?></td>
                                <td><?php echo $donnee['lieu']; ?></td>
                                
                            </tr>

                        <?php
                        }
                      ?>
                    </tbody>
                </table> 
                <br><br><br> 
            </form>
            <br><br>
        </div>
        <div id="texte2">
            <p>Copyright@2022|Designed with by CIJ </p>
        </div>
        <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
        <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
        <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>