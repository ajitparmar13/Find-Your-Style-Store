<?php
    session_start();
    unset($_SESSION['loggedin']);
    unset($_SESSION['member_id']);
    session_destroy();
    header("location: logIn.php");
?>
