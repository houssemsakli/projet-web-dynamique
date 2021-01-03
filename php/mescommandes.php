<!DOCTYPE html>
<html>
<head>
	<title>Mes Commandes</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover"> 
    <meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="icon" href="../images/favicon.png">
  
    <script src="../js/jquery-3.2.1.slim.min.js" ></script><!-- BOOTSTRAP -->
    <script src="../s/popper.min.js" ></script><!-- BOOTSTRAP -->  
    <script src="../js/bootstrap.min.js" ></script><!-- BOOTSTRAP -->
    <script src="../js/jquery-3.5.1.min.js" ></script><!-- JQUERY -->
	
	<link rel="stylesheet" href="../css/bootstrap.min.css"><!-- BOOTSTRAP -->

	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">

	<script src="../js/ea5c09adf8.js" ></script><!-- FONT AWESOME-->
    <link rel="stylesheet" href="../css/style.css" type="text/css"> 
    <link rel="stylesheet" href="../css/connexioninscri_style.css" type="text/css"> 
</head>
<body onload="incheight()">
<!--------------------------------------------- NAVBAR BEGIN ------------------------------------------------>
    <header>
        
        <div class="fixed-top shadow  mb-5  rounded">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark row ">
                <div class="container-fluid" style="margin-left: 70px; margin-right: 70px;">
                    <a class="navbar-brand" href="../php/index.php"><img src="../images/binco.png" alt="BINCO"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php 
                session_start();
                if(sizeof($_SESSION)>0)
                { ?>
                            <ul class="navbar-nav col-md-7">
                                <li class="nav-item ">
                                    <a class="nav-link" href="../php/index.php">Accueil <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Articles
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="../php/articleshomme.php">Homme</a>
                                        <a class="dropdown-item" href="../php/articlesfemme.php">Femme</a>
                                        <a class="dropdown-item" href="../php/articlesenfant.php">Enfant</a>
                                    </div>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link cont" href="#" >Contactez-Nous</a>
                                </li>                               
                            </ul>
                            <ul class="col-md-5 navbar-nav "  style="margin-left: 10%;">
                            <!-- il y a  de session -->  
                            <li class="nav-item" >
                                <a class="nav-link"  href="mesachats.php" ><i class="fa fa-shopping-cart"></i></a>
                            </li>
                            <li>
                            <a class="nav-link" href="#" >
                <?php
                    echo( $_SESSION["prenom"].' ');
                    echo( $_SESSION["nom"]);
                ?>
                            </a></li>
                            <li class="nav-item active" >
                                <a class="nav-link"  href="mescommandes.php" >Mes Commandes</a>
                            </li>                                                       
                            <!-- DEONNEXION-->
                            <li class="nav-item" >
                                <a class="nav-link" style="color : #BE3144" href="deconnexion.php" >Déconnexion</a>
                            </li>

                <?php
                }?>
                        </ul>       
                    </div>
            </div>
            </nav>
        </div>
    </header>
<!-- -------------------------------------------- NAVBAR END ----------------------------------------------   -->
<!-- -------------------------------------------- article homme BEGIN ----------------------------------------------   -->
	
<!-- -------------------------------------------- Form BEGIN ----------------------------------------------   -->
<div style="height: 650px;padding-top: 0px;background-color: rgb(230,230,230);"  id="f">
	<div class="container "  ><br><br>
		<div class="row">
			<div class="col-md-12 text-center nouv-title-style form-title-style" >Mes Commandes</div> 
		</div><br>
            <div class="center text-center box-connexion shadow p-3 mb-5 bg-white rounded " id="box-connexion" style="width: 500px; height : 250px; position: relative;">
                <div class="container">
                    <div class=" space " ></div>
                        <?php 
                            $con = MySQLi_connect("localhost","root","") ;
                            MySQLi_select_db($con,"bincoDb") ;
                            $x=$_SESSION['email'];
                            $req = "select * from commandes where email='$x' ";
                            $res = MySQLi_query($con,$req);
                            
                            if(mysqli_num_rows($res) != 0)
                            {

                                echo ('<div class="container">
                                        <table style="text-align: center; width: 450px;"><tr><th style="text-align: center; width: 100px; color: #BE3144">ID</th><th style="text-align: center; width: 150px; color: #BE3144">PRIX TOTAL</th><th style="text-align: center; width: 200px; color: #BE3144">NOMBRE D&apos;ARTICLES</th></tr>');
                                while($e=mysqli_fetch_array($res))
                                {
                                    echo('<tr  class="tablerows" ><td>'.$e['id']."</td><td>$".$e[2].'</td><td>'.$e[3]."</td></tr>");
                                }
                                echo "</table></div>";
                            }
                            else
                            {
                                echo '<div class="alert alert-danger">Vous n&apos;avez pas des commandes !</div>';
                            }
                        ?>
                </div>
            </div>
	</div>
</div>
<!-- -------------------------------------------- Form END ----------------------------------------------   -->
<!-- -------------------------------------------- FOOTER BEGIN ----------------------------------------------   -->
<footer >
    <div class="topsidefooter container">
        <div class="row">
            <div  class="col-lg-4">
                <div class="footer_title">
                    Contact
                </div><br>
                <div class="subfooter" >
                    <i class="fas fa-map-marker-alt">&nbsp;</i>Stah Jeber ,<br>
                    Monastir, Tunisie<br>
                    <i class="fas fa-phone"></i> &nbsp;+216 12 345 678<br>
                    <i class="fas fa-envelope"></i> &nbsp; <u>contact@binco.com</u>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer_title">social</div>
                <div class="subfooter social_media row">
                    <div class="col-sm"><a href="https://example.com"><i class="fab fa-facebook-f fa-2x"></i></a></div>
                    <div class="col-sm"><a href="https://example.com"><i class="fab fa-instagram fa-2x"></i></a></div>
                    <div class="col-sm"><a href="https://example.com"><i class="fab fa-twitter fa-2x"></i></a></div>
                </div>
            </div >
            <div class="col-lg-4">
                <div class="footer_title">
                    développé par
                </div ><br>
                <div class="subfooter d-flex justify-content-center" >
                    <table >
                        <tr>
                            <td style="padding-right:15px;text-align: right;">Housssem</td>
                            <td style="padding-left:15px;text-align: left;" >Sakli</td>
                        </tr>
                        <tr>
                            <td style="padding-right:15px;text-align: right;">Ramez</td>
                            <td style="padding-left:15px;text-align: left;">Zormati</td>
                        </tr>
                        <tr>
                            <td  style="padding-right:15px;text-align: right;">Zinédine</td>
                            <td style="padding-left:15px;text-align: left;">Younsi</td>
                        </tr>
                        <tr>
                            <td  style="padding-right:15px;text-align: right;">Youssef</td>
                            <td style="padding-left:15px;text-align: left;">Jobrane</td>
                        </tr>
                    </table>
                </div>
            </div>		
        </div>
    </div>
    <div class="Copyright ">
        <span class="redcolor">B I N C O</span> <br> © Copyright 2021 
    </div>
    <a id="contactref"></a>
</footer>
<!-- -------------------------------------------- FOOTER END ----------------------------------------------   -->
<script>

    function increaseHeight()
    {
        x = parseInt(document.getElementById("box-connexion").style.height)+18;
        document.getElementById("box-connexion").style.height = x.toString()+"px";
        
        x2 = parseInt(document.getElementById("f").style.height)+10;
        document.getElementById("f").style.height = x2.toString()+"px";
    }  
    function incheight(){
        var TabInputs=document.getElementsByClassName('tablerows');
        for (var i=0;i<TabInputs.length;i++)
        {
            increaseHeight();
        }
            
    }

    $('.cont').click(function() {
        $('html,body').animate({
            scrollTop : $('#contactref').offset().top
        },1000);
    })
</script>
</body>
</html>