<?php include("../modele/server.php");?>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../vue/css/boostrap.css" media="screen" type="text/css"/>
    <link href="../vue/css/boostrap.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>
  
</style>
<style>

  html,body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #7579E7;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  
}
hr {
    border: none;
    border-top: 3px double rgb(255, 255, 255);
    color: rgb(255, 255, 255);
    overflow: visible;
    text-align: center;
    height: 5px;
}
hr:after {
    background: #7579E7;
    content: 'OU';
    padding: 0 4px;
    position: relative;
    top: -13px;
}
#blanc{
  color: #fff;

}
#inscription{
  color: #9AB3F5;

}

</style>
<body class="text-center">
    
  <main class="form-signin">
    <form action="login.php" method="POST">
     
      <h1 id="blanc" class="h3 mb-3 fw-normal">Connexion</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" data-form-type="email" name="email">
        <label for="floatingInput">Adresse mail</label>
      
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" data-form-type="password" name="psw">
        <label for="floatingPassword">Mot de passe</label>
      
    </div>
      <div class="checkbox mb-3">
        <label data-dashlane-label="true">
          <input type="checkbox" for="remember-me" value="remember-me"  data-form-type="consent,rememberme"> </input>
          <label for="remember-me" id="blanc">se souvenir de moi</label>
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary " type="submit" id='submit' name="login_user">Connexion</button>
                  
      <!-- <?php
     if (isset($_GET['erreur'])) {
         var_dump($_GET['erreur']);
         $err = $_GET['erreur'];
         if ($err == 1 || $err == 2) echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
     }
     ?> -->
      
    </form>
    <hr>

      <div class="container_signin">
          <p id="blanc">Pas encore inscrit ? <a href="inscription.php" id="inscription">Inscription</a></p>
      </div>
<!--        <form action="Inscription.php" method="POST">-->
<!--          <p type="submit" id='submit'>Inscription</p>-->
<!--        </form>-->
    
  </main>
  
  
      
    
  
  </body>