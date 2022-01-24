
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet"> 
    <title>CALYPTUS</title>
</head>
<body>
    <div>    
<header class="header">
    <nav><h1><a href="index.php"><img src="img/logo.png"alt="CALYPTUS" width="150"></a></h1>
    <ul>
    <li><a href="index.php">Accueil</a></li>
        <li><a href="réservations.php">réservations</a></li>
        <li><a href="partitions.php">partitions</a></li>
        <li><a href="albums.php">albums</a></li>
        <li><a href="inscription.php">inscriptiton</a></li>
        <li><a href="contact.php">contact, <br>connexion</a></li>
    </ul>
    </nav>
</header>
<body>
    <div class="contain">

    <form class="formulaire">
    <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
    <div class="form1" action="connexion.php" method="POST" autocomplete="on">
        <div>adresse e-mail:</div>
        <div class = "form12"><input type="email" name="e-mail" class = "form11" placeholder="adresse e-mail" required = "required" autocomplete="off">
        </div>
        <div>mot de passe:</div>
        <div class = "form12">
        <input type="motdepasse" name="motdepasse" class = "form11" placeholder="mot de passe" required = "required" autocomplete="off">
        </div>
        </div>
        <div class = "seconnecter" > <button type="submit" class="bouton1">se connecter</button> </div>
        <div class="contact">contactez nous</div>
        <button name="question" cols="45" rows="5" onclick="window.location.href='/appcommentairescalyptus/index.php';" class="bouton3">Laissez vos <br> commentaires.</button>
    </form>
    </div>
    </body>

<footer>
    <div class="footer">
    <ul>
    <li>mentions légales</li>
    <li>partenaires</li>
</ul>
   </div>
</footer>
</body>
</html>
