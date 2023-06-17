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
class __TwigTemplate_a6624911c79ac83aa8aa60e8e3fd30a7ce21c3a0466bb77f8e10503422095252 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pedidos";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 5));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "referencia", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2></label>
        <p></p>
        <p></p>
        <label><h4>Cliente</h4></label>
        <p></p>
        <label><h5>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "clientePedido", [], "any", false, false, false, 24), "html", null, true);
        echo "</h5></label>
        <p></p>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 52), "html", null, true);
        echo "€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">


        </div>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "btn btn-info w-25"]]);
        echo "
        <a  class=\"btn btn-info w-25\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        echo "\">back to list</a>
        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
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
        return array (  176 => 58,  172 => 57,  168 => 56,  161 => 52,  154 => 47,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  130 => 40,  126 => 39,  110 => 26,  105 => 24,  97 => 19,  91 => 15,  85 => 14,  73 => 8,  68 => 7,  63 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pedido/new.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/pedido/new.html.twig");
    }
}
