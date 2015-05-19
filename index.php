		<?php
		    require_once("./menu.php");		        
		    $menu = affiche_menu();
		?>
<html>
	<link href="style.css" rel="stylesheet"/>
	<head>
		<meta charset = 'UTF-8'>
		<title>Mbuji-mayi</title>
	</head>
	<body>
		
		<div id="conteneur">
		<h1> Mbuji-Mayi </h1>
		<?php		
		echo $menu;		
		?>
		
		<div id="Contenu">
		
			<div id="contenu1">
				<article class="gauche">
					<p class="pre"> Mbuji-Mayi, aussi écrit Mbujimayi (appelée Bakwanga jusqu'en 1966), est une ville de la République démocratique du Congo, 
					sur la rivière Mbuji-mayi (l'eau de la chèvre). Les origines de la ville remonte a 1913, mais elle fut fondée en 1914.
					Elle est la capitale de la province du Kasaï-Oriental, située sur la rive droite de la rivière Mbuji-mayi. 
					La ville a depuis les années 1980 multiplié sa population par 3. Ce par l'afflux de Kasaïens du Katanga au début des années 1990,
					et également par l'engouement anarchique des exploitations de diamants, devenus le premier produit d'exportation du pays depuis la crise minière au Katanga.
					La MIBA ayant fait faillite à cause de la mauvaise gestion étatique, l'extraction du diamant se fait en général clandestinement.
					La ville est notamment l'un des principaux centres de l'UDPS, Étienne Tshisekedi étant originaire de la région.
					Elle est désormais la deuxième ville du pays pour ce qui est de la population, devant Lubumbashi.
					La construction d´une ligne de chemin de fer jusqu'à Kananga a été proposée.
					Bakwanga fut de 1960 à 1962 la capitale de l'État sécessionniste du Sud-Kasaï.<br />
				</p>
				<p>
				La ville est organisée en 5 communes : Bipemba, Dibindi, Diulu, Kanshi, Muya L’espace urbain de Mbujimayi est limité par trois rivières constituant les limites naturelles de la ville :<br />
				1. La rivière Muya au nord,<br />
				2. La rivière Kanshi au sud,<br />
				3. Et la Mbujimayi à l’Est et<br />
				4. A l’ouest par une ligne joignant la confluence Kanshi Nzaba à celle de la Muya et Bipemba<br />
					</p>			
				</article>
				<div class="droite">
										<section id="slideshow">
						
					<div class="container">
						<div class="c_slider"></div>
							<div class="slider">
								<figure>
									<img src="images/bj.jpg" alt="" width="475" height="490" />
									<figcaption>congo</figcaption>

								</figure>
								<figure>
									<img src="images/bj3.jpg" alt="" width="475" height="490" />
									<figcaption>mbuji-mayi</figcaption>
								</figure>
								<figure>
									<img src="images/bj4.jpg" alt="" width="475" height="490" />
									<figcaption>like</figcaption>
								</figure>
							</div>
						</div>
							
						<span id="timeline"></span>
					</section>
				</div>
			</div>
		</div>
		<footer> <center>&copy; -2015 henock-hit/...R-zed</center></footer>
	</div>		
	</body>
		
</html>