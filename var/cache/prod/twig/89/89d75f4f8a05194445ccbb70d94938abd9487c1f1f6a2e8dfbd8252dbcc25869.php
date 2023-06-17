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
class __TwigTemplate_db3625cb13a43d639e87425e15a145c4c3c0e77a11e8ea9916061f7a56d69f30 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["pedidos"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["stocks"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["consultas"] ?? null));
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
        return array (  199 => 76,  190 => 72,  181 => 68,  177 => 67,  174 => 66,  169 => 65,  154 => 52,  145 => 48,  137 => 45,  133 => 44,  129 => 43,  126 => 42,  121 => 41,  105 => 27,  96 => 23,  88 => 20,  84 => 19,  80 => 18,  77 => 17,  72 => 16,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/admin/dashboard.html.twig");
    }
}
