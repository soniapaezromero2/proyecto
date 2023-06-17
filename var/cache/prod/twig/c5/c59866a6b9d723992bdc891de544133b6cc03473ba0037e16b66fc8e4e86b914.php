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
class __TwigTemplate_7b254dacc0c8e0027d02d182bd924bcb33b39e30b945b3c6b6877a251f3bb803 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pedidos";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 6));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "referencia", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2></label>
    <p></p>
    <p></p>
    <label><h4>Cliente</h4></label>
    <p></p>
    <label><h5>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "clientePedido", [], "any", false, false, false, 25), "html", null, true);
        echo "</h5></label>
    <p></p>
    ";
        // line 27
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
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        <a  class=\"btn btn-info w-25\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">Añadir producto</a>
        <p></p>
        <p></p>
        <label><h4>Total del pedido</h4></label><p></p>
        <input  value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pedido"] ?? null), "total", [], "any", false, false, false, 54), "html", null, true);
        echo "€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\">
    </div>
    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "btn btn-info w-25"]]);
        echo "
    ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "        <a  class=\"btn btn-info w-25\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            echo "\">back to list</a>
    ";
        } else {
            // line 60
            echo "        <a class=\"btn btn-info w-25\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidocliente_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">back to list</a>
    ";
        }
        // line 62
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

</div>
    ";
        // line 65
        echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
        echo "

</div>
";
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
        return array (  195 => 65,  188 => 62,  182 => 60,  176 => 58,  174 => 57,  170 => 56,  165 => 54,  158 => 50,  154 => 48,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  130 => 41,  126 => 40,  110 => 27,  105 => 25,  97 => 20,  91 => 16,  85 => 15,  73 => 9,  68 => 8,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pedido/edit.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/pedido/edit.html.twig");
    }
}
