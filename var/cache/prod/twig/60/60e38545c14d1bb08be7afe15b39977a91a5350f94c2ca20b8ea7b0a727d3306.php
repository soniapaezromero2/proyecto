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

/* menuadmin.html.twig */
class __TwigTemplate_b67553df5b29a03ab35173002fdef757038f7a48f9cf0160e34e94fd13b51895 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<   <!-- Bootstrap 5 CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<nav class='animated bounceInDown bg-dark' id=\"vertical\">
    <ul>
        <li><a href='#profile'>Profile</a></li>
        <li><a href='#message'>Messages</a></li>
        <li class='sub-menu'><a href='#settings'>Settings<div class='fa fa-caret-down right'></div></a>
            <ul>
                <li><a href='#settings'>Account</a></li>
                <li><a href='#settings'>Profile</a></li>
                <li><a href='#settings'>Secruity & Privacy</a></li>
                <li><a href='#settings'>Password</a></li>
                <li><a href='#settings'>Notification</a></li>
            </ul>
        </li>
        <li class='sub-menu'><a href='#message'>Help<div class='fa fa-caret-down right'></div></a>
            <ul>
                <li><a href='#settings'>FAQ's</a></li>
                <li><a href='#settings'>Submit a Ticket</a></li>
                <li><a href='#settings'>Network Status</a></li>
            </ul>
        </li>
        <li><a href='#message'>Logout</a></li>
    </ul>
</nav>

";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "<script>
    \$('.sub-menu ul').hide();
    \$(\".sub-menu a\").click(function () {
        \$(this).parent(\".sub-menu\").children(\"ul\").slideToggle(\"100\");
        \$(this).find(\".right\").toggleClass(\"fa-caret-up fa-caret-down\");
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "menuadmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  68 => 29,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menuadmin.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/menuadmin.html.twig");
    }
}
