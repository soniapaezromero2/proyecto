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

/* pedido/edit.html.twig */
class __TwigTemplate_490979d706d08e0b910ccd925f0903aec460e0edcf24e7b49a5a3edf9b8e8e0c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedido/edit.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 9
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
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Edit Pedido</h1>
    <p></p>
    <label><h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 20, $this->source); })()), "referencia", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2></label>
    <p></p>
    <p></p>
    <label><h4>Cliente</h4></label>
    <p></p>
    <label><h5>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 25, $this->source); })()), "clientePedido", [], "any", false, false, false, 25), "html", null, true);
        echo "</h5></label>
    <p></p>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <h4 style=\"text-align: center;\">Productos</h4>
        <table class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
            <thead>
            <tr>
                <th style=\"width: 5%;\">Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "                <tr>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "precio", [], "any", false, false, false, 43), "html", null, true);
            echo "€</td>
                    <td><input type=\"number\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "\"  min=\"1\" max=\"100\"></td>
                    <th>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 45), "html", null, true);
            echo "</th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        </table>
        <p></p>
        <p></p>
        <label><h4>Total del pedido</h4></label><p></p>
        <input  value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 53, $this->source); })()), "total", [], "any", false, false, false, 53), "html", null, true);
        echo "€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">
    </div>
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "add", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "btn btn-info w-25"]]);
        echo "
    ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 57
            echo "        <a  class=\"btn btn-info w-25\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            echo "\">back to list</a>
    ";
        } else {
            // line 59
            echo "        <a class=\"btn btn-info w-25\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidocliente_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">back to list</a>
    ";
        }
        // line 61
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "

</div>
    ";
        // line 64
        echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
        echo "

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pedido/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 64,  199 => 61,  193 => 59,  187 => 57,  185 => 56,  181 => 55,  176 => 53,  169 => 48,  160 => 45,  156 => 44,  152 => 43,  148 => 42,  145 => 41,  141 => 40,  125 => 27,  120 => 25,  112 => 20,  106 => 16,  100 => 15,  88 => 9,  83 => 8,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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

    <h1>Edit Pedido</h1>
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
                <th>Total</th>
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
        <input  value=\"{{ pedido.total }}€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">
    </div>
    {{ form_widget(form.add, {'attr': {'class': 'btn btn-info w-25'}}) }}
    {% if is_granted('ROLE_ADMIN') %}
        <a  class=\"btn btn-info w-25\" href=\"{{ path('app_pedido_index') }}\">back to list</a>
    {% else %}
        <a class=\"btn btn-info w-25\" href=\"{{ path('app_pedidocliente_show',{'id': cliente.id}) }}\">back to list</a>
    {% endif %}
    {{ form_end(form) }}

</div>
    {{ include('pedido/_delete_form.html.twig') }}

</div>
{% endblock %}
", "pedido/edit.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/pedido/edit.html.twig");
    }
}
