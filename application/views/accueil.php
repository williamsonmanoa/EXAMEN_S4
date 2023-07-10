<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Bienvenue, <?= $username ? $username : 'Utilisateur' ?></h1>
    <a href=<?php echo base_url('user/deconnection') ?>>Deconnexion</a>
    
</body>
</html>