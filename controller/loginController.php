<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['user_id'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "ucab_amical";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    // Préparer la requête pour obtenir le mot de passe haché de l'utilisateur
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['id_user'] = $user['id_user'];
        echo "<script> window.location.href='admin';</script>";
    } else {
        // Stocker le message d'erreur dans une variable de session
        $_SESSION['error_message'] = "Veuillez vérifier les informations saisies : email et mot de passe.";
        // Rediriger vers la page de connexion
        header("Location: login.php");
        exit();
    }

    // Fermeture de la connexion
    $stmt->close();
    $conn->close();
}
?>