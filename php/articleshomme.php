<!DOCTYPE html>
<html>
<head>
	<title>Articles [Homme]</title>
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
    <link rel="stylesheet" href="../css/articles_style.css" type="text/css">
</head>

<body>
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
                <?php 
                session_start();
                if(sizeof($_SESSION)>0)
				{ ?>
							<ul class="navbar-nav col-md-7">
								<li class="nav-item ">
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
							<ul class="col-md-5 navbar-nav " style="text-align: right">
                            <!-- il y a  de session -->  
                            <li>
                            <a class="nav-link" href="#" >
                <?php
                    echo( $_SESSION["prenom"].' ');
                    echo( $_SESSION["nom"]);
                ?>
							</a></li>
							
							<li class="nav-item" >
                                <a class="nav-link"  href="mesachats.php" >Mes achats</a>
                            </li>
                            <!-- DEONNEXION-->
                            <li class="nav-item" >
                                <a class="nav-link" style="color : #BE3144" href="deconnexion.php" >Déconnexion</a>
                            </li>
                <?php
                }else {  
				?>
							<ul class="navbar-nav col-md-9">
								<li class="nav-item ">
									<a class="nav-link" href="../php/index.php">Accueil <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item dropdown active">
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

<form name="f" method="post" action="mesachats.php" >
    
    <div class="new">
        <div class="container "><br><br><br>
            
            <div class="row">
                <div class="col-md-12 text-center new-title-style" >Les Articles des Hommes</div>
            </div><br>
            <div class="row">
                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                            <img class="img1 product-image" src="../images/article/homme/img-11.jpg" alt="shirt">
                            <img class="img2 imgbox" src="../images/article/homme/img-12.jpg" alt="shirt">
                        
                            <?php 
                            if(sizeof($_SESSION)>0)
                            { ?>
                                <div onclick="addcartitems('Veste 1','51.00',this); nbrachats();">
                                    <a ><i class="fa fa-shopping-cart"></i></a>     
                                </div>

                                <ul class="d-none" name="cartitems" id="cartitems">
                                </ul>
                                
                            <?php
                            }?>                   
                        </div>
                        <div class="content">
                            <h4>Veste 1</h4>
                            <h6><b>$51.00</b></h6>
                        </div>   
                    </div>
                </div>
                    
                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                            <img class="img1 product-image" src="../images/article/homme/img-3.jpg" alt="shirt">
                            <img class="img2 imgbox" src="../images/article/homme/img-4.jpg" alt="shirt">
                            <span class="product-new-label">NOUVEAU</span>

                            <?php 
                            if(sizeof($_SESSION)>0)
                            { ?>
                                <div onclick="addcartitems('T-Shirt 1','63.00',this); nbrachats();" >
                                    <a ><i class="fa fa-shopping-cart"></i></a>     
                                </div>

                                
                            <?php
                            }?>               
                        </div>
                        <div class="content">
                            <h4>T-Shirt 1</h4>
                            <h6><b>$63.00</b> <s style="color: grey;">$75.00</s></h6>
                        </div>   
                    </div>
                </div>

                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                                <img class="img1 product-image" src="../images/article/homme/img-15.jpg" alt="shirt">
                                <img class="img2 imgbox" src="../images/article/homme/img-16.jpg" alt="shirt">
                            
                                <?php 
                                if(sizeof($_SESSION)>0)
                                { ?>
                                    <div onclick="addcartitems('T-Shirt 2','53.00',this); nbrachats();" >
                                        <a ><i class="fa fa-shopping-cart"></i></a>     
                                    </div>

                                    
                                <?php
                                }?>               
                        </div>
                        <div class="content">
                            <h4>T-Shirt 2</h4>
                            <h6><b>$53.00</b></h6>
                        </div>   
                    </div>
                </div>

                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                                <img class="img1 product-image" src="../images/article/homme/img-23.jpg" alt="shirt">
                                <img class="img2 imgbox" src="../images/article/homme/img-24.jpg" alt="shirt">
                                <span class="product-new-label">NOUVEAU</span>
                                <?php 
                                if(sizeof($_SESSION)>0)
                                { ?>
                                    <div onclick="addcartitems('Veste 2','57.00',this); nbrachats();" >
                                        <a ><i class="fa fa-shopping-cart"></i></a>     
                                    </div>

                                   
                                <?php
                                }?>                  
                        </div>
                        <div class="content">
                            <h4>Veste 2</h4>
                            <h6><b>$57.00</b> <s style="color: grey;">$63.00</s></h6>
                        </div>   
                    </div>
                </div>   
                
            </div>
            <div class="row">
                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                                <img class="img1 product-image" src="../images/article/homme/img-25.jpg" alt="shirt">
                                <img class="img2 imgbox" src="../images/article/homme/img-26.jpg" alt="shirt">
                                <span class="product-new-label">NOUVEAU</span>
                                <?php 
                                if(sizeof($_SESSION)>0)
                                { ?>
                                    <div onclick="addcartitems('Veste 3','70.00',this); nbrachats();" >
                                        <a ><i class="fa fa-shopping-cart"></i></a>     
                                    </div>

                                   
                                <?php
                                }?>                     
                        </div>
                        <div class="content">
                            <h4>Veste 3</h4>
                            <h6><b>$70.00</b> <s style="color: grey;">$82.00</s></h6>
                        </div>   
                    </div>
                </div>

                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                                <img class="img1 product-image" src="../images/article/homme/img-111.jpg" alt="shirt">
                                <img class="img2 imgbox" src="../images/article/homme/img-211.jpg" alt="shirt">
                            
                                <?php 
                                if(sizeof($_SESSION)>0)
                                { ?>
                                    <div onclick="addcartitems('Veste 4','59.00',this); nbrachats();" >
                                        <a ><i class="fa fa-shopping-cart"></i></a>     
                                    </div>

                                   
                                <?php
                                }?>                     
                        </div>
                        <div class="content">
                            <h4>Veste 4</h4>
                            <h6><b>$59.00</b></h6>
                        </div>   
                    </div>
                </div>

                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                                <img class="img1 product-image" src="../images/article/homme/img-300.jpg" alt="shirt">
                                <img class="img2 imgbox" src="../images/article/homme/img-400.jpg" alt="shirt">
                            
                                <?php 
                                if(sizeof($_SESSION)>0)
                                { ?>
                                    <div onclick="addcartitems('T-Shirt 3','62.00',this); nbrachats();" >
                                        <a ><i class="fa fa-shopping-cart"></i></a>     
                                    </div>
                                <?php
                                }?>                     
                        </div>
                        <div class="content">
                            <h4>T-Shirt 3</h4>
                            <h6><b>$62.00</b></h6>
                        </div>   
                    </div>
                </div>

                <div class="col-md-3" >
                    <div class="produit">
                        <div class="bg-white rounded"  >
                                <img class="img1 product-image" src="../images/article/homme/img-7.jpg" alt="shirt">
                                <img class="img2 imgbox" src="../images/article/homme/img-8.jpg" alt="shirt">
                            
                                <?php 
                                if(sizeof($_SESSION)>0)
                                { ?>
                                    <div onclick="addcartitems('T-Shirt 4','69.00',this); nbrachats();" >
                                        <a ><i class="fa fa-shopping-cart"></i></a>     
                                    </div>
                                <?php
                                }?>                     
                        </div>
                        <div class="content">
                            <h4>T-Shirt 4</h4>
                            <h6><b>$69.00</b></h6>
                        </div>   
                    </div>
                </div>       

            </div><br><br>

            <?php 
            if(sizeof($_SESSION)>0)
            { ?>            
            <div class="row" >
                <div class="col-md-12 text-center" style="background-color:white"> <!-- kont mech naamel el bouton ele yab3eth el items lil cart  -->                    
                    <button class="button" onclick="totalachats(); totalnombre();">
                        <i class="fa fa-shopping-cart"></i>
                        <div style="position:absolute;right:25px;top:-8px;"id="nbrachats" > 0</div>
                    </button>
                </div>
            </div>
            <?php
            }?>   
        </div>
    </div>
    <input class="d-none" type="text" name="totalprix">
    <input class="d-none" type="text" name="totalnbr">
</form>
<!-- -------------------------------------------- article homme END ----------------------------------------------   -->

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
    var totalprix=0;
    var totalnbr=0;
    function addcartitems(clicked_id,clicked_prix,th)
    {
        document.getElementById('cartitems').innerHTML = document.getElementById('cartitems').innerHTML + "<li > <input type='hidden' name='cartitems[]' value='"+clicked_id+"<b>&nbsp;&nbsp;&nbsp;&nbsp; Prix: </b> $"+clicked_prix+"'/></li>" ;
        th.classList.add('d-none');
        totalprix=totalprix+parseInt(clicked_prix);
        totalnbr=totalnbr+1;
        //document.getElementById(clicked_id).classList.add('d-none');
    }

    function nbrachats()
    {
        document.getElementById('nbrachats').innerHTML = parseInt(document.getElementById('nbrachats').innerHTML)+1;
    }

    function totalachats()
    {
        document.f.totalprix.value=totalprix;
    }

    function totalnombre()
    {
        document.f.totalnbr.value=totalnbr;
    }

    $('.cont').click(function() {
        $('html,body').animate({
            scrollTop : $('#contactref').offset().top
        },1000);
    })
</script>
</body>
</html>