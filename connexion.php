<?php
    //creation cookie pour sauvegarder identifiant et garder session forum ouverte
    setcookie('identifiant', ($_POST['pseudo']), time() + 365*24*3600, null, null, false, true);
?>

<?php include "header.php";//HEADER?>
<?php include "menu.php";//MENU?>
<link rel="stylesheet" href="connexion.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Connexion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <?php
    //récupération des données
    
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = htmlspecialchars($_POST['mdp']);
    
    //  Récupération de l'utilisateur et de son pass hashé
    if(isset($_POST['submit'])){
        if($pseudo && $mdp){
            try
                {
                $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }
            catch(Exception $e)
                {
                die('Erreur : '.$e->getMessage());
                }

        $req = $bdd->prepare('SELECT id, mdp FROM membres WHERE pseudo = :pseudo');
        $req->execute(array(
            'pseudo' => $pseudo));
        $resultat = $req->fetch();
        
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);
        
        if (!$resultat)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                echo 'Vous êtes connecté !';
            ?>
            <h3>Bonjour <?php echo htmlspecialchars($_POST['pseudo']);//evite faille xss?>!</h3>
                
                
                <div class="container">
                    <div class="row" id="images_connect">
                        <div class="col-6">
                            <a href="minichat.php"><img src="images/chat.jpg"></a>
                                <div class="infos_connect">
                                <a href="minichat.php"><p>Tu vas pouvoir accéder au Chat pour te créer un réseau, </br>
                                vous retrouver pour jouer et échanger !</p></a>
                                </div>
                        </div>
                        <div class="col-6">
                            <img src="images/news-foot.jpg">
                                <div class="infos_connect">
                                <p>Tu vas pouvoir accéder </br>
                                à toutes tes actualités préférées !</p>
                                </div>
                        </div>
                    </div>
                    
                </div>
            <?php
            }
            else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }
        }
    
            }
            
    ?>
     
 
               
               

        

        <?php $_SERVER['REMOTE_ADDR']?>        

       
        
    </body>
</html>
 <?php include "footer.php"//FOOTER?>

