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

/* event/_form.html.twig */
class __TwigTemplate_7af6a5776a2b3dbc4116f6ccb8ad577f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        // line 1
        echo "<h2 class=\"filter-title\">Filtrer les sorties</h2>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
<div class=\"d-flex row justify-content-around event-filter\">
    <div class=\"col-5\">
        <div class=\"d-none d-lg-block\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "campus", [], "any", false, false, false, 6), 'label');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "campus", [], "any", false, false, false, 7), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "searchBar", [], "any", false, false, false, 10), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "searchBar", [], "any", false, false, false, 11), 'widget');
        echo "
        </div>
        <div class=\"d-flex justify-content-around align-items-center my-2\">
            <p class=\"my-auto\">Entre</p>
            <div class=\"col-4\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "minDate", [], "any", false, false, false, 16), 'widget');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "minDate", [], "any", false, false, false, 17), 'errors');
        echo "
            </div>
            <p class=\"my-auto\">et</p>
            <div class=\"col-4\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "maxDate", [], "any", false, false, false, 21), 'widget');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "maxDate", [], "any", false, false, false, 22), 'errors');
        echo "
            </div>
        </div>
    </div>
    <div class=\"col-3 d-flex flex-column m-auto event-filter-checkbox\">
        <div>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "isOrganizer", [], "any", false, false, false, 28), 'widget');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "isOrganizer", [], "any", false, false, false, 29), 'label');
        echo "
        </div>

        <div>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "isRegistred", [], "any", false, false, false, 33), 'widget');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "isRegistred", [], "any", false, false, false, 34), 'label');
        echo "
        </div>
        <div>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "isNotRegistred", [], "any", false, false, false, 37), 'widget');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "isNotRegistred", [], "any", false, false, false, 38), 'label');
        echo "
        </div>
        <div>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "isPassed", [], "any", false, false, false, 41), 'widget');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "isPassed", [], "any", false, false, false, 42), 'label');
        echo "
        </div>
    </div>
    <div class=\"col-2\">
        <button type=\"submit\" class=\"btn btn-primary my-auto\">Rechercher</button>
    </div>

</div>
";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "event/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  134 => 42,  130 => 41,  124 => 38,  120 => 37,  114 => 34,  110 => 33,  103 => 29,  99 => 28,  90 => 22,  86 => 21,  79 => 17,  75 => 16,  67 => 11,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"filter-title\">Filtrer les sorties</h2>
{{ form_start(form) }}
<div class=\"d-flex row justify-content-around event-filter\">
    <div class=\"col-5\">
        <div class=\"d-none d-lg-block\">
            {{  form_label(form.campus) }}
            {{ form_widget(form.campus) }}
        </div>
        <div>
            {{ form_label(form.searchBar) }}
            {{ form_widget(form.searchBar) }}
        </div>
        <div class=\"d-flex justify-content-around align-items-center my-2\">
            <p class=\"my-auto\">Entre</p>
            <div class=\"col-4\">
                {{ form_widget(form.minDate) }}
                {{ form_errors(form.minDate) }}
            </div>
            <p class=\"my-auto\">et</p>
            <div class=\"col-4\">
                {{ form_widget(form.maxDate) }}
                {{ form_errors(form.maxDate) }}
            </div>
        </div>
    </div>
    <div class=\"col-3 d-flex flex-column m-auto event-filter-checkbox\">
        <div>
        {{ form_widget(form.isOrganizer) }}
        {{ form_label(form.isOrganizer) }}
        </div>

        <div>
        {{ form_widget(form.isRegistred) }}
        {{ form_label(form.isRegistred) }}
        </div>
        <div>
        {{ form_widget(form.isNotRegistred) }}
        {{ form_label(form.isNotRegistred) }}
        </div>
        <div>
        {{ form_widget(form.isPassed) }}
        {{ form_label(form.isPassed) }}
        </div>
    </div>
    <div class=\"col-2\">
        <button type=\"submit\" class=\"btn btn-primary my-auto\">Rechercher</button>
    </div>

</div>
{{ form_end(form) }}
", "event/_form.html.twig", "/Users/jordanazran/Desktop/ENI-Sortie/templates/event/_form.html.twig");
    }
}
