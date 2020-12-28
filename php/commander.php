<?php
    $con = MySQLi_connect("localhost","root","") ;
    MySQLi_select_db($con,"bincoDb") ;

    $prixtotal = $_POST['prixtotal'];
    $nbrtotal = $_POST['nbrtotal'];
    $email = $_POST['emailco'];
    
    $req = "insert into commandes values (NULL,'$email','$prixtotal','$nbrtotal')";
    
    MySQLi_query($con,$req);
    
    if (mysqli_affected_rows($con)<0){
        echo('<div style="margin-top: 50%;"><div class="alert alert-danger" >Une erreur est sourvenue</div>');
    }else{
    	header('Location: http://localhost/p/php/mescommandes.php');       
    }

    exit();
?>   
