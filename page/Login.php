<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Bienvenu(e) sur Facebook</h1><br>
    <form action="../tools/traitement/loginTraitement.php" method="GET">
        <label for="mail">Adresse Mail:</label>
        <input type="text" name="mail" placeholder="Adresse mail" id="mail"><br>
        <label for="passwd">Mots de passe:</label>
        <input type="password" name="passwd" placeholder="Mots de passe" id="passwd"><br>
        <input type="submit" value="Connexion">
    </form>
</body>
</html>
<script src="../tools/script/loginScript.js"></script>