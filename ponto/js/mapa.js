function initMap(){
	var map = new google.maps.Map( document.getElementById('mapa'),
		{ center: {lat: -34.397 , lng: 150.644},
		zoom: 6
		}
	);

	var infoWindow = new google.maps.InfoWindow({map:map});

	if( navigator.geolocation ){
		navigator.geolocation.getCurrentPosition(function(position){
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};

			infoWindow.setPosition(pos);
			infoWindow.setContent('Localização achada!');

		},
		function(){
			handleLocationError(true, infoWindow , map.getCenter());
		});
	}else{
		handleLocationError(false, infoWindow, map.getCenter());
	}

	function hanleLocationError(browserHasGeolocation, infoWindow, pos){
		infoWindow.setPosition(pos);
		infoWindow.setContent(browserHasGeolocation ? 
			'Erro: Serviço de Geolocalização falhou!' :
			'Erro: Seu navegador não suporta Geolocalização.');
	}

}