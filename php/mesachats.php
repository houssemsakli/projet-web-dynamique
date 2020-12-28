<!DOCTYPE html>
<html>
<head>
	<title>Mon Panier</title>
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
<!-- -------------------------------------------- NAVBAR BEGIN ----------------------------------------------   -->
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
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <li class="nav-item active" >
                                <a class="nav-link"  href="mesachats.php" ><i class="fa fa-shopping-cart"></i></a>
                            </li>
                            <li>
                            <a class="nav-link" href="#" >
                <?php
                    echo( $_SESSION["prenom"].' ');
                    echo( $_SESSION["nom"]);
                ?>
                            </a></li>
                            <li class="nav-item" >
                                <a class="nav-link"  href="mescommandes.php" >Mes Commandes</a>
                            </li>                                                       
                            <!-- DEONNEXION-->
                            <li class="nav-item" >
                                <a class="nav-link" style="color : #BE3144" href="deconnexion.php" >Déconnexion</a>
                            </li>

                <?php
                }else {  
                ?>
                            <ul class="navbar-nav col-md-9">
                                <li class="nav-item">
                                    <a class="nav-link" href="../php/index.php">Accueil <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <ul class="col-md-3 navbar-nav " style="text-align: right">
                            <!-- il y a pas de session -->    
                            <li class="nav-item" >
                                <a class="nav-link" href="../inscription.html" >Inscription</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link" href="../php/connexion.php" >Connexion</a>
                            </li>
                <?php }?>  
                        </ul>       
                    </div>
            </div>
            </nav>
        </div>
    </header>
	<!-- -------------------------------------------- NAVBAR END ----------------------------------------------   -->



<!-- -------------------------------------------- article homme BEGIN ----------------------------------------------   -->
	
<!-- -------------------------------------------- Form BEGIN ----------------------------------------------   -->
<div style="height: 550px;padding-top: 0px;background-color: rgb(230,230,230);"  id="f">
	<div class="container "  ><br><br>
		<div class="row">
			<div class="col-md-12 text-center nouv-title-style form-title-style" >Mon Panier</div> 
		</div><br>
            <div class="center text-center box-connexion shadow p-3 mb-5 bg-white rounded " id="box-connexion" style="height : 290px; position: relative;">
                <div class="container">
                    <div class=" space" ></div>
                    <?php
                        if(isset($_POST["cartitems"])&&sizeof($_POST["cartitems"])>0)
                        {
                            foreach($_POST["cartitems"] as $obj)
                            {
                                echo("<div class='alert alert-success'>");
                                echo('<b>Produit : </b>'. $obj);
                                echo("</div>");
                            }
                            echo ('<div class="alert alert-primary" style="width: 438px; bottom: 140px; position: absolute;"><b>NOMBRE DE PRODUITS: </b>'.$_POST["totalnbr"].' &nbsp;&nbsp;&nbsp;<b>TOTAL: </b> $'.$_POST["totalprix"]."</div>");
                            echo('<form method="post" action="commander.php">
                                <input type="hidden" name="prixtotal" value="'.$_POST["totalprix"].'" />
                                <input type="hidden" name="nbrtotal" value="'.$_POST["totalnbr"].'" />
                                <input type="hidden" name="emailco" value="'.$_SESSION["email"].'" />
                                <button class="btn btn-outline-dark btn-lg btn-block" style="width: 438px; bottom: 95px; position: absolute;">Commander</button></form>');
                            echo('<form action="index.php"><button type="submit" class="btn btn-outline-danger btn-lg btn-block" style="width: 438px; bottom: 30px; position: absolute;" >Annuler</button></form></div>');
                        }
                        else
                            echo("<div class='alert alert-danger'>Vous n'avez pas ajouté(e) des articles </div>");
                           
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
        x = parseInt(document.getElementById("box-connexion").style.height)+60;
        document.getElementById("box-connexion").style.height = x.toString()+"px";
        
        x2 = parseInt(document.getElementById("f").style.height)+60;
        document.getElementById("f").style.height = x2.toString()+"px";
    }  
    function incheight(){
        var TabInputs=document.getElementsByClassName('alert alert-success');
        for (var i=0;i<TabInputs.length;i++)
            increaseHeight();
    }

    $('.cont').click(function() {
        $('html,body').animate({
            scrollTop : $('#contactref').offset().top
        },1000);
    })
</script>
</body>
</html>