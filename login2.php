<?php
session_start ();
session_destroy();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login2</title>
    <style>
        /* Arrière-plan décoratif */
        body {
            background-image: url('background.jpg'); /* Remplacez par le chemin de votre image */
            background-size: cover; /* L'image couvre tout l'écran */
            background-position: center; /* Centrer l'image */
            background-repeat: no-repeat; /* Empêche la répétition de l'image */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }

        /* Style du formulaire */
        form {
           
    background-color: rgba(210, 180, 140, 0.9); /* Fond marron clair semi-transparent */
    border: 2px solid #8b4513; /* Bordure marron foncé */
    padding: 20px;
    border-radius: 100; /* Supprime les coins arrondis pour une forme rectangulaire */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre */
    width: 100%; /* Largeur maximale */
    max-width: 400px; /* Largeur maximale du formulaire */
    transition: all 0.3s ease; /* Transition douce */

    }

        
    </style>
</head>
<body>

<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input  value= " <?php if( isset($emailValue)) echo $emailValue ?>" name="emailName" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        <span style='color: red'><?php echo $emailErrormsg ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="passName" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        <span style='color: red'><?php echo $passwordErrormsg ?></span>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>



