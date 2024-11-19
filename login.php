<?php
session_start(); // Démarrer la session pour accéder aux variables de session

// Récupérer le message d'erreur s'il est défini
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
// Effacer le message d'erreur après l'avoir affiché
unset($_SESSION['error_message']);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <!-- Favicons -->
    <link href="public/templates/templateLogin/assets/images/logoUcab-removebg-preview.png" rel="icon">
    <link href="public/templates/templateLogin/assets/images/logoUcab-removebg-preview.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="public/templates/templateLogin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="public/templates/templateLogin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/templates/templateLogin/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="public/templates/templateLogin/css/style.css">

    <title>Amicale_des_étudiant_de_ucab</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2"
            style="background-image: url('public/templates/templateLogin/images/UCABamicale.png'); background-size: cover; width: 500px; height: 700px; margin-top: 1rem; ">
        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3 style="margin-left: 17%; width: 66%;"><strong
                                style="Border-bottom: 3px solid #13640F;">Connexion</strong></h3><br><br>
                        <form action="loginController" method="post">
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email@gmail.com"
                                    id="username" required>
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" name="password" placeholder="mot de passe"
                                    id="password" required>
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember
                                        me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                <p id="msg_error">

                                </p>
                            </div>
                            <!-- affichage message d'erreur -->
                            <?php if (!empty($error_message)): ?>
                            <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
                            <?php endif; ?>

                            <input style="background-color: #13640F; color: white;" type="submit" value="Connecter"
                                class="btn btn-block">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="public/templates/templateLogin/js/jquery-3.3.1.min.js"></script>
    <script src="public/templates/templateLogin/js/popper.min.js"></script>
    <script src="public/templates/templateLogin/js/bootstrap.min.js"></script>
    <script src="public/templates/templateLogin/js/main.js"></script>
</body>

</html>