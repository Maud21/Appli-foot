<?php include "header.php";//HEADER?>
<?php include "menu.php";//MENU?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="inscription.css">
    <title>inscription</title>
</head>
<body>
    <div class="bloc_connexion">
                <h2>Bienvenue dans votre espace !</h2>
                <h3>Connectez vous en un clic à toutes vos <span>actualités préférées</span><br/>
                Accédez au Chat et au forum pour vous <span>créer un réseau</span>, vous retrouver pour <span>jouer</span> et <span>échanger</span> ! 
                </h3>
                <hr/>
                
                    <form action="connexion.php" method="POST">
                        <input placeholder="Mon pseudo" type="text" name="pseudo" size="30" required/></br>
                        <input placeholder="Mon mot de passe" type="password" name="mdp" size="30" required/></br> 
                        
                        <button type="submit" name="submit">Se connecter</button></br>
                        <a href="creation.php">Créer un compte</a>
                    </form>
                
                
                <h4>Mot de passe oublié</h4>
    </div>

<?php include "footer.php";?>
    
</body>
</html>
    

