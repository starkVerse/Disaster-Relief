<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="/WT_Project/CSS/user_routing.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
</head>

<body>
    <!-- <script src="/WT_Project/JS/routing_maping.js"></script>  -->
    <div class="header">
        <div class="logo">Disaster Relief</div>
        <a href="user_profile.php" class="signin-register"><?php echo $_SESSION['UN'] ?></a>
    </div>
    <nav>
        <div class="container">
            <ul>
                <li><a href="user_homepage.php">Home</a></li>
                <li><a href="user_disaster_forecast.php">Disaster Forecast</a></li>
                <li><a href="user_AlertnUpdates.php">Alerts and Updates</a></li>
                <li><a href="user_volunteer.php">Volunteer Tasks</a></li>
            </ul>
        </div>
    </nav>
    <?php
    if (isset($_GET['id'])) {
        include("connection.php");
        $serial_number = $_GET['id'];
        $query = "select * from accepted_posts where serial_no=$serial_number";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $lat = $row['latitude'];
        $lon = $row['longitude'];
        // echo $lat;
        // echo $lon;
        // header("Location:admin_pending_Posts.php");
    }
    ?>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script>
        var lat2 = <?php echo $lat; ?>;
        var lon2 = <?php echo $lon; ?>;
        var lat;
        var lon;

        if (!navigator.geolocation) {
            console.log("Your browser doesnt support geolocaton feature!")
        } else {
            navigator.geolocation.getCurrentPosition(getposition)
        }

        function getposition(position) {
            var blueIcon = L.icon({
                iconUrl: 'WT_Project\images\blue.png',
                shadowUrl: 'WT_Project\images\shadow.png',
                iconSize: [38, 95], // size of the icon
                shadowSize: [50, 64], // size of the shadow
                iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62], // the same for the shadow
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            var redIcon = L.icon({
                iconUrl: 'WT_Project\images\red.png',
                shadowUrl: 'WT_Project\images\shadow.png',
                iconSize: [38, 95], // size of the icon
                shadowSize: [50, 64], // size of the shadow
                iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62], // the same for the shadow
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            console.log(position);
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            L.Routing.control({
                waypoints: [
                    L.latLng(lat2, lon2),
                    L.latLng(lat, lon)
                ],
                addWaypoints: false,
                draggableWaypoints: false,
                createMarker: function(i, start, n) {
                    if (i == 0) {
                        m_icon = blueIcon;
                    } else {
                        m_icon = redIcon;
                    }
                    return L.marker(start.latLng, {
                        draggable: false,
                        bounceOnAdd: false,
                        bounceOnAddOptions: {
                            duration: 1000,
                            height: 800,
                            function() {
                                (bindPopup(myPopup).openOn(map))
                            }
                        },
                        icon: m_icon,
                    })
                }.addTo(map)
            })
        }

        var map = L.map('map').setView([23.840058810555206, 90.3575901199828], 12);
        mapLink = "<a href='http://openstreetmap.org'>OpenStreetMap</a>";
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: 'Leaflet &copy; ' + mapLink + ', contribution',
            maxZoom: 25
        }).addTo(map);
    </script>
</body>

</html>