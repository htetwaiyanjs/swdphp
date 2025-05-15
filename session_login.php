<?php
    session_start();

    $_SESSION['loggedin'] = true;
    echo "User is Logged in";
?>