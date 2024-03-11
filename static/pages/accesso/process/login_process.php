<?php

session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $userIndex = array_search($username, $_SESSION['username']);

    if ($userIndex !== false && password_verify($password, $_SESSION['password'][$userIndex])) {

        $_SESSION['user_id'] = $userIndex; 
        header("Location: ../../../../index.php"); 
        exit();
    } else {
        echo "Credenziali non valide. Riprova.";
    }
} else {
    // L'array di sessione non è stato inizializzato correttamente
    echo "Errore nella variabile di sessione.";
}