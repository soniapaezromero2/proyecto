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

/* producto/showcategorias.html.twig */
class __TwigTemplate_d9a5cedb0f1d560576b96c33b5c4b7df5e9027b0c2c1722c31a81ee4b6a49149 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/showcategorias.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/showcategorias.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\" style=\"background: navajowhite;border: 0;margin-left: 10px;margin-top: 10px;\">
    <p></p>
        <p></p>
        <p></p>
        <p></p>
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>
        <table class=\"table\" style=\"margin-right: 50px;width: 1100px;\">
            <thead>
            <tr >
                <th style=\"width: 5%;\">Id</th>
                <th>Name</th>
                <th>cantidad</th>
                <th>Imagen</th>
                <th>precio</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 24
            echo "                <tr>
                    <td class=\"table-info\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "imageName", [], "any", false, false, false, 28), "html", null, true);
            echo "\"  height=\"50\"></td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 29), 2, ",", "."), "html", null, true);
            echo "€ </td>

                    <td>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">show</a>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">edit</a>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Añadir al carrito</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\" class=\"btn btn-info w-25\">back to list</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "producto/showcategorias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  140 => 42,  131 => 38,  122 => 34,  118 => 33,  114 => 32,  108 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  88 => 24,  83 => 23,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\" style=\"background: navajowhite;border: 0;margin-left: 10px;margin-top: 10px;\">
    <p></p>
        <p></p>
        <p></p>
        <p></p>
        <h1>{{ name }}</h1>
        <table class=\"table\" style=\"margin-right: 50px;width: 1100px;\">
            <thead>
            <tr >
                <th style=\"width: 5%;\">Id</th>
                <th>Name</th>
                <th>cantidad</th>
                <th>Imagen</th>
                <th>precio</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            {% for producto in productos %}
                <tr>
                    <td class=\"table-info\">{{ producto.id }}</td>
                    <td>{{ producto.name }}</td>
                    <td>{{ producto.stock }}</td>
                    <td><img src=\"{{ asset('images/products/') }}{{ producto.imageName }}\"  height=\"50\"></td>
                    <td>{{ producto.precio |number_format(2, ',', '.')}}€ </td>

                    <td>
                        <a href=\"{{ path('app_producto_show', {'id': producto.id}) }}\">show</a>
                        <a href=\"{{ path('app_producto_edit', {'id': producto.id}) }}\">edit</a>
                        <a href=\"{{ path('app_producto_detail', {'id': producto.id}) }}\">Añadir al carrito</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <a href=\"{{ path('app_producto_index') }}\" class=\"btn btn-info w-25\">back to list</a>
    </div>

{% endblock %}

", "producto/showcategorias.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/producto/showcategorias.html.twig");
    }
}
