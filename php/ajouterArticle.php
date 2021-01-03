<!DOCTYPE html>
<html>
<head>
	<title>Ajouter </title>
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

<body onload="increaseHeight()">
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
                                <li class="nav-item dropdown active">
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

	
	
<!-- -------------------------------------------- Form BEGIN ----------------------------------------------   -->
<div class="formsection" id="formsection" style="height: 650px">
	<div class="container ">
		<div class="row">
			<div class="col-md-12 text-center nouv-title-style form-title-style" >Ajouter un article</div> 
		</div><br>
            <div class="center text-center box-connexion shadow p-3 mb-5 bg-white rounded " id="box-connexion" style="height : 380px;">
                <div class="container">
                    <div class="space"></div>
                    
<?php 
    $con = MySQLi_connect("localhost","root","") ;
    MySQLi_select_db($con,"bincoDb") ;


    if(isset($_POST["prix"]))
    {
        $con = MySQLi_connect("localhost","root","") ;
        MySQLi_select_db($con,"bincoDb") ;

  
        $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
        //$image1 = base64_encode(file_get_contents(addslashes($_FILES['image1']['tmp_name'])));
        $image2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $type = $_POST['type'];
        if($type=='e')
            $req = "insert into articleEnfants values ('$image1','$image2','$nom','$prix')";
        else if($type=='f')
            $req = "insert into articleFemme values ('$image1','$image2','$nom','$prix')";
        else if($type=='h')
            $req = "insert into articleHomme values ('$image1','$image2','$nom','$prix')";
        MySQLi_query($con,$req);
        
        if (mysqli_affected_rows($con)<0){
            echo('<div style="margin-top: 50%;"><div class="alert alert-danger" >ERREUR</div>');
            
        }else{
            echo( '<div class="alert alert-success" style="margin-top: 25%;">Article  ajoutée avec succès</div>');
            echo('<button onclick="window.location.href=`http://localhost/p/php/ajouterArticle.php`;" class="btn btn-outline-dark btn-lg btn-block">Revenir</button></div>');
        }
    }else{
?>
                    
                    <form action="ajouterArticle.php" enctype="multipart/form-data" method="post" class="form-group" name="f" >
                        <div class="space"></div>
                        <div class="alert alert-danger d-none" id="ernom">Le nom est invalide</div>
                        <div class="alert alert-danger d-none" id="erprix">Le prix est invalide</div>
                        <input type="file"  name="image1" class="form-control "  id="image1"><br>
                        <input type="file"  name="image2"  class="form-control " id="image2"><br>
                        <input type="text" placeholder="nom de l'article" name="nom" onblur="VerifNom();verifGlobal()" class="form-control " id="nom"><br>
                        <input type="number" placeholder="prix" name="prix" class="form-control " onblur="verifPrix();verifGlobal()" id="prix">
                        <br><div class="form-control">
                            <input type="radio"  name="type" value="h" id="hom"> <label for="hom">Homme</label>  
                            <input type="radio" name="type" value="f" id="fem"> <label for="fem">Femme</label> 
                            <input type="radio"name="type" value="e" id="enf"> <label for="enf">Enfant</label> 
                        </div>
                        
                        <br>
                        <input class="btn-submit" id="sub" disabled type="submit" value="Ajouter" style="background-color:grey;border-color:grey">
                    </form>

    <?php 
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
        x = parseInt(document.getElementById("box-connexion").style.height)+80;
        document.getElementById("box-connexion").style.height = x.toString()+"px";
        x = parseInt(document.getElementById("formsection").style.height)+80;
        document.getElementById("formsection").style.height = x.toString()+"px";
        
    }
    function decreaseHeight()
    {
        x = parseInt(document.getElementById("box-connexion").style.height)-80;
        document.getElementById("box-connexion").style.height = x.toString()+"px";
        x = parseInt(document.getElementById("formsection").style.height)-80;
        document.getElementById("formsection").style.height = x.toString()+"px";
    }

    function verifNomPrenom(ch)
    {
        var i=0;
        var ok=0;
        while(i<ch.length)
        {
            if((ch[i].toUpperCase()<'A'||ch[i].toUpperCase()>'Z')&&(ch[i]<'0'||ch[i]>'9'))
                return false ; 
            i++;
        };
        return true;
    }
    function VerifNom()
    {
        var nom=document.getElementById("nom").value;
        if((!verifNomPrenom(nom)||nom.length==0)&&(document.getElementById("ernom").classList.contains("d-none")==true))
        {
            document.getElementById("ernom").classList.remove('d-none');
            increaseHeight();

        }else if((verifNomPrenom(nom)&&nom.length>0)&&(document.getElementById("ernom").classList.contains("d-none")==false)){
            document.getElementById("ernom").classList.add('d-none');
            decreaseHeight();
        }
    }

    function verifPrix()
    {
        if(((parseInt(document.f.prix.value))<0||document.f.prix.value=="")&&(document.getElementById("erprix").classList.contains("d-none")==true))
        {
            document.getElementById("erprix").classList.remove('d-none');
            increaseHeight();
        }else if(((parseInt(document.f.prix.value))>=0)&&document.f.prix.value.length>0&&(document.getElementById("erprix").classList.contains("d-none")==false)){
          
            document.getElementById("erprix").classList.add('d-none');
            decreaseHeight();
        }
    }
    function disableSubmit()
    {
        document.getElementById("sub").disabled = true ; 
        document.getElementById("sub").style.backgroundColor = "grey";
        document.getElementById("sub").style.border = "grey";
    }
    function enableSubmit()
    {
        document.getElementById("sub").disabled = false ; 
        document.getElementById("sub").style.backgroundColor = "#BE3144";
        document.getElementById("sub").style.border = "#BE3144";
    }

    function verifGlobal(){
        var mdp=document.getElementById("nom").value;
        var mdp2=document.getElementById("prix").value;


    //verification nom et prenom 
        if(!verifNomPrenom(nom))
        {
            disableSubmit();
            return false;
        }

        if((parseInt(document.f.prix.value))<0||document.f.prix.value=="")
        {
            disableSubmit();
            return false;
        }	
        enableSubmit();
    }
    $('.cont').click(function() {
        $('html,body').animate({
            scrollTop : $('#contactref').offset().top
        },1000);
    })
</script>
</body>
</html>