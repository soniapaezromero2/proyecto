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
class __TwigTemplate_552133f9b92146bb7dc831aee6072bd409b867e4821931e5e4065e4304b3f5f0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "consulta/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Consulta";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["consultum"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true);
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
        echo "\">back to list</a>
    </div>
";
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
        return array (  91 => 21,  88 => 20,  83 => 18,  80 => 17,  75 => 15,  71 => 14,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "consulta/new.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/consulta/new.html.twig");
    }
}
