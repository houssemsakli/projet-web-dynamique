<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover"> 
    <meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="icon" href="../images/favicon.png">
  
    <script src="../js/jquery-3.2.1.slim.min.js" ></script><!-- BOOTSTRAP -->
    <script src="../js/popper.min.js" ></script><!-- BOOTSTRAP -->  
	<script src="../js/bootstrap.min.js" ></script><!-- BOOTSTRAP -->
	<script src="../js/jquery-3.5.1.min.js" ></script><!-- JQUERY -->
	
	<link rel="stylesheet" href="../css/bootstrap.min.css"><!-- BOOTSTRAP -->

	
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">


	<script src="../js/ea5c09adf8.js" ></script><!-- FONT AWESOME-->
	<link rel="stylesheet" href="../css/style.css" type="text/css"> 
</head>

<body onload="redEffectAnimation()">
	<!-- -------------------------------------------- NAVBAR BEGIN ----------------------------------------------   -->
	<header>
		
		<div class="fixed-top shadow  mb-5  rounded">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark row ">
				<div class="container ">
					<a class="navbar-brand" href="../php/index.php"><img src="../images/binco.png" alt="BINCO"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav col-md-9">
							<li class="nav-item active">
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
						<ul class="col-md-3 navbar-nav" >
                <?php 
                session_start();
                if(sizeof($_SESSION)>0)
                { ?>
                            <!-- il y a  de session -->  
                            <li>
                            <a class="nav-link" href="#" >
                <?php
                    echo( $_SESSION["prenom"].' ');
                    echo( $_SESSION["nom"]);
                ?>
                            </a></li>
                            <!-- DEONNEXION-->
                            <li class="nav-item" >
                                <a class="nav-link" style="color : #BE3144" href="deconnexion.php" >Déconnexion</a>
                            </li>
                <?php
                }else {  
                ?>
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
	
	<!-- -------------------------------------------- CAROUSEL BEGIN ----------------------------------------------   -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		  	
			<div class="overlay"></div>
			    <h2>UNE NOUVELLE<br>APPROCHE DU <span id="#span1">shopping <div id="spaneffectanim"class="redeffect"></div></span></h2>
		    <div class="carousel-item active">
			  <img class="imheight d-block w-100" src="../images/index1.png" alt="First slide">

		    </div>
		    <div class="carousel-item">
		      <img class="imheight d-block w-100" src="../images/index2.png" alt="Second slide">
		    </div>
		    <div class="carousel-item">
			  <img class="imheight d-block w-100" src="../images/index3.png" alt="Third slide">
		    </div>
		  </div>
		 
	</div>
<!-- -------------------------------------------- CAROUSEL END ----------------------------------------------   -->
<!-- -------------------------------------------- nouveautés BEGIN ----------------------------------------------   -->
<div class="nouvsection">
	<div class="container "><br>
		<div class="row">
			<div class="col-md-12 text-center nouv-title-style " >Zoom sur les nouveautés</div> 
		</div><br><br>
		<div class="row">
			<div class="col-md-4 animboxnouv" >
				 <div class="box text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, nisi sunt. Eum perferendis facere quidem, aperiam architecto reiciendis et nostrum quos, tempore id laudantium, beatae error possimus doloremque dolorem eveniet.</div>
			</div> 
			<div class="col-md-4 animboxnouv" ><div class="box text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda autem eaque rem reiciendis debitis excepturi? Consequuntur quidem fuga officia excepturi, natus qui voluptatibus quo tempore non vitae id vel ducimus.</div> </div> 
			<div class="col-md-4 animboxnouv" ><div class="box text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, molestiae dolorem quo illum incidunt nobis rerum! Minima maxime tempora modi sit, quam, sint praesentium fuga harum architecto nihil nemo alias!</div> </div> 
		</div>
	</div>
</div>
<!-- -------------------------------------------- nouveautés END ----------------------------------------------   -->
<!-- -------------------------------------------- promotions BEGIN ----------------------------------------------   -->
<div class="promo">
	<div class="container "><br>
		<div class="row">
			<div class="col-md-12 text-center nouv-title-stylepromo" >Zoom sur les promotions</div> 
		</div><br><br>
		<div class="row">
			<div class="col-md-4 animbox"><div class="boxpromo text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam mollitia asperiores enim voluptas soluta. Vero nam nisi obcaecati provident officia neque accusantium, reprehenderit veniam praesentium. Delectus veniam pariatur dolorum! </div> </div>
			<div class="col-md-4 animbox"> <div class="boxpromo text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam mollitia asperiores enim voluptas soluta. Vero nam nisi obcaecati provident officia neque accusantium, reprehenderit veniam praesentium. Delectus veniam pariatur dolorum! </div></div>
			<div class="col-md-4 animbox"> <div class="boxpromo text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam mollitia asperiores enim voluptas soluta. Vero nam nisi obcaecati provident officia neque accusantium, reprehenderit veniam praesentium. Delectus veniam pariatur dolorum! </div></div> 
		</div>
	</div>
</div>

<!-- -------------------------------------------- promotions  END ----------------------------------------------   -->
<!-- -------------------------------------------- comments BEGIN ----------------------------------------------   -->
<div class="new">
	<div class="container "><br>
		<div class="row">
			<div class="col-md-12 text-center new-title-style" >Zoom sur les promotions</div> 
		</div><br><br>
		<div class="row">
			<div class="col-md-4 "><div class="boxnew shadow p-3 mb-5 bg-white rounded text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam mollitia asperiores enim voluptas soluta. Vero nam nisi obcaecati provident officia neque accusantium, reprehenderit veniam praesentium. Delectus veniam pariatur dolorum! 
					<img class="img-bigger" src="../images/c2.png" alt="shirt">
				</div>
			</div>
			<div class="col-md-4 "> <div class="boxnew shadow p-3 mb-5 bg-white rounded text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam mollitia asperiores enim voluptas soluta. Vero nam nisi obcaecati provident officia neque accusantium, reprehenderit veniam praesentium. Delectus veniam pariatur dolorum! 
				<img class="img-bigger" src="../images/c2.png" alt="shirt">
			</div></div>
			<div class="col-md-4 "> <div class="boxnew shadow p-3 mb-5 bg-white rounded text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam mollitia asperiores enim voluptas soluta. Vero nam nisi obcaecati provident officia neque accusantium, reprehenderit veniam praesentium. Delectus veniam pariatur dolorum! 
				<img class="img-bigger" src="../images/c2.png" alt="shirt">
			</div></div> 
		</div><br>
	</div>
</div>

<!-- -------------------------------------------- comments  END ----------------------------------------------   -->


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
	<!-- ------------------------------------------ JQUERY BEGIN ----------------------------------------------   -->
	<script>
		$('.cont').click(function() {
			$('html,body').animate({
				scrollTop : $('#contactref').offset().top
			},1000);
		})
		

		$(window).scroll(function () {
			$('.animbox').each(function () {
				var imagePos = $(this).offset().top;
				var imageHeight = $(this).height();
				var topOfWindow = $(window).scrollTop();

				if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
					$('.animbox').addClass("boxanim");
					$('.promo').addClass("sectionanim");
				}
			});
		});

		$(window).scroll(function () {
			$('.animboxnouv').each(function () {
				var imagePos = $(this).offset().top;
				var imageHeight = $(this).height();
				var topOfWindow = $(window).scrollTop();

				if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
					$('.animboxnouv').addClass("boxanim");
					$('.nouvsection').addClass("sectionanim");
				}
			});
		});

		//vitesse de caroussel 
		$('.carousel').carousel({
				interval: 300 
		});

		//red effect animation 
		function redEffectAnimation()
		{
			document.getElementById("spaneffectanim").classList.add('redeffectanimation');
		}
	</script>
	<!-- ------------------------------------------ JQUERY BEGIN ----------------------------------------------   -->
</body>
</html>