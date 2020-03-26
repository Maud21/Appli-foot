<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Foot au féminin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="foot.css">
        
    </head>

    <body>
        
        <?php include "header.php";//HEADER?>
        <?php include "menu.php";//MENU?>

                <div id="presentation">
                    <img src="images/affiche.jpg"></img>
                </div>
                

                <div class="container" id="equipe-france">
                    <a href="equipeFrance.php"><h1>Equipe de France</h1></a>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="equipeFrance.php"><img src="images/equipe_france3.jpeg" width="500" height="300"></img></a>
                        </div>
                        <div class="col-sm-6">
                        <ul>
                            <li><img src="images/ballon.png" width="30" height= "30"></img>Découvrez toutes les actus des Bleues</li>
                            <li><img src="images/ballon.png" width="30" height= "30"></img>Le classement FIFA</li>
                            <li><img src="images/ballon.png" width="30" height= "30"></img>Les derniers matchs</li>
                            <li><img src="images/ballon.png" width="30" height= "30"></img>Les matchs à venir</li>
                            <li><img src="images/ballon.png" width="30" height= "30"></img>Le portrait de la semaine</li>
                        </ul>
                        </div>
                        
                    </div>
                </div>

                <div class="container" id="D1-D2">
                <h1>Equipe de D1 et D2</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/D1-1.jpg" width="500" height="300"></img>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="images/D1.jpg" width="70" height="50"></img>
                                </div>
                                <div class="col-sm-10">
                                    <p>Le PSG sans pitié pour Soyaux</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/D2-1.jpg" width="500" height="300"></img>
                            <div class="row">
                                <div class="col-sm-2">
                                <img src="images/D2.jpeg" width="70" height="50"></img>
                                </div>
                                <div class="col-sm-10">
                                    <p>Les filles du LOSC se relancent pour l’accession</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="container" id="infos">
                <a href="infos.php"><h1>Les dernières infos</h1></a>
            <div class="row">
                <div class="col-sm-4">
                <a href="infos.php" class="bloc_infos"><img src="images/rapino.jpg" width="300" height="200"></img></a>
                <a href="infos.php" class="bloc_infos"><p>A l'international</p></a>
                </div>
                <div class="col-sm-4">
                <a href="infos.php" class="bloc_infos2"><img src="images/backstage-1.jpg" width="300" height="200"></img></a>   
                <a href="infos.php" class="bloc_infos2"><p>Backstage</p></a>
                </div>
                <div class="col-sm-4">
                <img src="images/hommes-1.jpg" width="300" height="200"></img>
                <p>Et les hommes au fait !</p>
                </div>
            </div>
        </div>
        <?php include "footer.php"//FOOTER?>

    </body>
</html>