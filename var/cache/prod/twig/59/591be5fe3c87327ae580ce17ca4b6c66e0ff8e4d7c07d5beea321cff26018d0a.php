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

/* profile/index.html.twig */
class __TwigTemplate_2f3c5d8aedbaccf1ff10faa53170b23dc6fe46636eb38e6b063bb608624ba174 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mi perfil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\" style=\"background: navajowhite;border: 0;\">

        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

    <ul style=\"margin-top: 25px;\">
        <li>Email:<br>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "email", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
        <li>Telefono de contacto:<br>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "tlfContacto", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>
        <li>Pedidos realizados:<br>";
        // line 14
        echo twig_escape_filter($this->env, ($context["pedidos"] ?? null), "html", null, true);
        echo "</li>
    </ul>
    <div>



";
    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 13,  69 => 12,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/index.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/profile/index.html.twig");
    }
}
