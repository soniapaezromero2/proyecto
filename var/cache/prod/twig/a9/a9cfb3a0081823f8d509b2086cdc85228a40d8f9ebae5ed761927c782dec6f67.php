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

/* producto/index.html.twig */
class __TwigTemplate_4e3fec1a70944e0dea09be80eb8297e4e04bed159bd018b80e976cff458921cb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Producto index";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"dropdown\" style=\"align-content: center; opacity:50%\">
        <button
                class=\"dropdown-toggle btn\"
                type=\"button\"
                id=\"user-dropdown\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
        >Elige que categoria quieres Ver

        </button>

        <div class=\"dropdown-content\" style=\"background:#dfdfdf;align-content: center; color:black;\">
            <ul>
                <li>
                    <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\" style=\"color:black\">Todos los productos</a>
                </li>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 22
            echo "                <li>
                    <a class=\"dropdown-item\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_categoria", ["id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\"style=\"color: black\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>
        </div>
    </div>
    <div class=\"container\" style=\"background: navajowhite;border: 0;margin-left: 10px;with:1000px;margin-top: 10px;\">

    <p></p>
        <p></p>
        <p></p>
        <p></p>
        <h1>Producto index</h1>
        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_new");
        echo "\">Create new</a>
        <table class=\"table\" style=\"width: 1000px;margin-left: 20px;\">
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 50
            echo "                <tr>
                    <td class=\"table-info\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "imageName", [], "any", false, false, false, 54), "html", null, true);
            echo "\"  height=\"50\"></td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 55), 2, ",", "."), "html", null, true);
            echo "€ </td>
                    <td>
                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">show</a>
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">edit</a>
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">Añadir al carrito</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
        </table>

    </div>
";
    }

    public function getTemplateName()
    {
        return "producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  172 => 63,  163 => 59,  159 => 58,  155 => 57,  150 => 55,  145 => 54,  141 => 53,  137 => 52,  133 => 51,  130 => 50,  125 => 49,  109 => 36,  97 => 26,  86 => 23,  83 => 22,  79 => 21,  74 => 19,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "producto/index.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/producto/index.html.twig");
    }
}
