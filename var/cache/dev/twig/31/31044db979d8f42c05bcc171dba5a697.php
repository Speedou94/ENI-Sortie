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

/* components/_footer.html.twig */
class __TwigTemplate_c85b6be655b64de65b9229b04de7ff77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        // line 1
        echo "<div class=\"card-body mt-5 bg-secondary bottom\">
    <h5 class=\"card-title text-center\">Projet ENI Sortir</h5>
    <p class=\"card-text text-center mt-4\">@2022 / <a href=\"https://nicolas-godin.fr/\" target=\"_blank\">Nicolas Godin</a>
        -<a href=\"https://www.linkedin.com/in/jordan-azran/\" target=\"_blank\">Jordan Azran</a>  -<a target=\"_blank\" href=\"\"></a> Manarii Brémond -
        <a target=\"_blank\" href=\"https://vichit.fr/#/\">Christophe Vichit</a> </p>

</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-body mt-5 bg-secondary bottom\">
    <h5 class=\"card-title text-center\">Projet ENI Sortir</h5>
    <p class=\"card-text text-center mt-4\">@2022 / <a href=\"https://nicolas-godin.fr/\" target=\"_blank\">Nicolas Godin</a>
        -<a href=\"https://www.linkedin.com/in/jordan-azran/\" target=\"_blank\">Jordan Azran</a>  -<a target=\"_blank\" href=\"\"></a> Manarii Brémond -
        <a target=\"_blank\" href=\"https://vichit.fr/#/\">Christophe Vichit</a> </p>

</div>", "components/_footer.html.twig", "/Users/jordanazran/Desktop/ENI-Sortie/templates/components/_footer.html.twig");
    }
}
