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

/* pedido/show.html.twig */
class __TwigTemplate_053dfae5b3419e9e9082fa169b7179af08c131dd3d2e235c30a10e4fb65f0720 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedido/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pedido";
        
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

    <h1>Pedido</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Referencia</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 17, $this->source); })()), "referencia", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 21, $this->source); })()), "clientePedido", [], "any", false, false, false, 21), "html", null, true);
        echo "€</td>
            </tr>
            <table class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                <thead>
                <tr>
                    <th style=\"width: 5%;\">Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 33
            echo "                    <tr>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 35), "html", null, true);
            echo "€</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidadProducto", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
               </table>
            <p></p>
            <p></p>
            <label><h4>Total del pedido</h4></label><p></p>
            <input  value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 45, $this->source); })()), "total", [], "any", false, false, false, 45), "html", null, true);
        echo "€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">
            <p></p>
            <p></p>
    ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            echo "\">back to list</a>
    ";
        } else {
            // line 51
            echo "        <a  class=\"btn btn-info w-25\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidocliente_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">back to list</a>
    ";
        }
        // line 53
        echo "    <a  class=\"btn btn-info w-25\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 55
        echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pedido/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  162 => 53,  156 => 51,  150 => 49,  148 => 48,  142 => 45,  135 => 40,  125 => 36,  121 => 35,  117 => 34,  114 => 33,  110 => 32,  96 => 21,  89 => 17,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedido{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Pedido</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ pedido.id }}</td>
            </tr>
            <tr>
                <th>Referencia</th>
                <td>{{ pedido.referencia }}</td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td>{{ pedido.clientePedido }}€</td>
            </tr>
            <table class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                <thead>
                <tr>
                    <th style=\"width: 5%;\">Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                {% for producto in productos %}
                    <tr>
                        <td>{{producto.name }}</td>
                        <td>{{producto.precio }}€</td>
                        <td>{{ producto.cantidadProducto}}</td>

                    </tr>
                {% endfor %}
                </tbody>
               </table>
            <p></p>
            <p></p>
            <label><h4>Total del pedido</h4></label><p></p>
            <input  value=\"{{ pedido.total }}€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">
            <p></p>
            <p></p>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('app_pedido_index') }}\">back to list</a>
    {% else %}
        <a  class=\"btn btn-info w-25\" href=\"{{ path('app_pedidocliente_show',{'id': cliente.id}) }}\">back to list</a>
    {% endif %}
    <a  class=\"btn btn-info w-25\" href=\"{{ path('app_pedido_edit', {'id': pedido.id}) }}\">edit</a>

    {{ include('pedido/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "pedido/show.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/pedido/show.html.twig");
    }
}
