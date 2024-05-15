<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php 
        require_once('../includes/menu.php');
    
    ?>

    <div class="signin">
        <form action="">
            <label for="username">Nom d'utilisateur ou pseudo</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudo ici..." minlength="5" maxlength="20" required>

            <label for="">Email</label>
            <input type="email"  id="email" name="email" placeholder="Email..." required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir le mot de passe..." minlength="5" maxlength="20" required>

            <label for="confirmation">confirmer Mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="Saisir le mot de passe..." minlength="5" maxlength="20" required>


        </form>
    </div>
</body>
</html>