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
        }

    }).addTo(map);
    var markersCluster = new L.MarkerClusterGroup({
        iconCreateFunction: function(cluster) {
            return L.divIcon({
                html: cluster.getChildCount(),
                className: 'mycluster',
                iconSize: null
            });
        }
    });
    var marker = geojson.getLayers();

    for ( var i = 0; i < marker.length; ++i )
    {

        var  myIcon = L.icon({
            iconUrl: "build/img/glassLogo.png"
        });

        //   var marker = L.marker(latlng,{icon:myIcon});


        // Detail du Popup

            var popup ='<b><u>Description de la benne</u></b><br>'
                + '<b>Adresse : </b>' + marker[i].feature.properties.adresse + '<br>'
                + '<b>Commune:</b>' + marker[i].feature.properties.commune + '<br>'
                + '<b>Code commune : </b>' + marker[i].feature.properties.code_com + '<br>'
                + '<b>Capacité : La poubelle</b>' + '<br>'
            ;


        var m = L.marker( [marker[i]._latlng.lat, marker[i]._latlng.lng] , {icon: myIcon} )
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
          //  var marker = L.marker([e.latitude, e.longitude]).bindPopup('Vous êtes ici :)');
            var circle = L.circle([e.latitude, e.longitude], e.accuracy/2, {
                weight: 1,
                color: 'green',
                fillColor: '#cacaca',
                fillOpacity: 0.2
            });
        //    map.addLayer(marker);
            map.addLayer(circle);
        })
        .on('locationerror', function(e){
            console.log(e);
            alert("Location access denied.");
        });

    /*map.on('click', onMapClick);*/
};

