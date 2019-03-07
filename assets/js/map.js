
var iconBase = './../build/img/glassLogo.png';
var lat = 49.4412;
var lon = 1.0911;
var macarte = null;
var markerCusters;
var villes = {
    "Rouen": { "lat": 49.4412, "lon": 1.0911 },
    "Mont St Aignan": { "lat": 49.4673, "lon": 1.0806 },
    "Bois Guillaume": { "lat": 49.4728, "lon": 1.1194 },
    "Le Petit Quevilly": { "lat": 49.4239, "lon": 1.0573 },
    "Sotteville les Rouen": { "lat": 49.4173, "lon": 1.0894 }
};
// Fonction d'initialisation de la carte
function initMap() {
    var markers = [];
    macarte = L.map('map').setView([lat, lon], 11);
    markerCusters = L.markerClusterGroup();
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);
    for (ville in villes) {
        var myIcon = L.icon({
            iconUrl: iconBase,
            iconSize: [25, 25],
            iconAnchor: [25, 50],
            popupAnchor: [-3, -76],
        });
        var marker = L.marker([villes[ville].lat, villes[ville].lon], { icon: myIcon }).addTo(macarte);
        marker.bindPopup(ville);
        markerCusters.addLayer(marker);
        markers.push(marker);
    }
    var group = new L.featureGroup(markers);
    macarte.fitBounds(group.getBounds().pad(0.5));
    macarte.addLayer(markerCusters);
}
window.onload = function(){
    initMap();
};