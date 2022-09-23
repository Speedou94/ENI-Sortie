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

/* user/uploadCsv.html.twig */
class __TwigTemplate_9941278a98232c0c506fda9dd623bc24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uploadCsv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uploadCsv.html.twig"));

        // line 1
        echo "<div style=\"
    background-color: #222222;
    width: 100vw;
    height: 100vh;
    padding: 0;
    z-index: -1;
\">
    <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_upload_csv");
        echo "\"
        style=\"
        background-color: #303030;
        padding: 20px;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        border-radius: 10px;
    \">
        <h1 style=\"
            color: #e5e5e5;
            \">Importer vos utilisateurs depuis un ficher CSV
        </h1>
        <input type=\"file\" name=\"csvFile\" style=\"
            display: block;
            margin: auto;
            color: #5c70d6\">
        <div style=\"
            margin-top: 20px;
            \">
            <button type=\"submit\" style=\"margin-right: 40px\">Envoyer</button>
            <button type=\"reset\" class=\"mt-5\" id=\"go-back\">Annuler</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('go-back').addEventListener('click', () => {
        history.back();
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/uploadCsv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"
    background-color: #222222;
    width: 100vw;
    height: 100vh;
    padding: 0;
    z-index: -1;
\">
    <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('app_user_upload_csv') }}\"
        style=\"
        background-color: #303030;
        padding: 20px;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        border-radius: 10px;
    \">
        <h1 style=\"
            color: #e5e5e5;
            \">Importer vos utilisateurs depuis un ficher CSV
        </h1>
        <input type=\"file\" name=\"csvFile\" style=\"
            display: block;
            margin: auto;
            color: #5c70d6\">
        <div style=\"
            margin-top: 20px;
            \">
            <button type=\"submit\" style=\"margin-right: 40px\">Envoyer</button>
            <button type=\"reset\" class=\"mt-5\" id=\"go-back\">Annuler</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('go-back').addEventListener('click', () => {
        history.back();
    });
</script>", "user/uploadCsv.html.twig", "/Users/jordanazran/Desktop/ENI-Sortie/templates/user/uploadCsv.html.twig");
    }
}
