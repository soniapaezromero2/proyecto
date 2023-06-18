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

/* consulta/new.html.twig */
class __TwigTemplate_97eca749c45069313a909ac57c83bb1182acf3ef22c2399b86d22be6ffad5582 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consulta/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consulta/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Consulta";
        
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
    <h1>Create new Consulta</h1>


    ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED")) {
            // line 11
            echo "        <label for=\"email\">Introduce tu emil para que te respondamos tu consulta.Te contestaremos con la mayor brevedad posible<br><br></label>
        <p></p>
        <input type=\"email\" id=\"email\" style=\"width: 1100px; border-radius: 5px;border-color:lightgrey \"
              value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consultum"]) || array_key_exists("consultum", $context) ? $context["consultum"] : (function () { throw new RuntimeError('Variable "consultum" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
            echo "\" required>
        ";
            // line 15
            echo twig_include($this->env, $context, "consulta/_form.html.twig");
            echo "
     ";
        } else {
            // line 17
            echo "       ¡
         ";
            // line 18
            echo twig_include($this->env, $context, "consulta/_form.html.twig");
            echo "
     ";
        }
        // line 20
        echo "
    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_index");
        echo "\"class=\"btn btn-info w-25\">back to list</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "consulta/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  103 => 20,  98 => 18,  95 => 17,  90 => 15,  86 => 14,  81 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Consulta{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <h1>Create new Consulta</h1>


    {% if is_granted('IS_AUTHENTICATED')%}
        <label for=\"email\">Introduce tu emil para que te respondamos tu consulta.Te contestaremos con la mayor brevedad posible<br><br></label>
        <p></p>
        <input type=\"email\" id=\"email\" style=\"width: 1100px; border-radius: 5px;border-color:lightgrey \"
              value=\"{{ consultum.email }}\" required>
        {{ include('consulta/_form.html.twig') }}
     {% else %}
       ¡
         {{ include('consulta/_form.html.twig') }}
     {% endif %}

    <a href=\"{{ path('app_consulta_index') }}\"class=\"btn btn-info w-25\">back to list</a>
    </div>
{% endblock %}
", "consulta/new.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/consulta/new.html.twig");
    }
}
