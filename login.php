<?php include "server.php";?>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css"/>
</head>
<body>
<div id="container">
    <!-- zone de connexion -->

    <form method="POST" action="login.php">
        <h1>Connexion</h1>

        <label><b>Mail</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="mail">

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="passwd">

        <button type="submit" class="loginbtn" name="login_user">LOGIN</button>
        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2) echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>

</body>
</html>