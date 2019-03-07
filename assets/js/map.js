
function initMap() {
    var map = L.map('map').setView([45.7563851, 4.8248167], 12);
    var osmLayer = L.tileLayer('http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '© <a href= »http://osm.org/copyright »>OpenStreetMap</a> contributors',
        maxZoom: 19
    });
    map.addLayer(osmLayer);
    // var bennes= $.getJSON(parseJSON('{{ link }}'),function(dataBennes) {
    //     var iconeBennes = L.icon({
    //         iconUrl: './../build/glassLogo.png',
    //         iconSize: [25, 25]
    //     });
    //     L.geoJson(dataBennes, {
    //         pointToLayer: function (features, latlng) {
    //             var marker = L.marker(latlng, {icon: iconeBennes});
    //             return marker;
    //         }
    //     }).addTo(map);
    // });
    var baseLayers = {
        'OpenStreetMap': osmLayer,
    };
    L.control.layers(baseLayers).addTo(map);

    var geoSuccess = function (position) { // Ceci s'exécutera si l'utilisateur accepte la géolocalisation
        startPos = position;
        userlat = startPos.coords.latitude;
        userlon = startPos.coords.longitude;
        console.log("lat: " + userlat + " - lon: " + userlon);
    };
    var geoFail = function () { // Ceci s'exécutera si l'utilisateur refuse la géolocalisation
        console.log("refus");
    };
    // La ligne ci-dessous cherche la position de l'utilisateur et déclenchera la demande d'accord
    navigator.geolocation.getCurrentPosition(geoSuccess, geoFail);
}

window.onload = function(){
    initMap();
};