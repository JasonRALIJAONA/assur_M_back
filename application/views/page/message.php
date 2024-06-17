<!DOCTYPE html>
<html>
<head>
    <title>Service Client - Messages</title>
</head>
<body>
    <h1>Messages du Service Client</h1>
    <ul>
        <?php foreach ($messages as $message): ?>
            <li>
                <strong><?php echo $message['id_envoyeur'] == $id_utilisateur ? 'Moi' : 'Autre'; ?>:</strong>
                <?php echo $message['message']; ?> <em>(<?php echo $message['moment']; ?>)</em>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Envoyer un nouveau message</h2>
    <form action="" method="POST">
        <label for="id_receveur">ID Receveur:</label>
        <input type="text" name="id_receveur" id="id_receveur"> 
        <br>
        <label for="message">Message:</label>
        <textarea name="message" id="message"></textarea>
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
