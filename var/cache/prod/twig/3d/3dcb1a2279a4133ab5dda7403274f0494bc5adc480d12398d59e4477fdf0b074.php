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

/* registration/resend_verify_email.html.twig */
class __TwigTemplate_a8ba4eb53d80774f2f6f569738e9374039047d01db240676fc465a0ac42f6cdb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/resend_verify_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Verify Email";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
        <div class=\"row\" style=\"background: navajowhite;\">
            <div class=\"login-form bg-light mt-4 p-4\"style=\"background: navajowhite;margin-left: 50px;\">
                <h1 class=\"h3 mb-3 font-weight-normal\">Verify your Email</h1>

                <p>
                    A verification email was sent - please click it to enable your
                    account before logging in.
                </p>

                <a href=\"#\" class=\"btn btn-primary\">Re-send Email</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "registration/resend_verify_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/resend_verify_email.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/registration/resend_verify_email.html.twig");
    }
}
