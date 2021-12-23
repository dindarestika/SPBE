@extends('layouts.homepage')
@section('content')
<section class="features" id="features">
        <div class="container"><b>Map Wifi Kota Surakarta</b>
          <!-- <h2 class="text-center">Map Wifi Kota Surakarta</h2> -->
		      <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var map = L.map('map').setView([-7.560398787384106, 110.82521243826086], 12);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 22,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
}).addTo(map);


//L.marker([-7.560398787384106, 110.82521243826086], {icon: wifiIcon}).addTo(map);

$( document ).ready(function() {
    $.getJSON('/titik', function(data){
		$.each(data, function(index){
			//alert(data[index].id)
			var wifiIcon = L.icon({
				iconUrl: "{{asset('home/assets/img/wifi.png')}}",
				iconSize:     [30, 30], // size of the icon
				shadowSize:   [50, 64], // size of the shadow
				iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
				shadowAnchor: [4, 62],  // the same for the shadow
				popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
			});
			
			L.marker([parseFloat(data[index].latitude),parseFloat(data[index].longitude)], {icon: wifiIcon}).addTo(map).bindPopup("<b>" + data[index].nama_wifi + "</b>" + "</br>" + data[index].alamat_wifi);
			
		});
	});
});

</script>
@stop
