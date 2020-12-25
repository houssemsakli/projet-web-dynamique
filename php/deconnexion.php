
<?php
    session_start(); 
    session_destroy(); 
    header('Location: http://localhost/p/php/index.php');
    exit();
?>
