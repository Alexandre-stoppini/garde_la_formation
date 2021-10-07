<?php
session_start();
$mail = "";
$errors = array();
/** Connexion bdd */
$db = mysqli_connect('localhost', 'root', '', 'garde_la_formation');
if (mysqli_connect_errno()) {
    exit('Failed to connect to MYSQL : ' . mysqli_connect_error());
}
/** Inscription */
if (isset($_POST['reg_user'])) {
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $name = mysqli_real_escape_string($db, $_POST['lastName']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $mail = mysqli_real_escape_string($db, $_POST['email']);
    $passwd = mysqli_real_escape_string($db, $_POST['psw']);
    $passwd_rep = mysqli_real_escape_string($db, $_POST['psw-repeat']);
    if (empty($mail)) {
        array_push($errors, "Mail requis");
    }
    if (empty($passwd)) {
        array_push($errors, "Mot de passe requis");
    }
    if ($passwd !== $passwd_rep) {
        array_push($errors, "Mot de passe non similaires");
    }
    /** Vérification dans bdd pour éviter doublon */
    $user_check_query = "SELECT * FROM users WHERE mail='$mail' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $users = mysqli_fetch_assoc($result);
    if ($users['username'] === $mail) {
        array_push($errors, "Mail déjà utilisé");
    }
    if (count($errors) === 0) {
        
        $stmt = $db ->prepare("INSERT INTO users (prenom, nom, phone ,address, age, mail, passwd) VALUES ('$firstName', '$name', '$phone', '$address', '$age', '$mail', '" . password_hash($passwd, PASSWORD_DEFAULT, array("cost" => 10)) . "')");
        $stmt->execute();
        $stmt->close();
        $_SESSION['prenom'] = $firstName;
        $_SESSION['succes'] = "Connexion réussi";
        header('location: login.php');
    } else {
        foreach ($errors as $val) {
            var_dump($val);
        }
        exit();
    }
}
/** Choix spe */
if (isset($_POST['spe_user'])) {
    $role = mysqli_real_escape_string($db, $_POST['role']);
    if ($role == "benevole") {
        $stmt = $db->prepare("UPDATE users SET benevole = 1,  role_set = 1 WHERE id = " . ($_SESSION['id']));
    } elseif ($role == "pro") {
        $stmt = $db->prepare("UPDATE users SET benevole =1, pro =1, role_set = 1 WHERE id = " . ($_SESSION['id']));
    } else {
        $stmt = $db->prepare("UPDATE users SET role_set = 1 WHERE id = " . ($_SESSION['id']));
    }
    $stmt->execute();
    $stmt->close();
    header('location: ../index.php');
}
/** Login */
if (isset($_POST['login_user'])) {
    if (!isset($_POST['email'], $_POST['psw'])) {
        exit('Please fill both the username and password fields!');
    }
    if ($stmt = $db->prepare('SELECT id, passwd, role_set FROM users WHERE mail = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password, $role_set);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if (password_verify($_POST['psw'], $password)) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['id'] = $id;
                if ($role_set == 0) {
                    header('location: ../Vue/page_choix.php');
                } else {
                    header('location: ../Vue/index.php');
                }
            } else {
                // Incorrect password
                echo 'Incorrect username and/or password !';

            }
        } else {
            // Incorrect username
            echo 'Incorrect username and/or password!';
        }
        $stmt->close();
    }
}
if (isset($_POST['post_demande'])) {

    $motif = mysqli_real_escape_string($db, $_POST['motif']);
    $lieu = mysqli_real_escape_string($db, $_POST['lieu']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    if ($query = $db->prepare("INSERT INTO demande (id_user, motif, lieu, description) VALUES (" . $_SESSION['id'] . ", '$motif', '$lieu', '$description')")) {

        $query->execute();
    }
    header('location: ../Vue/index.php');

}