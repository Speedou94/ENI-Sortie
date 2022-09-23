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

/* location/_add_location.html.twig */
class __TwigTemplate_39e587ff1d2343a21592f3c96f488743 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/_add_location.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/_add_location.html.twig"));

        // line 1
        echo "
<form action=\" ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_new", ["origin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2)]), "html", null, true);
        echo " \" method=\"post\" id=\"formLocation\">
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-12\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 5, $this->source); })()), "city", [], "any", false, false, false, 5), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 5, $this->source); })()), "city", [], "any", false, false, false, 5), 'widget');
        echo "</div>
        <div class=\"col-12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'widget');
        echo "</div>
        <div class=\"col-12\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 7, $this->source); })()), "street", [], "any", false, false, false, 7), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 7, $this->source); })()), "street", [], "any", false, false, false, 7), 'widget');
        echo "</div>
        <div class=\"col-6\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 8, $this->source); })()), "latitude", [], "any", false, false, false, 8), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 8, $this->source); })()), "latitude", [], "any", false, false, false, 8), 'widget');
        echo "</div>
        <div class=\"col-6\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 9, $this->source); })()), "longitude", [], "any", false, false, false, 9), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 9, $this->source); })()), "longitude", [], "any", false, false, false, 9), 'widget');
        echo "</div>
        <div class=\"col-12 d-flex justify-content-around\">
            <button type=\"button\" class=\"btn btn-secondary mt-4\" data-bs-dismiss=\"modal\">Annuler</button>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 12, $this->source); })()), "submit", [], "any", false, false, false, 12), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 12, $this->source); })()), "submit", [], "any", false, false, false, 12), 'widget');
        echo "</div>
    </div>
    <input type=\"hidden\" name=\"idOrigin\"
           value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["idEvent"]) || array_key_exists("idEvent", $context) ? $context["idEvent"] : (function () { throw new RuntimeError('Variable "idEvent" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\"/>
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "location/_add_location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 16,  89 => 15,  82 => 12,  75 => 9,  70 => 8,  65 => 7,  60 => 6,  55 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form action=\" {{ path('app_location_new',{origin:app.request.attributes.get('_route')}) }} \" method=\"post\" id=\"formLocation\">
{{ form_start(formLocation) }}
    <div class=\"row\">
        <div class=\"col-12\">{{ form_label(formLocation.city) }}{{  form_widget(formLocation.city) }}</div>
        <div class=\"col-12\">{{ form_label(formLocation.name) }}{{  form_widget(formLocation.name) }}</div>
        <div class=\"col-12\">{{ form_label(formLocation.street) }}{{  form_widget(formLocation.street) }}</div>
        <div class=\"col-6\">{{ form_label(formLocation.latitude) }}{{  form_widget(formLocation.latitude) }}</div>
        <div class=\"col-6\">{{ form_label(formLocation.longitude) }}{{  form_widget(formLocation.longitude) }}</div>
        <div class=\"col-12 d-flex justify-content-around\">
            <button type=\"button\" class=\"btn btn-secondary mt-4\" data-bs-dismiss=\"modal\">Annuler</button>
            {{ form_label(formLocation.submit) }}{{  form_widget(formLocation.submit) }}</div>
    </div>
    <input type=\"hidden\" name=\"idOrigin\"
           value=\"{{ idEvent }}\"/>
{{ form_end(formLocation) }}
</form>", "location/_add_location.html.twig", "/Users/jordanazran/Desktop/ENI-Sortie/templates/location/_add_location.html.twig");
    }
}
