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

/* event/new_event.html.twig */
class __TwigTemplate_d7fcab7c2d56597836e1bb9ec19bd63c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new_event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/new_event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Eni_sortir Ajouter sortie
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success mt-2\" role=\"alert\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "failed"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <div class=\"alert alert-danger mt-2\" role=\"alert\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "<h1 class=\"text-center text-primary mt-5\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " </h1>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    <div class=\"row w-75 mx-auto mt-5\">
        <div class=\"col-12\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'widget');
        echo "</div>
        <div class=\"col-6\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "campus", [], "any", false, false, false, 21), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "campus", [], "any", false, false, false, 21), 'widget', ["attr" => ["disabled" => true]]);
        echo "</div>
        <div class=\"col-6\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "city", [], "any", false, false, false, 22), 'label');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "city", [], "any", false, false, false, 22), 'widget');
        echo "</div>
        <div class=\"col-3\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "startAt", [], "any", false, false, false, 23), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "startAt", [], "any", false, false, false, 23), 'widget');
        echo "</div>
        <div class=\"col-3\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "deadLineInscriptionAt", [], "any", false, false, false, 24), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "deadLineInscriptionAt", [], "any", false, false, false, 24), 'widget');
        echo "</div>
        <div class=\"col-6 d-flex align-items-end justify-content-around\">
            <label>Lieux
                ";
        // line 27
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 27, $this->source); })()) == false)) {
            // line 28
            echo "            <select class=\"form-select mt-3\" id=\"location\" name=\"location\" disabled>
                <option value=\"0\">choisir un lieu</option>
            </select>
                ";
        } else {
            // line 32
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "location", [], "any", false, false, false, 32), 'label');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "location", [], "any", false, false, false, 32), 'widget');
            echo "
                ";
        }
        // line 34
        echo "            </label>
            <button type=\"button\" class=\"btn btn-primary mt-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalLieux\">
                Ajouter un lieu
            </button>

        </div>
        <div class=\"col-3\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "maxPeople", [], "any", false, false, false, 40), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "maxPeople", [], "any", false, false, false, 40), 'widget');
        echo "</div>
        <div class=\"col-3\" >";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "duration", [], "any", false, false, false, 41), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "duration", [], "any", false, false, false, 41), 'widget');
        echo "</div>

        <div class=\"col-12\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'widget');
        echo "</div>
        <div class=\"col-12 d-flex flex-column align-items-center\" id=\"info\"></div>
        <div class=\"d-flex justify-content-end\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "submit", [], "any", false, false, false, 46), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "submit", [], "any", false, false, false, 46), 'widget');
        echo "
            ";
        // line 47
        if (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 47, $this->source); })()) == true)) {
            // line 48
            echo "            <a class=\"btn btn-light mt-4\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cancel_event", ["id" => (isset($context["idEvent"]) || array_key_exists("idEvent", $context) ? $context["idEvent"] : (function () { throw new RuntimeError('Variable "idEvent" does not exist.', 48, $this->source); })())]), "html", null, true);
            echo "\">Supprimer la sortie</a>
            ";
        }
        // line 50
        echo "            ";
        if (((isset($context["activate"]) || array_key_exists("activate", $context) ? $context["activate"] : (function () { throw new RuntimeError('Variable "activate" does not exist.', 50, $this->source); })()) == true)) {
            // line 51
            echo "                <a class=\"btn bg-secondary mt-4\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_active_event", ["id" => (isset($context["idEvent"]) || array_key_exists("idEvent", $context) ? $context["idEvent"] : (function () { throw new RuntimeError('Variable "idEvent" does not exist.', 51, $this->source); })())]), "html", null, true);
            echo "\">Activer la sortie</a>
            ";
        }
        // line 53
        echo "
        </div>

    </div>

    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modalLieux\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-primary\" id=\"exampleModalLabel\">Ajout d'un lieu</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 69
        $this->loadTemplate("location/_add_location.html.twig", "event/new_event.html.twig", 69)->display($context);
        // line 70
        echo "                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 78
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("event");
        echo "
<script>
    const urlApi = \"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["app_url_api"]) || array_key_exists("app_url_api", $context) ? $context["app_url_api"] : (function () { throw new RuntimeError('Variable "app_url_api" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "\"
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/new_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 80,  280 => 78,  275 => 77,  265 => 76,  250 => 70,  248 => 69,  234 => 58,  227 => 53,  221 => 51,  218 => 50,  212 => 48,  210 => 47,  205 => 46,  198 => 43,  192 => 41,  187 => 40,  179 => 34,  171 => 32,  165 => 28,  163 => 27,  156 => 24,  151 => 23,  145 => 22,  140 => 21,  135 => 20,  130 => 18,  125 => 17,  116 => 14,  113 => 13,  108 => 12,  99 => 9,  96 => 8,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
Eni_sortir Ajouter sortie
{% endblock %}

{% block body %}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success mt-2\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('failed') %}
        <div class=\"alert alert-danger mt-2\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
<h1 class=\"text-center text-primary mt-5\">{{ title }} </h1>
{{ form_start(form) }}
    <div class=\"row w-75 mx-auto mt-5\">
        <div class=\"col-12\">{{ form_label(form.name) }}{{ form_widget(form.name) }}</div>
        <div class=\"col-6\">{{ form_label(form.campus) }}{{ form_widget(form.campus, { 'attr': {'disabled': true} }) }}</div>
        <div class=\"col-6\">{{ form_label(form.city)  }} {{ form_widget(form.city)}}</div>
        <div class=\"col-3\">{{ form_label(form.startAt) }}{{ form_widget(form.startAt) }}</div>
        <div class=\"col-3\">{{ form_label(form.deadLineInscriptionAt) }}{{ form_widget(form.deadLineInscriptionAt) }}</div>
        <div class=\"col-6 d-flex align-items-end justify-content-around\">
            <label>Lieux
                {% if edit == false%}
            <select class=\"form-select mt-3\" id=\"location\" name=\"location\" disabled>
                <option value=\"0\">choisir un lieu</option>
            </select>
                {% else %}
                    {{ form_label(form.location)  }} {{ form_widget(form.location)}}
                {% endif %}
            </label>
            <button type=\"button\" class=\"btn btn-primary mt-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalLieux\">
                Ajouter un lieu
            </button>

        </div>
        <div class=\"col-3\">{{ form_label(form.maxPeople) }}{{ form_widget(form.maxPeople) }}</div>
        <div class=\"col-3\" >{{ form_label(form.duration) }}{{ form_widget(form.duration) }}</div>

        <div class=\"col-12\">{{ form_label(form.description) }}{{ form_widget(form.description) }}</div>
        <div class=\"col-12 d-flex flex-column align-items-center\" id=\"info\"></div>
        <div class=\"d-flex justify-content-end\">
            {{ form_label(form.submit) }}{{ form_widget(form.submit) }}
            {% if edit == true %}
            <a class=\"btn btn-light mt-4\" href=\"{{ path('app_cancel_event',{id:idEvent}) }}\">Supprimer la sortie</a>
            {% endif %}
            {% if activate == true %}
                <a class=\"btn bg-secondary mt-4\" href=\"{{ path('app_active_event',{id:idEvent}) }}\">Activer la sortie</a>
            {% endif %}

        </div>

    </div>

    {{ form_end(form) }}

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modalLieux\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-primary\" id=\"exampleModalLabel\">Ajout d'un lieu</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    {% include('location/_add_location.html.twig') %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{{ encore_entry_script_tags('event') }}
<script>
    const urlApi = \"{{ app_url_api }}\"
</script>
{% endblock %}


", "event/new_event.html.twig", "/Users/jordanazran/Desktop/ENI-Sortie/templates/event/new_event.html.twig");
    }
}
