<?php include "header.php";//HEADER?>
<?php include "menu.php";//MENU?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creation.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Création compte</title>
</head>
<body>
    <div class="bloc_creation">
        <h2>Création de votre espace !</h2>
        <h3>Vous pourrez ainsi vous connecter en un clic à toutes vos <span>actualités préférées</span><br/>
        Accéder au Chat et au forum pour vous <span>créer un réseau</span>, vous retrouver pour <span>jouer</span> et <span>échanger</span> ! 
        </h3>
        <hr/>
        <form action ="creation.php" method="POST">
            <input placeholder="Mon pseudo" type= "text" name="pseudo" value="" size="30" require></input></br>
            <input placeholder="Mon mot de passe" type="password" name="mdp" value=""size="30" require></input></br>
            <input placeholder="Confirmation du mot de passe"type="password" name="confirme" value="" size="30" require></input></br>
            <input placeholder="Mon adresse mail" type="text" name="email" value="" size="30" require></input></br>
            <div id="valider"><button type="submit" name="submit">Valider</button></div>
        </form>
    </div>


    <?php
        if(isset($_POST['submit'])){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            $email = htmlspecialchars($_POST['email']);

            if($pseudo && $mdp && $email){
                try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    }
                catch(Exception $e)
                    {
                                die('Erreur : '.$e->getMessage());
                    }
            
                $req = $bdd->query('INSERT INTO membres(pseudo, mdp, email, date_inscription)
                VALUES("'.$pseudo.'", "'.$mdp.'", "'.$email.'", NOW())');
        
                echo '<span>Votre profil a bien été enregistré</span>';   
            }
            else{
                echo '<span>Veuillez remplir tous les champs.</span>';
            }
    
        }  
    ?> 

    <?php include "footer.php"//FOOTER?>
    
</body>
</html>

