<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* event/details_event.html.twig */
class __TwigTemplate_661d3eb48b1840c77953ac8e6f5a81f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/details_event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/details_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/details_event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Afficher Sortie ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"alert alert-success mt-2\" role=\"alert\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<div class=\"container-fluid mt-5 p-3 mx-auto event-detail\">

    <h1>Detail de la sortie <span class=\"text-light\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</span></h1>
    <div class=\"d-flex flex-lg-row mt-1 event-detail-flex\">
        <div class=\"col-6\">
            <table class=\"table table-borderless\">
                <tbody>
                <tr>
                    <th class=\"d-none d-lg-table-cell flex-lg-row mt-2\">Campus :</th>
                    <td class=\"d-none d-lg-table-cell flex-lg-row mt-2\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "campus", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Date et heure de la sortie :</th>
                    <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "startAt", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "startAt", [], "any", false, false, false, 24), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Date limite d'inscription :</th>
                    <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "deadLineInscriptionAt", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "deadLineInscriptionAt", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Nombre de places disponibles :</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "registration", [], "any", false, false, false, 32), "count", [], "any", false, false, false, 32), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "maxPeople", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Durée :</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 36, $this->source); })()), "duration", [], "any", false, false, false, 36), "html", null, true);
        echo " minutes</td>
                </tr>
                <tr>
                    <th class=\"col-4\">Description et infos :</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class=\"col-6\">
            <table class=\"table table-borderless\">
                <tbody>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Lieu :</th>
                    <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "location", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Rue :</th>
                    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "location", [], "any", false, false, false, 55), "street", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Code postal :</th>
                    <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "location", [], "any", false, false, false, 59), "city", [], "any", false, false, false, 59), "zipCode", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Latitude :</th>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })()), "location", [], "any", false, false, false, 63), "latitude", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Longitude :</th>
                    <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 67, $this->source); })()), "location", [], "any", false, false, false, 67), "longitude", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-6  detail-event-user\">
            <h4 class=\"mt-4 text-light\">Liste des participants inscrits</h4>
            <div class=\"wrapper-table\">
                <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Nom/Prénom</th>
                    <th>Contact</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "registration", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
            // line 89
            echo "                    <tr>
                        <td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil", ["id" => twig_get_attribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">";
            ((twig_get_attribute($this->env, $this->source, $context["registration"], "pseudo", [], "any", false, false, false, 90)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "pseudo", [], "any", false, false, false, 90), "html", null, true))) : (print ("non renseigné")));
            echo "</a></td>
                        <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "firstname", [], "any", false, false, false, 91), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "lastname", [], "any", false, false, false, 91)), "html", null, true);
            echo "</td>
                        <td>   <button type=\"button\" data-registration=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "email", [], "any", false, false, false, 92), "html", null, true);
            echo "\" data-user-registration=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "firstname", [], "any", false, false, false, 92), "html", null, true);
            echo "\" class=\"btn btn-link registration-button\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" >
                                Contacter
                            </button></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </tbody>
                </table>
            </div>
        </div>
             <div class=\"col-6 map\"> ";
        // line 101
        $this->loadTemplate("location/mapping_location.html.twig", "event/details_event.html.twig", 101)->display($context);
        echo "</div>
    </div>
</div>
   ";
        // line 104
        $this->loadTemplate("contact/_event_contact.html.twig", "event/details_event.html.twig", 104)->display($context);
        // line 105
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 109
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("detail");
        echo "




    <script>
      
    const latitude = ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 116, $this->source); })()), "location", [], "any", false, false, false, 116), "latitude", [], "any", false, false, false, 116), "html", null, true);
        echo "
    const longitude = ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 117, $this->source); })()), "location", [], "any", false, false, false, 117), "longitude", [], "any", false, false, false, 117), "html", null, true);
        echo "

    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/details_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 117,  307 => 116,  297 => 109,  292 => 108,  282 => 107,  271 => 105,  269 => 104,  263 => 101,  257 => 97,  244 => 92,  238 => 91,  232 => 90,  229 => 89,  225 => 88,  201 => 67,  194 => 63,  187 => 59,  180 => 55,  173 => 51,  159 => 40,  152 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  112 => 13,  108 => 11,  99 => 8,  96 => 7,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ parent() }} | Afficher Sortie {% endblock %}

{% block body %}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success mt-2\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
<div class=\"container-fluid mt-5 p-3 mx-auto event-detail\">

    <h1>Detail de la sortie <span class=\"text-light\">{{ event.name }}</span></h1>
    <div class=\"d-flex flex-lg-row mt-1 event-detail-flex\">
        <div class=\"col-6\">
            <table class=\"table table-borderless\">
                <tbody>
                <tr>
                    <th class=\"d-none d-lg-table-cell flex-lg-row mt-2\">Campus :</th>
                    <td class=\"d-none d-lg-table-cell flex-lg-row mt-2\">{{ event.campus.name }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Date et heure de la sortie :</th>
                    <td>{{ event.startAt ? event.startAt|date('Y-m-d H:i') : '' }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Date limite d'inscription :</th>
                    <td>{{ event.deadLineInscriptionAt ? event.deadLineInscriptionAt|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Nombre de places disponibles :</th>
                    <td>{{ event.registration.count }} / {{ event.maxPeople }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Durée :</th>
                    <td>{{ event.duration }} minutes</td>
                </tr>
                <tr>
                    <th class=\"col-4\">Description et infos :</th>
                    <td>{{ event.description }}</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class=\"col-6\">
            <table class=\"table table-borderless\">
                <tbody>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Lieu :</th>
                    <td>{{ event.location.name }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Rue :</th>
                    <td>{{ event.location.street }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Code postal :</th>
                    <td>{{ event.location.city.zipCode }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Latitude :</th>
                    <td>{{ event.location.latitude }}</td>
                </tr>
                <tr>
                    <th class=\"d-flex flex-lg-row mt-2\">Longitude :</th>
                    <td>{{ event.location.longitude }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-6  detail-event-user\">
            <h4 class=\"mt-4 text-light\">Liste des participants inscrits</h4>
            <div class=\"wrapper-table\">
                <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Nom/Prénom</th>
                    <th>Contact</th>
                </tr>
                </thead>
                <tbody>
                {% for registration in event.registration %}
                    <tr>
                        <td><a href=\"{{ path('app_user_profil',{'id':registration.id}) }}\">{{ registration.pseudo ? registration.pseudo : 'non renseigné'}}</a></td>
                        <td>{{ registration.firstname }} {{ registration.lastname| upper }}</td>
                        <td>   <button type=\"button\" data-registration=\"{{registration.email}}\" data-user-registration=\"{{ registration.firstname }}\" class=\"btn btn-link registration-button\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" >
                                Contacter
                            </button></td>
                    </tr>
                {% endfor %}
                </tbody>
                </table>
            </div>
        </div>
             <div class=\"col-6 map\"> {% include ('location/mapping_location.html.twig') %}</div>
    </div>
</div>
   {% include('contact/_event_contact.html.twig') %}

{% endblock %}
{% block javascripts%}
    {{ parent() }}
    {{ encore_entry_script_tags('detail') }}




    <script>
      
    const latitude = {{ event.location.latitude }}
    const longitude = {{ event.location.longitude }}

    </script>

{% endblock %}", "event/details_event.html.twig", "/Users/jordanazran/Desktop/ENI-Sortie/templates/event/details_event.html.twig");
    }
}
