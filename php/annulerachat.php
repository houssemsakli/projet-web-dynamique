<?php
    session_start();
    $_SESSION["achats"] = array();
    header('Location: http://localhost/p/php/mesachats.php');
?>