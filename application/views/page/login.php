<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>TEST LOGIN</h1>

<form action="<?php echo site_url('login/seconnecter'); ?>" method="post">
    <label for="mail">Email:</label>
    <input type="text" id="mail" name="mail"><br><br>
    <label for="mdp">Mot de passe:</label>
    <input type="password" id="mdp" name="mdp"><br><br>

        <?php if (isset($error)): ?>
             <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        
    <input type="submit" value="Log">
</form>

</body>
</html>
