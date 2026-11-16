<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form method="POST">
        <label>Nom d'utilisateur :</label>
        <input type="text" name="username"><br>
        <label>Mot de passe :</label>
        <input type="password" name="password"><br><br>
        <button type="submit">Se connecter</button>
    </form>

    <?php
        $utilisateur = [
        "username" => "admin",
        "password" => password_hash(
        "123456",
        PASSWORD_DEFAULT
        )
        ];
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($username === $utilisateur["username"] &&
            password_verify($password,$utilisateur["password"])) {
            echo "Connexion réussie.";
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['connecte'] = true;
            header('Location:dashboard.php');
            exit();
        } 
        else {
            echo "Identifiants incorrects.";
        }
    ?>
</body>
</html>