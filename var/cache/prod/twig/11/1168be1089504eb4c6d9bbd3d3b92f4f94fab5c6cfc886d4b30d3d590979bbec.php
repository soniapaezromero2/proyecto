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

/* novedades/edit.html.twig */
class __TwigTemplate_0155cff749e8dfb2756e1be106e5434947ec0d4127c6d3ac66c8464e76e1320b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "novedades/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Noticias";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Edit Novedades</h1>

    ";
        // line 11
        echo twig_include($this->env, $context, "novedades/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
        echo "\"class=\"btn btn-info w-25\">back to list</a>

    ";
        // line 15
        echo twig_include($this->env, $context, "novedades/_delete_form.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "novedades/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  70 => 13,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "novedades/edit.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/novedades/edit.html.twig");
    }
}
