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

/* admin/dashboard.html.twig */
class __TwigTemplate_29f2bc054d7f9dda583ab2af57400e6fe025c6bae9b2a6d2d6a78406f7d041a1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"mother\">
    <div id=\"infoPedidos\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\" style=\"background: navajowhite\">
            <h1 >Pedidos Recientes</h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Referencia</th>
                <th>creado</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new RuntimeError('Variable "pedidos" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 17
            echo "                <tr>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "referencia", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "createdAt", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
        </table>
    </div>
    <div  id=\"infoStock\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\">
            <h1>Stock</h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>cantidad</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "producto", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "cantidad", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>
    </div>
        <div  id=\"infoConsulta\"style=\"background: navajowhite; border: 0; background-clip: content-box; justify-content: space-around; width:auto;margin-left: 10px;margin-top: 50px;padding-top:10px; align-items: center;text-align: center;\">
            <table class=\"table\">
                <h1>Consultas</h1>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Asunto</th>
                </tr>
                </thead>
                <tbody style=\"text-align: center\">
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["consultas"]) || array_key_exists("consultas", $context) ? $context["consultas"] : (function () { throw new RuntimeError('Variable "consultas" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["consulta"]) {
            // line 66
            echo "                    <tr>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consulta"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consulta"], "asunto", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>

                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consulta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </tbody>
            </table>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 76,  205 => 72,  196 => 68,  192 => 67,  189 => 66,  184 => 65,  169 => 52,  160 => 48,  152 => 45,  148 => 44,  144 => 43,  141 => 42,  136 => 41,  120 => 27,  111 => 23,  103 => 20,  99 => 19,  95 => 18,  92 => 17,  87 => 16,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Admin{% endblock %}
{% block body %}
    <div id=\"mother\">
    <div id=\"infoPedidos\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\" style=\"background: navajowhite\">
            <h1 >Pedidos Recientes</h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Referencia</th>
                <th>creado</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            {% for pedido in pedidos %}
                <tr>
                    <td>{{ pedido.id }}</td>
                    <td>{{ pedido.referencia }}</td>
                    <td>{{ pedido.createdAt|date(\"d/m/Y\") }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div  id=\"infoStock\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\">
            <h1>Stock</h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>cantidad</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            {% for stock in stocks %}
                <tr>
                    <td>{{ stock.id }}</td>
                    <td>{{ stock.producto }}</td>
                    <td>{{ stock.cantidad }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
        <div  id=\"infoConsulta\"style=\"background: navajowhite; border: 0; background-clip: content-box; justify-content: space-around; width:auto;margin-left: 10px;margin-top: 50px;padding-top:10px; align-items: center;text-align: center;\">
            <table class=\"table\">
                <h1>Consultas</h1>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Asunto</th>
                </tr>
                </thead>
                <tbody style=\"text-align: center\">
                {% for consulta in consultas %}
                    <tr>
                        <td>{{ consulta.id }}</td>
                        <td>{{consulta.asunto }}</td>

                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

{% endblock %}


", "admin/dashboard.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/admin/dashboard.html.twig");
    }
}
