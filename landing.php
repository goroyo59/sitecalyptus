<?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='AlertAlert'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='AlertAlert'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
</head>
<body>
    <h1>Bonjour!<?php echo $_SESSION['user']; ?>    </h1>
    <a href="déconnexion.php" class = "bouton3">Déconnexion</a>
</body>
</html>