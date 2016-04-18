var myCenter=new google.maps.LatLng(7.087, 125.63193);

function initialize () {
	var mapProp = {
	  center:myCenter,
	  zoom:16,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	var map=new google.maps.Map(document.getElementById("map"),mapProp);
	// var image  = 'http://localhost/mmfc-site/wp-content/themes/mmfc/img/mapmarker.png';
	var image  = 'http://mmfc-staging.greyandgreentech.com/wp-content/themes/mmfc/img/mapmarker.png';
	var marker = new google.maps.Marker({
	  position:myCenter,
	  icon:image,
		animation:google.maps.Animation.BOUNCE
	});
	marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
