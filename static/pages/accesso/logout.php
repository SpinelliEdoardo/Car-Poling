<?php
// Inizia o riprendi la sessione
session_start();

// Chiudi la sessione
session_destroy();

// Reindirizza l'utente alla pagina di accesso con un messaggio di logout
header("Location: ../../../index.php");
exit();