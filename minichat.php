<?php include "header.php";//HEADER?>
<?php include "menu.php";//MENU?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="minichat.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Chat</title>
</head>
<body>
 


    <h1>Chatez en toute sécurité</h1>

    <div class="container" id="chat">
        <div class="row">
            <div class="col-sm">
                <form action="minichat.php" method="POST">
                    <label>Pseudo: <input class="pseudo" type="text" name="pseudo" value="" size="20"></input></br>
                    <label>Message: <input class="message" type="text" name="messages" size="20" ></input>
                    <button type="submit" name="submit">Envoyez</button>
                </form>
            
            </div>

            

            <div class="col-sm chat">
                <?php
                //si connexion
                if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                {
                    echo 'Bonjour ' . $_SESSION['pseudo'];
                }
                ?>
                <?php

                
                    //enregistrer pseudo et messages dans bdd
                    if(isset($_POST['submit'])){
                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $messages = htmlspecialchars($_POST['messages']);

                            if($pseudo && $messages){
                                
                                try
                                {
                                    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                }
                                catch(Exception $e)
                                {
                                            die('Erreur : '.$e->getMessage());
                                }

                                $req1 = $bdd->query('INSERT INTO minichat1(pseudo, Messages, date_creation)VALUES("'.$pseudo.'", "'.$messages.'", NOW())');
                                

                                echo '<span>Un nouveau message a été ajouté.</span>'; 
                                
                            }
                            else{
                                echo '<p>Vous navez pas rempli tous les champs.</p>';
                            }
                    }

                ?>

                <?php
                    //pour afficher le pseudo et messages

                    $reponse = $bdd->query('SELECT pseudo, messages, date_creation FROM minichat1 ORDER BY ID DESC LIMIT 0, 10');
                    while ($donnees = $reponse->fetch())
                    {
                        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong></br>' . htmlspecialchars($donnees['messages']) . '</br>' . htmlspecialchars($donnees['date_creation']) .'</p>';
                        
                    }
                    $reponse->closeCursor(); 
                ?>

                <?php
                //affichage nbre de messages reçus
                $reponse = $bdd->query('SELECT SUM(ID) AS nbre_message_envoyé FROM minichat1');
                $donnees = $reponse->fetch();
                echo 'Vous avez reçu '   . $donnees['nbre_message_envoyé'] . ' messages';
            ?>
            </div>
            
        </div>
    </div>

    <?php include "footer.php"//FOOTER?>
    
</body>
</html>