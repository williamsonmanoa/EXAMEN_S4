<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Page de login</h3>
    <form action=<?php echo base_url('authentification/verifyLogin') ?> method="post">
        <div>
            <input type="email" name="email" placeholder="Votre email" id="email" value="sedera@gmail.com" required>
            <label for="email" name="email_check"></label>
        </div>
        <div>
            <input type="password" name="password" placeholder="Mot de passe" id="password" value="123" required>
            <label for="password" name="password_check"></label>
        </div>
        <div>
            <input type="submit" value="Connexion">
        </div>
    </form>
    <div>
        <p>Pas de compte? <a href=<?php echo base_url('authentification/inscription') ?>>Inscrivez-vous ici</a></p>
    </div>
</body>
</html>
<style>
    body {
  font-family: Arial, sans-serif;
}

h3 {
  text-align: center;
}

form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}

form div {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  margin: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

p {
  text-align: center;
  margin-top: 10px;
}

a {
  color: #007bff;
  text-decoration: none;
}

@media (max-width: 600px) {
  form {
    max-width: 300px;
  }
}

</style>