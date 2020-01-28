<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/style_alessio.css">
        <link type="text/css" rel="stylesheet" href="css/style_simone.css">
        <link type="text/css" rel="stylesheet" href="css/style_fabrizio.css">
        <link type="text/css" rel="stylesheet" href="css/responsive_alessio.css">
        <link type="text/css" rel="stylesheet" href="css/responsive_simone.css">
    </head>
    <body>
        <!-- Header : Serena -->
        <?php 
            include 'header.php';
        ?>

        <!-- 1 : Simone -->
        <section id="primo">
            <div id="riga" class="row">
                <div id="chisiamo" class="col-sm-12 col-md-6">
                    <h2>Titolo</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum delectus consequuntur beatae suscipit maxime blanditiis quas doloribus labore eum laudantium porro iure quia, odit mollitia magni magnam cumque laboriosam veniam.
                    </p>
                </div>
                <div id="video" class="col-sm-12 col-md-6">
                    <h2>Titolo</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum delectus consequuntur beatae suscipit maxime blanditiis quas doloribus labore eum laudantium porro iure quia, odit mollitia magni magnam cumque laboriosam veniam.
                    </p>
                </div>
            </div>
            <svg id="inclinato1" viewBox="0 0 100 20" preserveAspectRatio="none" >
                <polygon points="100,0 100,20 0,20 0,10" style="fill: white;"></polygon>
            </svg>
        </section>

        <!-- 2 : Fabrizio -->
           
        <div class="container">
            <div class="row" id="spazio">
                 <div class="col-md-4 col-sm-12">
                    <a href="#">
                        <div class="card">
                            <img src="img/news.png" class="card-img-top" alt="news">
                            <div class="card-body">
                                <h5 class="card-title" id="colore1">News 1</h5>
                                <p class="card-text" id="colore2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-outline-danger">Vai alla News</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#">
                        <div class="card">
                            <img src="img/news.png" class="card-img-top" alt="news">
                            <div class="card-body">
                                <h5 class="card-title" id="colore1">News 2</h5>
                                <p class="card-text" id="colore2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-outline-danger">Vai alla News</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#">
                        <div class="card">
                            <img src="img/news.png" class="card-img-top" alt="news">
                            <div class="card-body">
                                <h5 class="card-title" id="colore1">News 3</h5>
                                <p class="card-text" id="colore2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-outline-danger">Vai alla News</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Programma : ??? -->

        <!-- Seguici : Marilena -->
        <section id="sec_bottom ">
            <div id="follow_us ">
                <div class="center">
                    <div id="social-test">
                        <h2>Seguici</h2>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></a></i></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></a></i></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3 : Simone -->
        <section id="secondo">
            <svg id="inclinato2" viewBox="0 0 100 20" preserveAspectRatio="none" >
                <polygon points="0,0 100,0 100,10 0,20" style="fill: white;"></polygon>
            </svg>
            <div id="riga" class="row">
                <div id="contatta" class="col-sm-12 col-md-4">
                    <h2>Titolo</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum delectus consequuntur beatae suscipit maxime blanditiis quas doloribus labore eum laudantium porro iure quia, odit mollitia magni magnam cumque laboriosam veniam.
                    </p>
                </div> 
                <div class="col-sm-12 col-md-8"></div>
            </div>
        </section>

        <!-- Footer : Alessio -->
        <?php 
            include 'footer.php';
        ?>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>