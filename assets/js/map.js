window.onload = function () {
    console.log('Page chargée ');

    var map = L.map('map').setView([43.610819, 3.876656], 13);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiemFua2siLCJhIjoiY2p0Zm1sN2JoMGMxMzQ1bGh2eHdocWZkciJ9.RpxtpjYNa4wrJFMsxsvYhQ'
    }).addTo(map);

    L.control.layers(map, null, {position: 'topright'}).addTo(map);

    geojson = L.geoJson(verre, {
        style: function (feature) {
            return feature.properties && feature.properties.style;
        }

    });
    var markersCluster = new L.MarkerClusterGroup({
        iconCreateFunction: function(cluster) {
            return L.divIcon({
                html: cluster.getChildCount(),
                className: 'mycluster',
                iconSize: null
            });
        }
    });

    var markers = geojson.getLayers();

    for ( var i = 0; i < markers.length; ++i )
    {

        var  myIcon = L.icon({
            iconUrl: "build/img/glassLogo.png",
            iconSize: [30, 35]
        });

        //   var marker = L.marker({icon:myIcon});

        // Detail du Popup

        var popup ='<b><u>Description de la benne</u></b><br>'
            + '<b>Commune:</b> Montpellier <br>'
            + '<b>La rue : </b>' + markers[i].feature.properties.rue + '<br>'
            + '<b>Type de déchet: </b>' + markers[i].feature.properties.type + '<br>'
        ;


        var m = L.marker( [markers[i]._latlng.lat, markers[i]._latlng.lng], {icon:myIcon}  )
            .bindPopup( popup )
        ;

        markersCluster.addLayer( m );
    }

    map.addLayer( markersCluster );


    /*var popup = L.popup();
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }*/

    map.locate({setView: false, watch: false}) /* This will return map so you can do chaining */
        .on('locationfound', function(e){
            var persomarker = L.marker([e.latitude, e.longitude]).bindPopup('Vous êtes ici :)');
            var circle = L.circle([e.latitude, e.longitude], e.accuracy/2, {
                weight: 1,
                color: 'blue',
                fillColor: '#4d94b9',
                fillOpacity: 0.2
            });
            map.addLayer(persomarker);
            map.addLayer(circle);
        })
        .on('locationerror', function(e){
            console.log(e);
            alert("Location access denied.");
        });

    /*map.on('click', onMapClick);*/
};
