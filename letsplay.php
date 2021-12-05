<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="letsplay.css" media="screen" type="text/css" />
        <link rel="icon" href="img/minecraft.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
        <title>Gestion serveur</title>
    </head>
    <body>
        <div id="content">
            <?php
                session_start();
                if($_SESSION['username'] != "flexteam"){
                    header('Location: login.php');
                }
            ?>
            <h1>Bienvenue sur la page de lancement du serveur minecraft !</h1>
        </div>
        <div id="container">
            <form action="script.php" method="post">
                <input type="submit" name="executer" value="ON" class="button" id="ON">
                <br/>
                <input type="submit" name="executer" value="OFF" class="button" id="OFF">
            </form>
        </div>
    </body>
</html>