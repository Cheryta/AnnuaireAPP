<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div class="home">
            <div id="container0">
                <img src="./Images/entre1.jpg" alt="">
                <div id="atext1">
                    <p>Annuaire des</p>
                    <h1>articles</h1>
                </div>
            </div>
            <div id="container">
                <!-- zone de connexion -->
            
                <form action="verification.php" method="POST">
                    <div id="texte4">
                        <p>Connexion</p>
                    </div>
                    
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter your username" name="username" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter your password" name="password" required>

                    <input type="submit" id='submit' value='LOGIN' >
                    <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    ?>
                </form>
            </div>
        </div>
        
        <?php
            include 'footer.php'
         ?>
    </body>
</html>