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

/* consulta/edit.html.twig */
class __TwigTemplate_98ed84cc1ef19755a4cc1daeec4014adaf6656ede09c32cb6ffb2ff38d589c85 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "consulta/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Consulta";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <h1>Edit Consulta</h1>
        <label for=\"email\">Email del usuario</label>
        <p></p>
        <input type=\"email\" id=\"email\"
               value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["consultum"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "\"style=\"width: 1100px; border-radius: 5px;border-color:lightgrey \" required>

    ";
        // line 13
        echo twig_include($this->env, $context, "consulta/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_index");
        echo "\">back to list</a>

    ";
        // line 17
        echo twig_include($this->env, $context, "consulta/_delete_form.html.twig");
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "consulta/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  75 => 15,  70 => 13,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "consulta/edit.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/consulta/edit.html.twig");
    }
}
