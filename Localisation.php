		<?php
		    require_once("./menu.php");		        
		    $menu = affiche_menu();
		?>
<html>
	<link href="style.css" rel="stylesheet"/>
	<head>
		<title>Mbuji mayi</title>

		<script type="text/javascript"
     	 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFUf4rGDZYps8qBJBig9a9HJzfV7v9jsw&sensor=false&libraries=panoramio">
    	</script>
   		 <script type="text/javascript">
 		 function initialize() {
            var mapOptions = {
              zoom: 8,
              center: new google.maps.LatLng(-6.136985, 23.58983),
               mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var carte = new google.maps.Map(document.getElementById('Contenu'),
                mapOptions);
            var marqueur = new google. maps. Marker( {
                position: new google. maps. LatLng(-6.136985, 23.58983) ,
                animation:google.maps.Animation.BOUNCE
                } ) ;
            marqueur.setMap(carte);
            var infowindow = new google.maps.InfoWindow({
          content:'<h3>Mbuji-mayi</h3> carte generale '

           }) ;

            infowindow.open(carte,marqueur);       
          }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>




	</head>
	<body>
		
		<div id="conteneur">
		<h1> Mbuji-Mayi </h1>
		<?php		
		echo $menu;		
		?>
		
		<div id="Contenu">
		
			
		</div>
		<footer> <center>&copy; -2015 henock-hit/...R-zed </center></footer>
	</div>		
	</body>
		
</html>