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

/* event/_liste.html.twig */
class __TwigTemplate_2229e4d636f9f580a7664940a7865c52 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_liste.html.twig"));

        // line 1
        echo "<h2 class=\"d-lg-none filter-title\">Mes sorties</h2>
<table class=\"table mt-5 event-table\">
    <thead>
    <tr>
        <th scope=\"col\">Nom de la sortie</th>
        <th scope=\"col\">Date de sortie</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">Cloture inscription</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">inscrit/place</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">etat</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">inscrit</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">organisateur</th>
        <th scope=\"col\" class=\"\">action</th>
        <th class=\"d-lg-none\">lieu</th>
    </thead>
    <tbody>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 18
            echo "            <tr>
                <th>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</th>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "startAt", [], "any", false, false, false, 20), "d/m/Y - H\\Hi"), "html", null, true);
            echo "</td>
                <td class=\"d-none d-lg-table-cell\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "deadLineInscriptionAt", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            echo "</td>
                <td class=\"d-none d-lg-table-cell\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "registration", [], "any", false, false, false, 22), "count", [], "any", false, false, false, 22), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "maxPeople", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td class=\"d-none d-lg-table-cell\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 23), "wording", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                ";
            // line 24
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["event"], "registration", [], "any", false, false, false, 24))) {
                // line 25
                echo "                    <td class=\"d-none d-lg-table-cell\">X</td>
                ";
            } else {
                // line 27
                echo "                    <td class=\"d-none d-lg-table-cell\"></td>
                ";
            }
            // line 29
            echo "                <td class=\"d-none d-lg-table-cell\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td class=\"\">
                    ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 31), "wording", [], "any", false, false, false, 31) == twig_constant("App\\Entity\\Status::CREATE"))) {
                // line 32
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">Modifier</a>
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_active_event", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">Publier</a>
                    ";
            } else {
                // line 35
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_details", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">Afficher</a>
                        ";
                // line 36
                if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 36)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 36), "wording", [], "any", false, false, false, 36) == twig_constant("App\\Entity\\Status::OPEN")))) {
                    // line 37
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cancel_event", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                    echo "\">Annuler</a>
                        ";
                }
                // line 39
                echo "                    ";
            }
            // line 40
            echo "                    ";
            if (((((twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, $context["event"], "registration", [], "any", false, false, false, 40)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
$context["event"], "status", [], "any", false, false, false, 41), "wording", [], "any", false, false, false, 41) != twig_constant("App\\Entity\\Status::CLOSE"))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
$context["event"], "status", [], "any", false, false, false, 42), "wording", [], "any", false, false, false, 42) != twig_constant("App\\Entity\\Status::IN_PROGRESS"))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 43
$context["event"], "status", [], "any", false, false, false, 43), "wording", [], "any", false, false, false, 43) != twig_constant("App\\Entity\\Status::PAST"))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
$context["event"], "status", [], "any", false, false, false, 44), "wording", [], "any", false, false, false, 44) != twig_constant("App\\Entity\\Status::CANCELED")))) {
                // line 45
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">Se désister</a>
                        ";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 46
$context["event"], "status", [], "any", false, false, false, 46), "wording", [], "any", false, false, false, 46) == twig_constant("App\\Entity\\Status::OPEN")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
$context["event"], "registration", [], "any", false, false, false, 47), "count", [], "any", false, false, false, 47) < twig_get_attribute($this->env, $this->source, $context["event"], "maxPeople", [], "any", false, false, false, 47)))) {
                // line 48
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_subscribe", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">S'inscrire</a>
                    ";
            }
            // line 50
            echo "                </td>
                <td class=\"d-lg-none\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>

            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "event/_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  158 => 51,  155 => 50,  149 => 48,  147 => 47,  146 => 46,  141 => 45,  139 => 44,  138 => 43,  137 => 42,  136 => 41,  134 => 40,  131 => 39,  125 => 37,  123 => 36,  118 => 35,  113 => 33,  108 => 32,  106 => 31,  100 => 29,  96 => 27,  92 => 25,  90 => 24,  86 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"d-lg-none filter-title\">Mes sorties</h2>
<table class=\"table mt-5 event-table\">
    <thead>
    <tr>
        <th scope=\"col\">Nom de la sortie</th>
        <th scope=\"col\">Date de sortie</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">Cloture inscription</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">inscrit/place</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">etat</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">inscrit</th>
        <th scope=\"col\" class=\"d-none d-lg-table-cell\">organisateur</th>
        <th scope=\"col\" class=\"\">action</th>
        <th class=\"d-lg-none\">lieu</th>
    </thead>
    <tbody>

    {% for event in events %}
            <tr>
                <th>{{ event.name }}</th>
                <td>{{ event.startAt | date(\"d/m/Y - H\\\\Hi\") }}</td>
                <td class=\"d-none d-lg-table-cell\">{{ event.deadLineInscriptionAt | date(\"d/m/Y\") }}</td>
                <td class=\"d-none d-lg-table-cell\">{{ event.registration.count }} / {{ event.maxPeople }}</td>
                <td class=\"d-none d-lg-table-cell\">{{ event.status.wording }}</td>
                {% if app.user in event.registration %}
                    <td class=\"d-none d-lg-table-cell\">X</td>
                {% else %}
                    <td class=\"d-none d-lg-table-cell\"></td>
                {% endif %}
                <td class=\"d-none d-lg-table-cell\">{{ event.organizer.firstName }}</td>
                <td class=\"\">
                    {% if event.status.wording == constant('App\\\\Entity\\\\Status::CREATE') %}
                        <a href=\"{{ path('app_event_edit',{'id' : event.id}) }}\">Modifier</a>
                        <a href=\"{{ path('app_active_event', {'id': event.id}) }}\">Publier</a>
                    {% else %}
                        <a href=\"{{ path('app_event_details',{'id':event.id}) }}\">Afficher</a>
                        {% if app.user == event.organizer and event.status.wording == constant('App\\\\Entity\\\\Status::OPEN') %}
                            <a href=\"{{ path('app_cancel_event',{'id': event.id}) }}\">Annuler</a>
                        {% endif %}
                    {% endif %}
                    {% if app.user in event.registration and
                        event.status.wording != constant('App\\\\Entity\\\\Status::CLOSE') and
                        event.status.wording != constant('App\\\\Entity\\\\Status::IN_PROGRESS') and
                        event.status.wording != constant('App\\\\Entity\\\\Status::PAST')and
                        event.status.wording != constant('App\\\\Entity\\\\Status::CANCELED')%}
                            <a href=\"{{ path('app_event_unsubscribe', {'id': event.id}) }}\">Se désister</a>
                        {% elseif event.status.wording == constant('App\\\\Entity\\\\Status::OPEN') and
                            event.registration.count < event.maxPeople %}
                            <a href=\"{{ path('app_event_subscribe',{'id': event.id}) }}\">S'inscrire</a>
                    {% endif %}
                </td>
                <td class=\"d-lg-none\">{{ event.location.name }}</td>

            </tr>
    {% endfor %}
    </tbody>
</table>", "event/_liste.html.twig", "/Users/jordanazran/Desktop/ENI-Sortie/templates/event/_liste.html.twig");
    }
}
