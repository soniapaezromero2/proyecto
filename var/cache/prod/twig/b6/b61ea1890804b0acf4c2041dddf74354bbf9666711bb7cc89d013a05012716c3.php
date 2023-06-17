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

/* @VichUploader/Collector/mapping_collector.html.twig */
class __TwigTemplate_cf8998c9e1938860b915e5e95189970b65919da415f3e3fcf83cef60dd36b071 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@VichUploader/Collector/mapping_collector.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        ob_start(function () { return ''; });
        // line 5
        echo "        ";
        $this->loadTemplate("@VichUploader/Collector/icon_grey.html.twig", "@VichUploader/Collector/mapping_collector.html.twig", 5)->display($context);
        // line 6
        echo "        <span class=\"sf-toolbar-value\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingsCount", [], "any", false, false, false, 6), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        ob_start(function () { return ''; });
        // line 10
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Mappings</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-grey\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingsCount", [], "any", false, false, false, 12), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
    ";
        // line 16
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
    }

    // line 19
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        // line 21
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 23
        $this->loadTemplate("@VichUploader/Collector/icon_white.html.twig", "@VichUploader/Collector/mapping_collector.html.twig", 23)->display($context);
        // line 24
        echo "        </span>
        <strong>VichUploader</strong>
    </span>
";
    }

    // line 29
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <h2>VichUploaderBundle Mappings</h2>
    <table>
        <thead>
            <tr>
                <th scope=\"col\">Field</th>
                <th scope=\"col\">Mapping</th>
                <th scope=\"col\">Filename property</th>
                <th scope=\"col\">Size property</th>
                <th scope=\"col\">Mime Type property</th>
                <th scope=\"col\">Original Name property</th>
                <th scope=\"col\">Dimensions property</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappings", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["class"] => $context["data"]) {
            // line 45
            echo "                <tr>
                    <th scope=\"row\" colspan=\"4\">";
            // line 46
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo "</th>
                </tr>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["_key"] => $context["mdata"]) {
                // line 49
                echo "                    <tr>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mdata"], "propertyName", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mdata"], "mapping", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                        <td>";
                // line 52
                echo ((twig_get_attribute($this->env, $this->source, $context["mdata"], "fileNameProperty", [], "any", true, true, false, 52)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["mdata"], "fileNameProperty", [], "any", false, false, false, 52), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                echo "</td>
                        <td>";
                // line 53
                echo ((twig_get_attribute($this->env, $this->source, $context["mdata"], "size", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["mdata"], "size", [], "any", false, false, false, 53), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                echo "</td>
                        <td>";
                // line 54
                echo ((twig_get_attribute($this->env, $this->source, $context["mdata"], "mimeType", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["mdata"], "mimeType", [], "any", false, false, false, 54), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                echo "</td>
                        <td>";
                // line 55
                echo ((twig_get_attribute($this->env, $this->source, $context["mdata"], "originalName", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["mdata"], "originalName", [], "any", false, false, false, 55), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                echo "</td>
                        <td>";
                // line 56
                echo ((twig_get_attribute($this->env, $this->source, $context["mdata"], "dimensions", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["mdata"], "dimensions", [], "any", false, false, false, 56), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mdata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['class'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "@VichUploader/Collector/mapping_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 60,  179 => 59,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  143 => 49,  139 => 48,  134 => 46,  131 => 45,  127 => 44,  111 => 30,  107 => 29,  100 => 24,  98 => 23,  94 => 21,  92 => 20,  88 => 19,  82 => 16,  79 => 15,  73 => 12,  69 => 10,  67 => 9,  64 => 8,  58 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@VichUploader/Collector/mapping_collector.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/vendor/vich/uploader-bundle/templates/Collector/mapping_collector.html.twig");
    }
}
