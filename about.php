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
            <p>Welcome to our articles directory</p>
        </div>
        <div id="atext3">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea ad velit cum ut enim? Adipisci accusantium officiis illum voluptas repellat deserunt a assumenda earum quas. Magni odit in repellendus?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit fugit adipisci possimus perspiciatis quidem eaque, harum odit ullam, quia cupiditate provident rerum beatae totam? Quia accusantium asperiores quisquam cupiditate consectetur.
            </p>
        </div><br>
        <div id="texte3">
            <p>Gallery of our promotional items</p>
        </div><br>
        <section id="gallery" class="gallery">
            <div class="container-fluid p-2">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="./Images/gallery-1.jpg" class="galelry-lightbox">
                                <img src="./Images/gallery-1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="./Images/gallery-2.jpg" class="galelry-lightbox">
                            <img src="./Images/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="./Images/gallery-3.jpg" class="galelry-lightbox">
                            <img src="./Images/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="./Images/gallery-4.jpg" class="galelry-lightbox">
                            <img src="./Images/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="./Images/gallery-5.jpg" class="galelry-lightbox">
                            <img src="./Images/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="./Images/gallery-6.jpg" class="galelry-lightbox">
                            <img src="./Images/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="./Images/gallery-7.jpg" class="galelry-lightbox">
                            <img src="./Images/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="./Images/gallery-8.jpg" class="galelry-lightbox">
                            <img src="./Images/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include 'footer.php'
         ?>
    </body>
</html>