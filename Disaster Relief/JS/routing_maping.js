
var lat;
var lon;

if(!navigator.geolocation){
	console.log("Your browser doesnt support geolocaton feature!")
} else {	
	navigator.geolocation.getCurrentPosition(getposition)
}

function getposition(position){
    console.log(position)
    lat = position.coords.latitude;
    lon = position.coords.longitude;
}