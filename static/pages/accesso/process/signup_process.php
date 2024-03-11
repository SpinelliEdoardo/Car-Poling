<?php

session_start();


$username = $_POST["username"];
$password = $_POST["password"];

$ciptedPassword = password_hash($password, PASSWORD_DEFAULT);

if (!empty($username) && !empty($password)) {
    // Verifica se l'utente è già registrato
    if (isset($_SESSION['username']) && in_array($username, $_SESSION['username'])) {
        echo "Questo username è già stato registrato. Scegli un altro.";
    } else {
        // Registra l'utente
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        
        //echo "Registrazione avvenuta con successo!";

        header("Location: ../../../../index.php");
    }
} else {
    // Gestisci l'errore se l'username o la password sono vuoti
    echo "Inserisci un username e una password validi.";
}