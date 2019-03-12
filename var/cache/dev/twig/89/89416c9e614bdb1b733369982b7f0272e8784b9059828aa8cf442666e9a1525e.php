<?php

/* base.html.twig */
class __TwigTemplate_f51fe35c6db77676ffbe19d779cbe4b73ff2d816cedd6ca8c2f7a01068f1f82e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body>
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
              integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
              crossorigin=\"\" />
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css\" />
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css\" />
        ";
        // line 14
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
            crossorigin=\"\"></script>
    <script type='text/javascript'
            src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>


    <script type=\"text/javascript\">
        var iconBase = './../build/glassLogo.png';
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
        };
    </script>
    <script>\$('.message a').click(function(){
            \$('form').animate({height: \"toggle\", opacity: \"toggle\"}, \"slow\");
        });</script>

    <script type=\"text/javascript\"
            src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./../build/app.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 77
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  200 => 77,  194 => 74,  138 => 20,  129 => 19,  112 => 18,  100 => 14,  91 => 7,  82 => 6,  64 => 5,  53 => 80,  51 => 19,  49 => 18,  45 => 16,  43 => 6,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
              integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
              crossorigin=\"\" />
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css\" />
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css\" />
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}
    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
            crossorigin=\"\"></script>
    <script type='text/javascript'
            src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>


    <script type=\"text/javascript\">
        var iconBase = './../build/glassLogo.png';
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
        };
    </script>
    <script>\$('.message a').click(function(){
            \$('form').animate({height: \"toggle\", opacity: \"toggle\"}, \"slow\");
        });</script>

    <script type=\"text/javascript\"
            src=\"{{ asset('./../build/app.js') }}\"></script>


    {{ encore_entry_script_tags('app') }}

{% endblock %}
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\youcycle\\templates\\base.html.twig");
    }
}
