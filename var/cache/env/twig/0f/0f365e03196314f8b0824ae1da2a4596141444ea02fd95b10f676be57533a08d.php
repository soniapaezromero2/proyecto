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

/* base.html.twig */
class __TwigTemplate_8a1ddd812e3dd2cb0b3a7ba72cad0d1b483463f8d67c6921b745c7c20ce665b7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
</head>
<body style=\"background-image:url('../public/images/fondo.jpg');height:auto;  \">

<nav class=\"navbar navbar-expand navbar-dark bg-primary\"> <a href=\"#menu-toggle\" id=\"menu-toggle\" class=\"navbar-brand\"><span class=\"navbar-toggler-icon\"></span></a> <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample02\" aria-controls=\"navbarsExample02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarsExample02\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\"> <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">Productos <span class=\"sr-only\">(current)</span></a> </li>
             <li class=\"nav-item active\"> <a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Salir <span class=\"sr-only\">(current)</span></a> </li>
            <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" class=\"btn btn-primary\"style=\"color: white;with: 25px;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewBox=\"0 0 16 16\">
                        <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
                        <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                    </svg>                    Cart
                </a></li>
        <form class=\"form-inline my-2 my-md-0\"> </form>

                ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Admin</a>
                    </li>
                ";
        }
        // line 42
        echo "            </ul>
            ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "                <div class=\"dropdown\" style=\"align-content: center\">
                    <button
                            class=\"dropdown-toggle btn\"
                            type=\"button\"
                            id=\"user-dropdown\"
                            data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\"
                    >
                       <img
                               src=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "avatarUri", [], "any", false, false, false, 53), "html", null, true);
            echo "\"
                               alt=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo " Avatar\">
                       ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo "

                   </button>

                    <div class=\"dropdown-content\">
                        <ul>
                            <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">My profile</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            ";
        } else {
            // line 71
            echo "                <a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;with: 25px;margin-right: 25px;margin-left: 100px\">Log In</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: white;with: 25px;margin-right: 25px;\">Sign up</a>
            ";
        }
        // line 74
        echo "        </div>
    </ul>
    </div>
</nav>
    ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 79
            echo "        <div id=\"wrapper\" class=\"toggled\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\"> <a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Home</a></li>
                    <li> <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\">Usuarios</a> </li>
                    <li> <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria_index");
            echo "\">Categorias</a> </li>
                    <li> <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
            echo "\">Clientes</a> </li>
                    <li> <a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            echo "\">Productos</a> </li>
                    <li> <a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            echo "\">Pedidos</a> </li>
                    <li> <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_index");
            echo "\">Stocks</a> </li>
                    <li> <a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_index");
            echo "\">Consultas</a> </li>
                    <li> <a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            echo "\">Novedades</a> </li>
                    <li> <a href=\"\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"\">Salir</a> </li>

                </ul>
            </div> <!-- /#sidebar-wrapper -->

        </div>
    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 99
            echo "    <div id=\"wrapper\" class=\"toggled\">
        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\"> <a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Mi perfil</a></li>
                <li> <a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
            echo "\">Mis datos</a> </li>
                <li> <a href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            echo "\">Mis pedidos</a> </li>
                <li> <a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_new");
            echo "\">Consultanos</a> </li>
                <li> <a href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            echo "\">Novedades</a> </li>
                <li> <a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            echo "\">Usuario</a> </li>


            </ul>
        </div> <!-- /#sidebar-wrapper -->
    </div>
    ";
        } else {
            // line 115
            echo "        <div id=\"wrapper\" class=\"toggled\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\"> <a href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">Home</a></li>
                    <li> <a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            echo "\">Productos</a> </li>
                    <li> <a href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_new");
            echo "\">Consultanos</a> </li>
                    <li> <a href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            echo "\">Novedades</a> </li>
                    <li> <a href=\"";
            // line 123
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrate</a> </li>


                    <li> <a href=\"\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\"\">Principal</a> </li>

                </ul>
            </div> <!-- /#sidebar-wrapper -->
        </div>

";
        }
        // line 133
        echo "
";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "flashes", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 136
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
        ";
                // line 137
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "<footer class=\"mt-5 p-3 text-center\">
    Derechos de autor<i style=\"color: red;\" class=\"fa fa-heart\"></i>Sonia Paez <a style=\"color: #444; text-decoration: underline;\" href=\"https://symfonycasts.com\"></a>
</footer>
";
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 176
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Spartan&display=swap\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css")), "html", null, true);
        echo "\">
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!------ Include the above in your HEAD tag ---------->
        ";
        // line 18
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 145
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 146
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
    <script>
        \$(function(){
            \$(\"#menu-toggle\").click(function(e) {
                e.preventDefault();
                \$(\"#wrapper\").toggleClass(\"toggled\");
            });

            \$(window).resize(function(e) {
                if(\$(window).width()<=768){
                    \$(\"#wrapper\").removeClass(\"toggled\");
                }else{
                    \$(\"#wrapper\").addClass(\"toggled\");
                }
            });
        });

    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 153,  405 => 152,  396 => 146,  389 => 145,  380 => 18,  372 => 13,  367 => 11,  361 => 7,  354 => 6,  341 => 5,  332 => 176,  330 => 152,  325 => 149,  323 => 145,  320 => 144,  304 => 137,  299 => 136,  295 => 135,  291 => 134,  288 => 133,  278 => 126,  272 => 123,  268 => 122,  264 => 121,  260 => 120,  256 => 119,  250 => 115,  240 => 108,  236 => 107,  232 => 106,  228 => 105,  224 => 104,  220 => 103,  214 => 99,  204 => 92,  200 => 91,  196 => 90,  192 => 89,  188 => 88,  184 => 87,  180 => 86,  176 => 85,  172 => 84,  168 => 83,  162 => 79,  160 => 78,  154 => 74,  149 => 72,  144 => 71,  135 => 65,  129 => 62,  119 => 55,  115 => 54,  111 => 53,  100 => 44,  98 => 43,  95 => 42,  89 => 39,  86 => 38,  84 => 37,  73 => 29,  69 => 28,  65 => 27,  56 => 20,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Spartan&display=swap\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('build/app.css'))}}\">
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!------ Include the above in your HEAD tag ---------->
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

</head>
<body style=\"background-image:url('../public/images/fondo.jpg');height:auto;  \">

<nav class=\"navbar navbar-expand navbar-dark bg-primary\"> <a href=\"#menu-toggle\" id=\"menu-toggle\" class=\"navbar-brand\"><span class=\"navbar-toggler-icon\"></span></a> <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample02\" aria-controls=\"navbarsExample02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarsExample02\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\"> <a class=\"nav-link\" href=\"{{ path('app_producto_index') }}\">Productos <span class=\"sr-only\">(current)</span></a> </li>
             <li class=\"nav-item active\"> <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Salir <span class=\"sr-only\">(current)</span></a> </li>
            <li><a href=\"{{ path('cart') }}\" class=\"btn btn-primary\"style=\"color: white;with: 25px;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewBox=\"0 0 16 16\">
                        <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
                        <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                    </svg>                    Cart
                </a></li>
        <form class=\"form-inline my-2 my-md-0\"> </form>

                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">Admin</a>
                    </li>
                {% endif %}
            </ul>
            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                <div class=\"dropdown\" style=\"align-content: center\">
                    <button
                            class=\"dropdown-toggle btn\"
                            type=\"button\"
                            id=\"user-dropdown\"
                            data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\"
                    >
                       <img
                               src=\"{{ app.user.avatarUri }}\"
                               alt=\"{{ app.user.name }} Avatar\">
                       {{ app.user.name }}

                   </button>

                    <div class=\"dropdown-content\">
                        <ul>
                            <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">My profile</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            {% else %}
                <a class=\"btn btn-primary\" href=\"{{ path('app_login') }}\" style=\"color: white;with: 25px;margin-right: 25px;margin-left: 100px\">Log In</a>
                <a class=\"btn btn-primary\" href=\"{{ path('app_register') }}\" style=\"color: white;with: 25px;margin-right: 25px;\">Sign up</a>
            {% endif %}
        </div>
    </ul>
    </div>
</nav>
    {% if is_granted('ROLE_ADMIN') %}
        <div id=\"wrapper\" class=\"toggled\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\"> <a href=\"{{ path('admin_dashboard') }}\">Home</a></li>
                    <li> <a href=\"{{ path('app_user_index') }}\">Usuarios</a> </li>
                    <li> <a href=\"{{ path('app_categoria_index') }}\">Categorias</a> </li>
                    <li> <a href=\"{{ path('app_cliente_index') }}\">Clientes</a> </li>
                    <li> <a href=\"{{ path('app_producto_index') }}\">Productos</a> </li>
                    <li> <a href=\"{{ path('app_pedido_index') }}\">Pedidos</a> </li>
                    <li> <a href=\"{{ path('app_stock_index') }}\">Stocks</a> </li>
                    <li> <a href=\"{{ path('app_consulta_index') }}\">Consultas</a> </li>
                    <li> <a href=\"{{ path('app_novedades_index') }}\">Novedades</a> </li>
                    <li> <a href=\"\"{{ path('app_logout') }}\"\">Salir</a> </li>

                </ul>
            </div> <!-- /#sidebar-wrapper -->

        </div>
    {% elseif is_granted('ROLE_USER')%}
    <div id=\"wrapper\" class=\"toggled\">
        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\"> <a href=\"{{ path('app_profile') }}\">Mi perfil</a></li>
                <li> <a href=\"{{ path('app_cliente_index') }}\">Mis datos</a> </li>
                <li> <a href=\"{{ path('app_pedido_index')}}\">Mis pedidos</a> </li>
                <li> <a href=\"{{ path('app_consulta_new') }}\">Consultanos</a> </li>
                <li> <a href=\"{{ path('app_novedades_index') }}\">Novedades</a> </li>
                <li> <a href=\"{{ path('app_user_new') }}\">Usuario</a> </li>


            </ul>
        </div> <!-- /#sidebar-wrapper -->
    </div>
    {% else %}
        <div id=\"wrapper\" class=\"toggled\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\"> <a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li> <a href=\"{{ path('app_producto_index')}}\">Productos</a> </li>
                    <li> <a href=\"{{ path('app_consulta_new') }}\">Consultanos</a> </li>
                    <li> <a href=\"{{ path('app_novedades_index') }}\">Novedades</a> </li>
                    <li> <a href=\"{{ path('app_register') }}\">Registrate</a> </li>


                    <li> <a href=\"\"{{ path('app_home') }}\"\">Principal</a> </li>

                </ul>
            </div> <!-- /#sidebar-wrapper -->
        </div>

{% endif %}

{% for label, messages in app.flashes %}
{% for message in messages %}
    <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
        {{ message }}
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
 {% endfor %}
{% endfor %}

{% block body %}


{% endblock %}
<footer class=\"mt-5 p-3 text-center\">
    Derechos de autor<i style=\"color: red;\" class=\"fa fa-heart\"></i>Sonia Paez <a style=\"color: #444; text-decoration: underline;\" href=\"https://symfonycasts.com\"></a>
</footer>
{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
    <script>
        \$(function(){
            \$(\"#menu-toggle\").click(function(e) {
                e.preventDefault();
                \$(\"#wrapper\").toggleClass(\"toggled\");
            });

            \$(window).resize(function(e) {
                if(\$(window).width()<=768){
                    \$(\"#wrapper\").removeClass(\"toggled\");
                }else{
                    \$(\"#wrapper\").addClass(\"toggled\");
                }
            });
        });

    </script>


{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/base.html.twig");
    }
}
