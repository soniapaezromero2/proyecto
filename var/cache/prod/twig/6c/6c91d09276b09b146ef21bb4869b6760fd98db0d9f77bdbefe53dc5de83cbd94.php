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
class __TwigTemplate_fc8039f4d29b627855c6c6044c5bbf6220dc4b8178be6292317f3e1a83150f1b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pedido";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Pedido</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Referencia</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "referencia", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "clientePedido", [], "any", false, false, false, 21), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "total", [], "any", false, false, false, 45), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidocliente_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">back to list</a>
    ";
        }
        // line 53
        echo "    <a  class=\"btn btn-info w-25\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 55
        echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
        echo "
    </div>
";
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
        return array (  153 => 55,  147 => 53,  141 => 51,  135 => 49,  133 => 48,  127 => 45,  120 => 40,  110 => 36,  106 => 35,  102 => 34,  99 => 33,  95 => 32,  81 => 21,  74 => 17,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pedido/show.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/pedido/show.html.twig");
    }
}
