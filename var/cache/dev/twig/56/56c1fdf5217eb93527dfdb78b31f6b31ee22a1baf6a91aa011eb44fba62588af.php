<?php

/* js.html.twig */
class __TwigTemplate_1b628c5c3ab86b9dd1b1167014196705b8792f82df9a2c49ade0c0e9af1c956c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js.html.twig"));

        // line 1
        echo "<script>
var iconBase = './../build/img/glassLogo.png';
var lat = 49.4412;
var lon = 1.0911;
var macarte = null;
var markerCusters;
var villes = {
\"Rouen\": { \"lat\": 49.4412, \"lon\": 1.0911 },
\"Mont St Aignan\": { \"lat\": 49.4673, \"lon\": 1.0806 },
\"Bois Guillaume\": { \"lat\": 49.4728, \"lon\": 1.1194 },
\"Le Petit Quevilly\": { \"lat\": 49.4239, \"lon\": 1.0573 },
\"Sotteville les Rouen\": { \"lat\": 49.4173, \"lon\": 1.0894 }
};
// Fonction d'initialisation de la carte
function initMap() {
var markers = [];
macarte = L.map('map').setView([lat, lon], 11);
markerCusters = L.markerClusterGroup();
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
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
};</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
var iconBase = './../build/img/glassLogo.png';
var lat = 49.4412;
var lon = 1.0911;
var macarte = null;
var markerCusters;
var villes = {
\"Rouen\": { \"lat\": 49.4412, \"lon\": 1.0911 },
\"Mont St Aignan\": { \"lat\": 49.4673, \"lon\": 1.0806 },
\"Bois Guillaume\": { \"lat\": 49.4728, \"lon\": 1.1194 },
\"Le Petit Quevilly\": { \"lat\": 49.4239, \"lon\": 1.0573 },
\"Sotteville les Rouen\": { \"lat\": 49.4173, \"lon\": 1.0894 }
};
// Fonction d'initialisation de la carte
function initMap() {
var markers = [];
macarte = L.map('map').setView([lat, lon], 11);
markerCusters = L.markerClusterGroup();
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
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
};</script>", "js.html.twig", "C:\\xampp\\htdocs\\youcycle\\templates\\js.html.twig");
    }
}
