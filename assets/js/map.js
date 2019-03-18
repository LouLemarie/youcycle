window.onload = function () {
    console.log('Page chargée ');

var map = L.map('map').setView([43.610819, 3.876656], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiemFua2siLCJhIjoiY2p0NWthODUzMDU1bTN5bnZqd2syZWtjeiJ9.2BQH9higFVNhEeRDJ8kRrw'
}).addTo(map);

    geojson = L.geoJson(verre, {
        style: function (feature) {
            return feature.properties && feature.properties.style;
        },
        pointToLayer: function (feature, latlng) {
            var icon = L.icon ({
                iconUrl:"build/img/glassLogo.png",
                iconSize: [42, 45]
            });
            var markersCluster = new L.MarkerClusterGroup();
            var marker =  L.marker(latlng, {icon: icon});
            markersCluster.addLayer(marker);
            map.addLayer(markersCluster);
            marker.bindPopup('<b><u>Description de la benne</u></b><br>'
                + '<b>Commune: </b>Montpellier<br>'
                + '<b>La rue : </b>' + feature.properties.rue + '<br>'
                + '<b>Coordonnées exactes: </b>' + feature.geometry.coordinates + '<br>'
            );
            return marker ;

        }

    }).addTo(map);


    /*var popup = L.popup();
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }*/

    map.locate({setView: false, watch: false}) /* This will return map so you can do chaining */
        .on('locationfound', function(e){
            var marker = L.marker([e.latitude, e.longitude]).bindPopup('Vous êtes ici :)');
            var circle = L.circle([e.latitude, e.longitude], e.accuracy/2, {
                weight: 1,
                color: 'green',
                fillColor: '#cacaca',
                fillOpacity: 0.2
            });
            map.addLayer(marker);
            map.addLayer(circle);
        })
        .on('locationerror', function(e){
            console.log(e);
            alert("Location access denied.");
        });

    /*map.on('click', onMapClick);*/
};





