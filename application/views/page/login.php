<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Se connecter</h1>

<form action="<?php echo site_url('login/seconnecter'); ?>" method="post">
    <label for="mail">Email:</label>
    <input type="text" id="mail" name="mail"><br><br>
    <label for="mdp">Mot de passe:</label>
    <input type="password" id="mdp" name="mdp" autocomplete="off"><br>
    <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?><br>
    <input type="submit" value="Se connecter">
</form>

</body>
</html>
