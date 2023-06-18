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

/* producto/show.html.twig */
class __TwigTemplate_3e382cd418f91b20173eb962b014f2987e4696c5580511bc215ef6c3d70bc790 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Producto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">



    <h1 style=\"text-align: center;margin-left: 10px;\">Producto</h1>
    <table class=\"table\" style=\"width: 750px;margin-right: 0px;\">
        <tbody>
        <tr>

            <td style=\"align-items: center;\"><img  src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 15, $this->source); })()), "imageName", [], "any", false, false, false, 15), "html", null, true);
        echo "\" style=\"align-items: center;\"></td>

        </tr>
            <tr style=\"text-align: left;\">
                <th>Id</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Name</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Precio</th>
                <th>";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 28, $this->source); })()), "precio", [], "any", false, false, false, 28), 2, ",", "."), "html", null, true);
        echo "€ </td></th>
            </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\"class=\"btn btn-info w-25\">back to list</a>

    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\"class=\"btn btn-info w-25\">edit</a>

    ";
        // line 36
        echo twig_include($this->env, $context, "producto/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "producto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  119 => 34,  114 => 32,  107 => 28,  100 => 24,  93 => 20,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Producto{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">



    <h1 style=\"text-align: center;margin-left: 10px;\">Producto</h1>
    <table class=\"table\" style=\"width: 750px;margin-right: 0px;\">
        <tbody>
        <tr>

            <td style=\"align-items: center;\"><img  src=\"{{ asset('images/products/') }}{{ producto.imageName }}\" style=\"align-items: center;\"></td>

        </tr>
            <tr style=\"text-align: left;\">
                <th>Id</th>
                <td>{{ producto.id }}</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Name</th>
                <td>{{ producto.name }}</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Precio</th>
                <th>{{ producto.precio |number_format(2, ',', '.')}}€ </td></th>
            </tr>
        </tbody>
    </table>
    <a href=\"{{ path('app_producto_index') }}\"class=\"btn btn-info w-25\">back to list</a>

    <a href=\"{{ path('app_producto_edit', {'id': producto.id}) }}\"class=\"btn btn-info w-25\">edit</a>

    {{ include('producto/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "producto/show.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/producto/show.html.twig");
    }
}
