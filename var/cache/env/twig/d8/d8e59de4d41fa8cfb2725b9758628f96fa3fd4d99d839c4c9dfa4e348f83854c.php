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

/* security/login.html.twig */
class __TwigTemplate_a44662d50a15df613212a18bc8c24a1c43eeabf7b6cce469edcbf441fa477d37 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log In!";
        
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
        <div class=\"row\" style=\"background: navajowhite\">
            <div class=\"login-form bg-light mt-4 p-4\" style=\"margin-left: 50px\">
                <form method=\"post\" class=\"row g-3\" style=\"align-content:center\">
                    <h1 class=\"h3 mb-3 font-weight-normal\"style=\"text-align: center\">Please sign in</h1>

                    ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 15
        echo "
                    <div class=\"col-12\">
                        <label for=\"inputEmail\"style=\"text-align: center\">Email</label>
                        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" required autofocus>
                    </div>
                    <div class=\"col-12\">
                        <label for=\"inputPassword\" style=\"text-align: center\">Password</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-12\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                    <label for=\"remember_me\">Recuérdame</label>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >

                    <div class=\"form-12\">

                        <button class=\"btn btn-lg btn-primary \" type=\"submit\">
                            Sign in
                        </button>
                        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-lg btn-primary\" style=\"margin-left: 100px;\">Registrate</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  108 => 29,  94 => 18,  89 => 15,  83 => 13,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log In!{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
        <div class=\"row\" style=\"background: navajowhite\">
            <div class=\"login-form bg-light mt-4 p-4\" style=\"margin-left: 50px\">
                <form method=\"post\" class=\"row g-3\" style=\"align-content:center\">
                    <h1 class=\"h3 mb-3 font-weight-normal\"style=\"text-align: center\">Please sign in</h1>

                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    <div class=\"col-12\">
                        <label for=\"inputEmail\"style=\"text-align: center\">Email</label>
                        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" value=\"{{ last_username }}\" required autofocus>
                    </div>
                    <div class=\"col-12\">
                        <label for=\"inputPassword\" style=\"text-align: center\">Password</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-12\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                    <label for=\"remember_me\">Recuérdame</label>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >

                    <div class=\"form-12\">

                        <button class=\"btn btn-lg btn-primary \" type=\"submit\">
                            Sign in
                        </button>
                        <a href=\"{{ path('app_register') }}\" class=\"btn btn-lg btn-primary\" style=\"margin-left: 100px;\">Registrate</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/security/login.html.twig");
    }
}
