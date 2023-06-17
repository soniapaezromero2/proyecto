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

/* producto/show.html.twig */
class __TwigTemplate_40d0f0294889cc0c813cd8d78a2043729000abb93e5ced3664fb911c10713a62 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "producto/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Producto";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">



    <h1 style=\"text-align: center;margin-left: 10px;\">Producto</h1>
    <table class=\"table\" style=\"width: 750px;margin-right: 0px;\">
        <tbody>
        <tr>

            <td style=\"align-items: center;\"><img  src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "imageName", [], "any", false, false, false, 15), "html", null, true);
        echo "\" style=\"align-items: center;\"></td>

        </tr>
            <tr style=\"text-align: left;\">
                <th>Id</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Name</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Precio</th>
                <th>";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "precio", [], "any", false, false, false, 28), 2, ",", "."), "html", null, true);
        echo "€ </td></th>
            </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 36
        echo twig_include($this->env, $context, "producto/_delete_form.html.twig");
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "producto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  104 => 34,  99 => 32,  92 => 28,  85 => 24,  78 => 20,  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "producto/show.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/producto/show.html.twig");
    }
}
