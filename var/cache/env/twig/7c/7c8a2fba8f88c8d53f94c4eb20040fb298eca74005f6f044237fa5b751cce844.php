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

/* pedido/new.html.twig */
class __TwigTemplate_8b6b0c21cf4a9e2a5aefbda1355e0b61a0d1d9f9ac70c8e73adcec00b1aff490 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedido/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pedidos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Create new Pedido</h1>
    <p></p>
    <label><h2>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 19, $this->source); })()), "referencia", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2></label>
        <p></p>
        <p></p>
        <label><h4>Cliente</h4></label>
        <p></p>
        <label><h5>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 24, $this->source); })()), "clientePedido", [], "any", false, false, false, 24), "html", null, true);
        echo "</h5></label>
        <p></p>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
            <h4 style=\"text-align: center;\">Productos</h4>
            <table class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                <thead>
                <tr>
                    <th style=\"width: 5%;\">Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            echo "                    <tr>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "precio", [], "any", false, false, false, 42), "html", null, true);
            echo "€</td>
                        <td><input type=\"number\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            echo "\"  min=\"1\" max=\"100\"></td>
                        <th>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 44), "html", null, true);
            echo "</th>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
            <p></p>
            <p></p>
            <label><h4>Total del pedido</h4></label><p></p>
            <input  value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 52, $this->source); })()), "total", [], "any", false, false, false, 52), "html", null, true);
        echo "€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">


        </div>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "add", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "btn btn-info w-25"]]);
        echo "
        <a  class=\"btn btn-info w-25\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        echo "\">back to list</a>
        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pedido/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 58,  187 => 57,  183 => 56,  176 => 52,  169 => 47,  160 => 44,  156 => 43,  152 => 42,  148 => 41,  145 => 40,  141 => 39,  125 => 26,  120 => 24,  112 => 19,  106 => 15,  100 => 14,  88 => 8,  83 => 7,  78 => 6,  73 => 5,  66 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedidos{% endblock %}
{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
        {% endfor %}
    {% endfor %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Create new Pedido</h1>
    <p></p>
    <label><h2>{{ pedido.referencia }}</h2></label>
        <p></p>
        <p></p>
        <label><h4>Cliente</h4></label>
        <p></p>
        <label><h5>{{ pedido.clientePedido }}</h5></label>
        <p></p>
        {{ form_start(form) }}
        <div class=\"form-group\">
            <h4 style=\"text-align: center;\">Productos</h4>
            <table class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                <thead>
                <tr>
                    <th style=\"width: 5%;\">Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                {% for item in items %}
                    <tr>
                        <td>{{item.product.name }}</td>
                        <td>{{ item.product.precio }}€</td>
                        <td><input type=\"number\" value=\"{{ item.quantity }}\"  min=\"1\" max=\"100\"></td>
                        <th>{{ item.total }}</th>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <p></p>
            <p></p>
            <label><h4>Total del pedido</h4></label><p></p>
            <input  value=\"{{order.total }}€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">


        </div>
        {{ form_widget(form.add, {'attr': {'class': 'btn btn-info w-25'}}) }}
        <a  class=\"btn btn-info w-25\" href=\"{{ path('app_pedido_index') }}\">back to list</a>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "pedido/new.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/pedido/new.html.twig");
    }
}
