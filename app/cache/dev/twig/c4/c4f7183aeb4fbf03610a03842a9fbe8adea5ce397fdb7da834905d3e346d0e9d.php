<?php

/* MyAppUserBundle::gridLayout.html.twig */
class __TwigTemplate_306f193c13d1a89bb4395abe5f1109e941da8e263efccd0ad02dc92104b23686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nomuser' => array($this, 'block_nomuser'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">



        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Morris Charts CSS -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>

    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">

                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>


                </div>

                <!-- Top Menu Items -->
                <ul class=\"nav navbar-right top-nav\">



                    <li class=\"dropdown\">


                    </li>


                    <li class=\"dropdown\">
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        $this->displayBlock('nomuser', $context, $blocks);
        echo " <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <i class=\"fa fa-fw fa-gear\"> <a  href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublie?</a></i>
                            </li>
                            <li>
                                <i class=\"fa fa-fw fa-gear\"> <a  href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Profile</a></i>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <i class=\"fa fa-fw fa-power-off\"><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></i>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            </nav>

            <div id=\"page-wrapper\">



                <!-- Page Heading -->
                ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "                ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 90
        echo "
                <!-- /.row -->


                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Morris Charts JavaScript -->
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 113
        $this->displayBlock('script', $context, $blocks);
        // line 114
        echo "</body>

</html>
";
    }

    // line 65
    public function block_nomuser($context, array $blocks = array())
    {
    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 89
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 113
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::gridLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 113,  208 => 89,  202 => 88,  197 => 65,  190 => 114,  188 => 113,  184 => 112,  180 => 111,  176 => 110,  172 => 109,  166 => 106,  160 => 103,  145 => 90,  142 => 89,  140 => 88,  122 => 75,  115 => 71,  109 => 68,  101 => 65,  57 => 24,  51 => 21,  45 => 18,  39 => 15,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/* */
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{asset('bundles/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{asset('bundles/css/sb-admin.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Morris Charts CSS -->*/
/*         <link href="{{asset('bundles/css/plugins/morris.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Custom Fonts -->*/
/*         <link href="{{asset('bundles/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <div id="wrapper">*/
/* */
/*             <!-- Navigation -->*/
/*             <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/* */
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 <!-- Top Menu Items -->*/
/*                 <ul class="nav navbar-right top-nav">*/
/* */
/* */
/* */
/*                     <li class="dropdown">*/
/* */
/* */
/*                     </li>*/
/* */
/* */
/*                     <li class="dropdown">*/
/*                         <a href="{{path('fos_user_profile_edit')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {%block nomuser %}{%endblock nomuser %} <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <i class="fa fa-fw fa-gear"> <a  href="{{ path('fos_user_resetting_request') }}">Mot de passe oublie?</a></i>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <i class="fa fa-fw fa-gear"> <a  href="{{path('fos_user_profile_edit')}}">Profile</a></i>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <i class="fa fa-fw fa-power-off"><a href="{{ path('fos_user_security_logout') }}">{{'layout.logout'|trans({}, 'FOSUserBundle')}}</a></i>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/*             </nav>*/
/* */
/*             <div id="page-wrapper">*/
/* */
/* */
/* */
/*                 <!-- Page Heading -->*/
/*                 {%block body %} {%endblock body %}*/
/*                 {% block fos_user_content %} {% endblock fos_user_content %}*/
/* */
/*                 <!-- /.row -->*/
/* */
/* */
/*                 <!-- /.container-fluid -->*/
/* */
/*             </div>*/
/*             <!-- /#page-wrapper -->*/
/* */
/*         </div>*/
/*         <!-- /#wrapper -->*/
/* */
/*         <!-- jQuery -->*/
/*         <script src="{{asset('bundles/js/jquery.js')}}"></script>*/
/* */
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="{{asset('bundles/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <!-- Morris Charts JavaScript -->*/
/*         <script src="{{asset('bundles/js/plugins/morris/raphael.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/js/plugins/morris/morris.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/js/plugins/morris/morris-data.js')}}"></script>*/
/*         <script src="{{asset ('bundles/table.js')}}"></script>*/
/*     {% block script %}{% endblock script %}*/
/* </body>*/
/* */
/* </html>*/
/* */
