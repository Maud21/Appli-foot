<?php include "header.php";?>
<?php include "menu.php";?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="infos.css">
    <title>Dernières infos</title>
</head>
<body>
    <div class="bloc_infos">
        <h1>Les dernières infos</h1>
        <h2>A l'international</h2>
            <div class="container" id="infos">
                <div class="row">
                    <div class="col-4">
                    <?php
                         try
                         {
                             $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                         }
                         catch(Exception $e)
                         {
                                     die('Erreur : '.$e->getMessage());
                         }
                         $reponse = $bdd->query('SELECT id, titre FROM infos_foot WHERE id="1"');
                         while ($donnees = $reponse->fetch())
                         {
                             echo '<p><strong>' . htmlspecialchars($donnees['titre']) . '</strong></br>' .'</p>';
                             
                         }
                         $reponse->closeCursor(); 
                    ?>
                    <?php
                        /*insérer image
                        $sqlimage  = ('SELECT image FROM infos_foot where id = "1"');
                        $imageresult1 = mysql_query($sqlimage);

                        while($rows=mysql_fetch_assoc($imageresult1))
                        {
                            $image = $rows['image'];
                            echo "<img src='$image' >";
                            echo "<br>";
                        } 
                        */
                    ?>



                    <?php
                        $reponse = $bdd->query('SELECT id, article FROM infos_foot WHERE id="1"');
                        $donnees = $reponse->fetch();
                        echo '<p>' . htmlspecialchars($donnees['article']) . '</p>'; 
                    ?>
                    </div>
                    <div class="col-4">
                    <?php
                         $reponse = $bdd->query('SELECT id, titre FROM infos_foot WHERE id="2"');
                         while ($donnees = $reponse->fetch())
                         {
                             echo '<p><strong>' . htmlspecialchars($donnees['titre']) . '</strong></br>' .'</p>';
                             
                         }
                         $reponse->closeCursor(); 
                         
                    ?>
                    <?php
                        $reponse = $bdd->query('SELECT id, article FROM infos_foot WHERE id="2"');
                        $donnees = $reponse->fetch();
                        echo '<p>' . htmlspecialchars($donnees['article']) . '</p>'; 
                    ?>
                    </div>
                    <div class="col-4">
                         <img src="images/international.jpg">
                    </div>
                </div>
        
            </div>
    </div>

    <div bloc_infos2>
        <h2>Backstage</h2>
    </div>

    
</body>
<?php include "footer.php";?>
</html>