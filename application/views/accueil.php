<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>COMPLETE YOUR PROFIL</h1>

<div class="buttons">
    <a href="#" class="btn btn-1">WANT TO INCREASE YOUR WEIGHT ?</a>
    <a href="#" class="btn btn-1">WANT TO REDUCE YOUR WEIGHT ?</a>
</div>


    <a href=<?php echo base_url('user/deconnection') ?>>Deconnexion</a>
    
</body>
</html>


<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    margin: 0;
    padding: 0;
  }
  
  h1 {
    text-align: center;
    margin-bottom: 10%;
    margin-top: 10%;
  }
  
  .buttons {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
  
  .btn {
    text-decoration: none;
    padding: 20px 50px;
    font-size: 1.25rem;
    position: relative;
    margin: 20px;
    color: #fff;
    text-align: center;
  }
  
  /* button */
  .btn-1 {
    background: #000000;
    color: #ffffff;
    border-radius: 30px;
    transition: transform 0.3s ease;
  }
  
  .btn-1::after,
  .btn-1::before {
    content: "";
    position: absolute;
    opacity: 0.3;
    background: #585555;
    border-radius: inherit;
    width: 100%;
    height: 100%;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: transform 0.3s ease;
  }
  
  .btn-1:hover {
    transform: translate(-12px, -12px);
  }
  
  .btn-1:hover::after {
    transform: translate(6px, 6px);
  }
  
  .btn-1:hover::before {
    transform: translate(12px, 12px);
  }
  
  /* Media Queries */
  @media screen and (max-width: 768px) {
    h1 {
      margin-bottom: 30%;
    }
    
    .btn {
      padding: 15px 30px;
      font-size: 1rem;
    }
  }
  
</style>