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
class __TwigTemplate_57efb58d8c6ea04d1741156e88e7730a34db6d0a82bf3f40a6dc6db8215e4ccf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "producto/showcategorias.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"container\" style=\"background: navajowhite;border: 0;margin-left: 10px;margin-top: 10px;\">
    <p></p>
        <p></p>
        <p></p>
        <p></p>
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
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
        return array (  135 => 44,  131 => 42,  122 => 38,  113 => 34,  109 => 33,  105 => 32,  99 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  79 => 24,  74 => 23,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "producto/showcategorias.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/producto/showcategorias.html.twig");
    }
}
