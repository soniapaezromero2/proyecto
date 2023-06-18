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
class __TwigTemplate_905f461b1270cb4690c4980fc8716cefeb673d23a7e7949c060dbddde14f421a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Carrito";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <div class=\"container mt-4\" style=\"background: navajowhite;border: 0;\">
        <h1>Your Cart</h1>
        ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 0)) {
            // line 10
            echo "            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
            echo "
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-auto\">
                                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "save", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
            echo "
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "clear", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "btn btn-light"]]);
            echo "
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "items", [], "any", false, false, false, 22));
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end', ["render_rest" => false]);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 60, $this->source); })()), "total", [], "any", false, false, false, 60), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  200 => 75,  194 => 72,  191 => 71,  181 => 64,  174 => 60,  162 => 51,  158 => 49,  148 => 45,  141 => 41,  135 => 38,  131 => 36,  129 => 34,  128 => 32,  122 => 29,  118 => 28,  111 => 25,  107 => 23,  103 => 22,  96 => 18,  92 => 17,  84 => 12,  80 => 10,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carrito{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <div class=\"container mt-4\" style=\"background: navajowhite;border: 0;\">
        <h1>Your Cart</h1>
        {% if cart.items.count > 0 %}
            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
                    {{ form_start(form) }}
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-auto\">
                                {{ form_widget(form.save, {'attr': {'class': 'btn btn-warning'}}) }}
                                {{ form_widget(form.clear, {'attr': {'class': 'btn btn-light'}}) }}
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            {% for item in form.items %}
                                <li class=\"list-group-item d-flex\">
                                    <div class=\"flex-fill mr-2\">
                                        <img src=\"{{ asset('images/products/') }}{{item.vars.data.product.imageName }}\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"flex-fill mr-2\">
                                        <h5 class=\"mt-0 mb-0\">{{ item.vars.data.product.name }}</h5>
                                        <small>{{ item.vars.data.product.description[:50] }}...</small>
                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                {{ form_widget(item.quantity, {
                                                    'attr': {
                                                        'class': 'form-control form-control-sm ' ~ (item.quantity.vars.valid ? '' : 'is-invalid')
                                                    }
                                                }) }}
                                                <div class=\"invalid-feedback\">
                                                    {{ form_errors(item.quantity) }}
                                                </div>
                                            </div>
                                            {{ form_widget(item.remove, {'attr': {'class': 'btn btn-dark btn-sm'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"flex-fill mr-2 text-right\">
                                        <b>{{ item.vars.data.product.precio }} €</b>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    {{ form_end(form, {'render_rest': false}) }}
                </div>
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between\">
                                <div><b>Total</b></div>
                                <span><b>{{ cart.total }} €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"{{ path('app_pedido_new') }}\" class=\"btn btn-warning w-100\">Crear pedido</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
            </div>
        {% else %}
            <div class=\"alert alert-info\">
                Your cart is empty. Go to the <a href=\"{{ path('app_producto_index') }}\">product list</a>.
            </div>
        {% endif %}
    </div>
    </div>
{% endblock %}", "cart/index.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/cart/index.html.twig");
    }
}
