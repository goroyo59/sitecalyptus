
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="inscription.css">
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
        <li><a href="inscription.php">inscriptiton</a></li>
        <li><a href="contact.php">contact, <br>connexion</a></li>
    </ul>
    </nav>
</header>
<body>
<div class="contain">

<form class="formulaire">
<?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
    <div class="form2" action = "inscription_traitement.php" method = "POST" autocomplete="on">
        <div>inscrivez vous</div>
        <div>pseudo</div>
        <div class="form22"><input type="pseudo"  name="pseudo" class = "form21" placeholder="pseudo" required = "required" autocomplete="off"></div>
        <div>e-mail</div>
        <div class="form22"><input type="email"  name="email" class = "form21" placeholder="e-mail" required = "required" autocomplete="off"></div>
        <div>mot de passe</div>
        <div class="form22"><input type="password"  name="password" class = "form21" placeholder="mot de passe" required = "required" autocomplete="off"></div>
        <div>retapez mot de passe</div>
        <div class="form22"><input type="password"  name="password_retype" class = "form21" placeholder="mot de passe à retaper" required = "required" autocomplete="off"></div>

        
    </div>
    <div class="inscription"><button type ="submit" class="bouton2">s'inscrire</button></div>
    
    
    
</form>


</div>
<footer>
    <div class="footer">
    <ul>
    <li>mentions légales</li>
    <li>partenaires</li>
</ul>
   </div>
</footer>

</body>