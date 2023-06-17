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
class __TwigTemplate_fe929ba8c7ca4dccfd83b95096bc8b790f32ddb560083ab21ea5e6ab34da4a0d extends \Twig\Template
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
            <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" class=\"btn btn-primary\"style=\"color: white;with: 25px;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewBox=\"0 0 16 16\">
                        <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
                        <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                    </svg>                    Cart
                </a></li>
        <form class=\"form-inline my-2 my-md-0\"> </form>

                ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Admin</a>
                    </li>
                ";
        }
        // line 41
        echo "            </ul>
            ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
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
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52), "avatarUri", [], "any", false, false, false, 52), "html", null, true);
            echo "\"
                               alt=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            echo " Avatar\">
                       ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "

                   </button>

                    <div class=\"dropdown-content\">
                        <ul>
                            <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">My profile</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            ";
        } else {
            // line 70
            echo "                <a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;with: 25px;margin-right: 25px;margin-left: 100px\">Log In</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: white;with: 25px;margin-right: 25px;\">Sign up</a>
            ";
        }
        // line 73
        echo "        </div>
    </ul>
    </div>
</nav>
    ";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "        <div id=\"wrapper\" class=\"toggled\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\"> <a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Home</a></li>
                    <li> <a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\">Usuarios</a> </li>
                    <li> <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria_index");
            echo "\">Categorias</a> </li>
                    <li> <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
            echo "\">Clientes</a> </li>
                    <li> <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            echo "\">Productos</a> </li>
                    <li> <a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            echo "\">Pedidos</a> </li>
                    <li> <a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_index");
            echo "\">Stocks</a> </li>
                    <li> <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_index");
            echo "\">Consultas</a> </li>
                    <li> <a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            echo "\">Novedades</a> </li>
                    <li> <a href=\"\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"\">Salir</a> </li>

                </ul>
            </div> <!-- /#sidebar-wrapper -->

        </div>
    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 98
            echo "    <div id=\"wrapper\" class=\"toggled\">
        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\"> <a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Mi perfil</a></li>
                <li> <a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
            echo "\">Mis datos</a> </li>
                <li> <a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            echo "\">Mis pedidos</a> </li>
                <li> <a href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_new");
            echo "\">Consultanos</a> </li>
                <li> <a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            echo "\">Novedades</a> </li>
                <li> <a href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            echo "\">Usuario</a> </li>


            </ul>
        </div> <!-- /#sidebar-wrapper -->
    </div>
    ";
        } else {
            // line 114
            echo "        <div id=\"wrapper\" class=\"toggled\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\"> <a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">Home</a></li>
                    <li> <a href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            echo "\">Productos</a> </li>
                    <li> <a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_new");
            echo "\">Consultanos</a> </li>
                    <li> <a href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            echo "\">Novedades</a> </li>
                    <li> <a href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrate</a> </li>


                    <li> <a href=\"\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\"\">Principal</a> </li>

                </ul>
            </div> <!-- /#sidebar-wrapper -->
        </div>

";
        }
        // line 132
        echo "
";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 135
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
        ";
                // line 136
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
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "<footer class=\"mt-5 p-3 text-center\">
    Derechos de autor<i style=\"color: red;\" class=\"fa fa-heart\"></i>Sonia Paez <a style=\"color: #444; text-decoration: underline;\" href=\"https://symfonycasts.com\"></a>
</footer>
";
        // line 151
        $this->displayBlock('javascripts', $context, $blocks);
        // line 175
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 144
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "

";
    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
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
        return array (  381 => 152,  377 => 151,  371 => 145,  367 => 144,  361 => 18,  353 => 13,  348 => 11,  342 => 7,  338 => 6,  331 => 5,  325 => 175,  323 => 151,  318 => 148,  316 => 144,  313 => 143,  297 => 136,  292 => 135,  288 => 134,  284 => 133,  281 => 132,  271 => 125,  265 => 122,  261 => 121,  257 => 120,  253 => 119,  249 => 118,  243 => 114,  233 => 107,  229 => 106,  225 => 105,  221 => 104,  217 => 103,  213 => 102,  207 => 98,  197 => 91,  193 => 90,  189 => 89,  185 => 88,  181 => 87,  177 => 86,  173 => 85,  169 => 84,  165 => 83,  161 => 82,  155 => 78,  153 => 77,  147 => 73,  142 => 71,  137 => 70,  128 => 64,  122 => 61,  112 => 54,  108 => 53,  104 => 52,  93 => 43,  91 => 42,  88 => 41,  82 => 38,  79 => 37,  77 => 36,  66 => 28,  62 => 27,  53 => 20,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/soniapaezromerostoreonline.live/StoreProjectSoniaPaez/templates/base.html.twig");
    }
}
