

<body>
	
	    	<div class="container-fluid mb-5">
	    		<div class="fixed-top-style fixed-top">
					<nav class="navbar navbar-expand-xl navbar-dark wow slideInLeft">
						<a href="index.html" class="navbar-brand">ITIG Don Bosco</a>
						<button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarText"  aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fas fa-bars"></i>
							<!--span class="navbar-text">MENU</span-->
						</button>
						

						<div class="collapse navbar-collapse" id="navbarText">
							<!--ul class="navbar-nav mr-auto mt-2 mt-lg-0"-->
							<ul class="navbar-nav ml-auto mt-2 mt-lg-0 nav-pills">
								<li class="nav-item ">
									<a href="<?=site_url();?>"class="nav-link "><i class="fa fa-home"></i> ACCUEIL <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a href="<?=site_url().'/'.'education';?>" class="nav-link"><i class="fa fa-graduation-cap "></i>EDUCATION</a>
								</li>
								<li class="nav-item">
									<a href="<?=site_url().'/'.'galerie';?>" class="nav-link active"><i class="fa fa-database"></i> GALERIE</a>
								</li>
								<li class="nav-item">
									<a  href="#" class="nav-link"><i class="fa fa-bullhorn"></i> NEWS</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link"><i class="fa fa-ship"></i> INFRASTRUCTURE</a>
								</li>
								<!--li class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-rss-square" ></i> ESPACE AEDB</a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Repertoire</a>
										<a href="#" class="dropdown-item">S'identifier</a>
									</div>
								</li-->
								<li class="nav-item">
									<a href="#" class="nav-link"><i class="fa fa-rss-square" ></i> ESPACE AEDB</a>
								</li>
								<li class="nav-item"> 
									<a href="#" class="nav-link"><i class="fa fa-globe"></i> BIBLIOTHEQUE</a>
								</li>

							</ul>
							
						</div>
					</nav>
				</div>
		    </div>


<div class="galerie-overlay mt-5">
	<div class="white-color-overlay">

  	<section id="callaction" class="home-section paddingtop-40 pt-5 white-color-overlay">	
        <div class="container">

			<div class="row">
					<div class="col-md-12">
						<div class="callaction white-color-overlay">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h1>Etes vous eleve et vous desirez faire un meilleur choix?</h1>
									<p>ITIG vous organise un test d'orientation chaque fois que vous vous inscrivez</p>
									</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wow lightSpeedIn" data-wow-delay="0.1s">
										<div class="cta-btn">
										<a href="#" class="btn btn-skin  w-100">consultez le programme</a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>	



 <section id="service" class="hero-body nopadding px-3">
	
			<h1 class="text-primary section-organisee ml-1 mr-1">Evenement communautaire</h1>
	      	<p class="text-dark mb-5 ml-4 mr-4">_____.__vous pouvez aussi contribuer a travers l'espace AEDB</p>
	      	<p>Appuyez sur n'importe quel image pour voir les descriptions et commentaire des autres</p>
	      
		        <div class="row bg-light-white pt-5">
					
					<?php
					$i=1;

					while ($i < 22) {
						# code...
						?>
							<div class="col-6 col-md-2 pb-5">
								<img class="img-thumbnail img-responsive" src="<?=base_url().'assets/img/galerie/2017/6e/Elo/'.$i.'.jpg';?> ">
							</div>
						<?php
						$i++;
					}

					?>

				</div>
	</section>
	
	</div>

</div>