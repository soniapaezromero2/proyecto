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

/* cart/index.html.twig */
class __TwigTemplate_8300586ba93324faa713794a89e21e80d566e6ee66d481e14f994a37ec387940 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Carrito";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <div class=\"container mt-4\" style=\"background: navajowhite;border: 0;\">
        <h1>Your Cart</h1>
        ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 0)) {
            // line 10
            echo "            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-auto\">
                                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
            echo "
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "clear", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "btn btn-light"]]);
            echo "
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "items", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "                                <li class=\"list-group-item d-flex\">
                                    <div class=\"flex-fill mr-2\">
                                        <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 25), "data", [], "any", false, false, false, 25), "product", [], "any", false, false, false, 25), "imageName", [], "any", false, false, false, 25), "html", null, true);
                echo "\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"flex-fill mr-2\">
                                        <h5 class=\"mt-0 mb-0\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 28), "data", [], "any", false, false, false, 28), "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</h5>
                                        <small>";
                // line 29
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29), "product", [], "any", false, false, false, 29), "description", [], "any", false, false, false, 29), 0, 50), "html", null, true);
                echo "...</small>
                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                ";
                // line 32
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => ("form-control form-control-sm " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 34
$context["item"], "quantity", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "valid", [], "any", false, false, false, 34)) ? ("") : ("is-invalid")))]]);
                // line 36
                echo "
                                                <div class=\"invalid-feedback\">
                                                    ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 38), 'errors');
                echo "
                                                </div>
                                            </div>
                                            ";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "remove", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "btn btn-dark btn-sm"]]);
                echo "
                                        </div>
                                    </div>
                                    <div class=\"flex-fill mr-2 text-right\">
                                        <b>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 45), "data", [], "any", false, false, false, 45), "product", [], "any", false, false, false, 45), "precio", [], "any", false, false, false, 45), "html", null, true);
                echo " €</b>
                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                        </ul>
                    </div>
                    ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
            echo "
                </div>
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between\">
                                <div><b>Total</b></div>
                                <span><b>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 60), "html", null, true);
            echo " €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_new");
            echo "\" class=\"btn btn-warning w-100\">Crear pedido</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
            </div>
        ";
        } else {
            // line 71
            echo "            <div class=\"alert alert-info\">
                Your cart is empty. Go to the <a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            echo "\">product list</a>.
            </div>
        ";
        }
        // line 75
        echo "    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 75,  179 => 72,  176 => 71,  166 => 64,  159 => 60,  147 => 51,  143 => 49,  133 => 45,  126 => 41,  120 => 38,  116 => 36,  114 => 34,  113 => 32,  107 => 29,  103 => 28,  96 => 25,  92 => 23,  88 => 22,  81 => 18,  77 => 17,  69 => 12,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/cart/index.html.twig");
    }
}
