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

/* producto/detail.html.twig */
class __TwigTemplate_3f40747524984373c8a4931ef9f335cf9ef86e0808fe490bcd3e4b45fd335f2e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "producto/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\" style=\"background: navajowhite;border: 0;\">

<div class=\"col-md-8\">
        <p></p>
        <div class=\"flex-fill mr-2\" style=\"margin-top: 10px;\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imageName", [], "any", false, false, false, 9), "html", null, true);
        echo "\" width=\"250\" alt=\"Product image\">
        </div>
        <p></p>
        <p></p>
        <p></p>
        <h2 class=\"mt-4 mt-md-0\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
        <h3>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "precio", [], "any", false, false, false, 15), "html", null, true);
        echo " €</h3>
        <hr>
        <b>Description: </b>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "mt-4 p-4 bg-light"]]);
        echo "
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 20), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => ("form-control " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["form"] ?? null), "quantity", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "valid", [], "any", false, false, false, 23)) ? ("") : ("is-invalid")))]]);
        // line 25
        echo "
            <div class=\"invalid-feedback\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 27), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "btn btn-warning w-25"]]);
        echo "
        <a class=\"btn btn-warning w-25\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">Volver a listado</a>
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</div>
";
    }

    // line 37
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "producto/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  110 => 32,  106 => 31,  102 => 30,  96 => 27,  92 => 25,  90 => 23,  89 => 21,  85 => 20,  80 => 18,  76 => 17,  71 => 15,  67 => 14,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "producto/detail.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/producto/detail.html.twig");
    }
}
