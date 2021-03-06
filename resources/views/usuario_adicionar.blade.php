<?php
    include 'controllerUser.php';
?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    	<title>Restaurante Alemã</title>
    	<link rel="icon" href="images/logo.png">
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
	  	<div id="Welcome">
	  		<!---Start navigation Bar -->
	    	<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
		 		<a class="navbar-brand" href="#Welcome">
    				<img src="images/logo.png" width="50" height="50" class="d-inline-block" alt=""> Culinária Alemanha
		 		</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		 		</button>
			  	<div class="collapse navbar-collapse" id="navbarText">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item">
			        		<a class="nav-link" href="#Welcome">Tradicional</a>
			      		</li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Restaurant">Restaurante</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Menu">Pais</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Cultura">Cultura</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#OurLocation">Localização</a>
					    </li>
                        
					    <li class="nav-item">
					    	
					    	<a href="index.php" class="language" rel="en-En"><img src="images/alemanha.ico" class="flag" alt="Alemanha" /></a>
					    </li>
                        
                         <li class="nav-item">
					    	<a class="nav-link" href="#Reserva">Resevar Hotel</a>
					    </li>
                        
				    </ul>
				</div>
			</nav>
			<!--- End Navigation Bar -->
			<!--- Start Carousel -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
				    	<img class="d-block w-100 img-fluid img-slider" src="images/slider1.jpg" alt="First slide">
				    	<div class="carousel-caption">
						    <h2>Alemanha capião da copa do mundo de 2014 - TETRA!</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/slider2.jpg" alt="Second slide">
				      	<div class="carousel-caption">
						    <h2>Traditional Cozinha alemã</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="images/slider3.jpg" alt="Third slide">
				      	<div class="carousel-caption">
						    <h2>Selecione o Produto</h2>
							<p>...</p>
						</div>
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
			<!--- End of Carousel -->
			<!--- Restaurant-->
		<div class="container">
		 	<div class="row" id="Restaurant">
	    		<div class="col navMenu">
	     		 	<h2 class="text-center" >~ Restaurante ~</h2>
	    		</div>
  			</div>
  			<div class="row bg-light" >
  				<div class="col-md-6">
  					<h3>Localização</h3>
  					<p>Obrigada por apareceres. Somos o último restaurante Alemã autêntico em Minique, servindo deliciosos pratos Alemã preparados pelos melhores chefs. Leva apenas alguns minutos para navegar pelo nosso site e confira nosso cardápio. Esperamos que em breve você se junte a nós para uma excelente experiência culinária Alemã.</p>
  					<h5>Uma Experiência Única</h5>
  					<p>Obrigada por apareceres em uns dos nosso restaurante Alemã autêntico em Minique, servindo deliciosos pratos com a melhor desgustação Alemã preparados pelos melhores chefs, Leva apenas alguns minutos para serviro nosso cardápio. Esperamos que em breve que você se junte a nós para uma excelente experiência culinária Alemã.</p>
  				</div>
  				<div class="col-md-6" data-aos="fade-up">
  					<img class="img-fluid" src="images/location.jpg">
  				</div>
  			</div>
  			<div class="row bg-light"><br></div>
  			<div class="row bg-light">
  				<div class="col-md-6 order-md-1 order-2" data-aos="fade-up">
  					<img class="img-fluid " src="images/cuisine.jpg">
  				</div>
  				<div class="col-md-6 order-md-12 order-1">
  					<h3>Cozinha</h3>
  					<p>A cozinha alemã uma culinária que não admite desperdício. Ao longo dos tempos a Alemanha passou por situações difíceis e climas rigorosos. Assim todos os alimentos precisavam ser aproveitados e conservados da melhor forma. Salsichas, queijo, geléias e embutidos em geral são frutos deste desenvolvimento. Conforme a estação a culinária alemã se completa com vinhos leves, em geral os brancos e cervejas.
.</p>
  					<h5>Uma Experiencia de Degustação</h5>
  					<p>Este é uma lugar excepcional, com comida Saborosa, preparado com habilidade e paciência. Os garçons são extremamente profissionais e educado, o lugar e perfeito para almoço e jantar com a familia, faça a sua experiencia com nosco.</p>
  				</div>
  			</div>
  			<!--- End of Restaurant -->
  			<!--- Start of Menu-->
			<div class="row" id="Menu">
				<div class="col navMenu">
	     		 	<h2 class="text-center" >~ PAIS ~</h2>
				</div>
			</div>
			<div class="row bg-light">
				<div class="col-md-4" data-aos="slide-up">
					<div class="card view zoom">
  						<img class="card-img-top img-fluid " src="images/meat-menu.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ Alemanha Menu ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">História</li>
							    <li class="list-group-item">Geografia</li>
							 	<li class="list-group-item">Demografia</li>
							 	<li class="list-group-item">Cultura</li>
							 	<li class="list-group-item">Politica</li>
							</ul>
					  	</div>
					</div>
				</div>
				<div class="col-md-4" data-aos="slide-up">
					<div class="card">
  						<img class="card-img-top img-fluid " src="images/fish-menu.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ Transporte Menu ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">a Deutsche Bahn AG- Empresa de trem</li>
							    <li class="list-group-item">a Deutsche Bahn- onibus</li>
							 	<li class="list-group-item">Air Berlin - aviao</li>
							 	<li class="list-group-item">MSC Cruzeiros</li>
							 	<li class="list-group-item">Germanwings</li>
							</ul>
					  	</div>
					</div>
				</div>
				<div class="col-md-4" data-aos="slide-up">
					<div class="card">
  						<img class="card-img-top img-fluid" src="images/menu-vegetarian.jpg">
					  	<div class="card-body">
					  		<h5 class="card-title">~ Bebida Menu ~</h5>
					    	<ul class="list-group list-group-flush">
							    <li class="list-group-item">Glühwein</li>
							    <li class="list-group-item">A cervejaria Erdinger Weissbier Privatbrauerei</li>
							 	<li class="list-group-item">Radeberg</li>
							 	<li class="list-group-item">Spätburgunder</li>
							 	<li class="list-group-item">Mit KohlensÄure</li>
							</ul>
					  	</div>
					</div>
				</div>
			</div>
			<!--- End of Menu -->
			<!--- Start of Reservation-->
			<div class="row" id="Cultura">
				<div class="col navMenu">
	     		 	<h2 class="text-center">~ Cultura ~</h2>
				</div>
			</div>
			<div class="row">
				<div class=" col-lg-12 reserve-container" data-aos="fade-up">
					<img class="img-fluid " src="images/reserve.jpg">
					<img class="img-fluid " src="images/reserve1.jpg">
					<div class="reserve-text col-lg-12 ">
						<h1 class="text-center"></h1>
						<div class="row">
							<div class="col-6">
							   	<h2 class="text-center"></h2>
							    <h5 class="text-center"></h5>
							</div>
							<div class="col-6">
							    <h2 class="text-center"></h2>
							    <h5 class="text-center"></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row bg-light">
				<div class="col">
					<form>
						<div class="form-row">
						  	<div class="form-group col-6">
						  		<h3></h3>
						  		
					 	</div>
						<div class="row">
					  		
					  			<button type="submit" class="btn btn-secondary btn-block">Aproveite uma oportunidade</button>
					  		</div>
					  	</div>
					</form>
				</div>
			</div>
			<!--- End of Reserve -->
            
			<!--- Start of RESERVA -->
			<div class="row" id="Reserva">
				<div class="col navMenu">
					<h2 class="text-center">~ RESERVA ~</h2>
				</div>
			</div>
			<div class="row">
				 
<div class="container-fluid">
                <form method="POST" action ="index.php">


                <!-- CAMPO first name --> 
                <div class="form-group">
                <label for="first_name">Primeiro nome:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp" placeholder="Digite seu primeiro nome">
                <small id="firstNameHelp" class="form-text text-muted">Preencha apenas com primeiro nome.</small>
                </div>

                <!-- CAMPO last name --> 
                <div class="form-group">
                <label for="last_name">Último nome:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp" placeholder="Digite seu último nome">
                <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com último nome.</small>
                </div>

                <!-- CAMPO EMAIL --> 
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite email">
                <small id="emailHelp" class="form-text text-muted">Não compartilhe e-mail com ninguém.</small>
                </div>



                <!-- SENHA -->
                <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" name="password" id="password" placeholder="Senha">
                </div>


                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                </form>


                <table border='1'>
                <form action="" method="POST">

                </form>
                </table>

                </div>
                

			</div>
			<!--- End RESERVA -->
            
            
            
			<!--- Start of Our Location -->
			<div class="row" id="OurLocation">
				<div class="col navMenu">
					<h2 class="text-center">~ Localização ~</h2>
				</div>
			</div>
			<div class="row">
				<div id="map" class="col-md-9 map"></div>
				<div class="col-md-3">
					<h3>Endereço:</h3>
					<p>Charlottenstraße 56,  10117 Berlin, Allemagne </p>
					<h3>Email:</h3>
					<p>brasil@alemanha.com</p>
				</div>
			</div>
			<!--- End of Our Location -->
			<div class="row footer bg-light">
				<div class="col">
					<p class="text-center">Follow us: <a class="social-icon" href="https://www.facebook.com/rubiktechnologiesShpk/"><i class="fab fa-facebook"></i></a> <a class="social-icon" href="https://www.instagram.com/rubiktechnologies/"><i class="fab fa-instagram"></i></a></p>
				</div>
				<div class="col">
					<p class="text-center">Copyright &copy; 2018</p>
				</div>
				<div class="col">
					<p class="text-center">Powered by: <a href="https://rubik-technologies.com/">Rubik Technologies</a></p>
				</div>
			</div>
		</div>
		<footer class="container">
			<div class= "row only-mobile">
				<div class="col-6">
					<a class="btn btn-primary btn-block text-center" href="tel:+355698889452"><i class="fa fa-phone" aria-hidden="true"></i> Call</a>
				</div>
				<div class="col-6">
					<a class="btn btn-success btn-block text-center" href="https://api.whatsapp.com/send?phone=+355698889452"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
				</div>
			</div>
		</footer>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/smooth-scroll.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script type="text/javascript" src="js/image-effect.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFZjOV0KA68G2YAh-rn7I3qKqCQEh_Ja0&callback=myMap">
	    </script>



  	</body>
</html>
