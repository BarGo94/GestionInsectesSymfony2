<?php

/* MyAppUserBundle::gridLayout.html.twig */
class __TwigTemplate_3230325feb494671f23ce1ec284f64e13d6aaa1c070e99999023aaf89f80ee44 extends Twig_Template
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

    <title>Condair plus</title>

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
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Condair plus</a>
                
            </div>
       
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                     


<li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><input type=\"button\" value=\"Imprimer\" onClick=\"window.print()\"></a>
                    
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
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    
                    <li>
                            <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-arrows-v\"></i> Depot Cite El Khadhra <i class=\"fa fa-fw fa-caret-down\"></i></a>
                            
                        <ul id=\"demo\" class=\"collapse\">
                            <li>
                                
                                 <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#quincaillerie\"><i class=\"fa fa-fw fa-arrows-v\"></i> Quincaillerie <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"quincaillerie\" class=\"collapse\">
                            <li>
                                <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutquin");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("famille_admin_listquin");
        echo "\">Gestion</a>
                            </li>
                        </ul>   
                                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#pvc\"><i class=\"fa fa-fw fa-arrows-v\"></i> Accessoire pvc <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                <ul id=\"pvc\" class=\"collapse\">
                            <li>
                                
                                <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutpvc");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("famille_admin_listpvc");
        echo "\">Gestion</a>
                            </li>
                        </ul>
                                       <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#pvc-c\"><i class=\"fa fa-fw fa-arrows-v\"></i> Accessoire pvc-c <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"pvc-c\" class=\"collapse\">
                            <li>
                                
                                <a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutpvcc");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("famille_admin_listpvcc");
        echo "\">Gestion</a>
                            </li>
                        </ul>          
                                       <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#pvc-v\"><i class=\"fa fa-fw fa-arrows-v\"></i> Accessoire pvc-v <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"pvc-v\" class=\"collapse\">
                            <li>
                                
                                <a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutpvcc");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("famille_admin_listpvcc");
        echo "\">Gestion</a>
                            </li>
                        </ul>
                                          <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#ppr\"><i class=\"fa fa-fw fa-arrows-v\"></i> Accessoire ppr <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"ppr\" class=\"collapse\">
                            <li>
                                 <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutppr");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                 <a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("famille_admin_listppr");
        echo "\">Gestion</a>
                            </li>
                        </ul>
                                             <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#pvr\"><i class=\"fa fa-fw fa-arrows-v\"></i> Accessoire pvr <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"pvr\" class=\"collapse\">
                            <li>
                                 <a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutpvr");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                 <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("famille_admin_listpvr");
        echo "\">Gestion</a>
                            </li>
                        </ul>
                                                <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#cuivrelaitoninox\"><i class=\"fa fa-fw fa-arrows-v\"></i> Accessoire cuivre,laiton,inox <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"cuivrelaitoninox\" class=\"collapse\">
                            <li>
                                <a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutcula");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("famille_admin_listcula");
        echo "\">Gestion</a>
                            </li>
                        </ul>
                                                   <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#sibec\"><i class=\"fa fa-fw fa-arrows-v\"></i> Sibec <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"sibec\" class=\"collapse\">
                            <li>
                                <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutspr");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("famille_admin_listspr");
        echo "\">Gestion</a>
                            </li>
                        </ul>
                                                      <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#electricite\"><i class=\"fa fa-fw fa-arrows-v\"></i> Electricite <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                
                                <ul id=\"electricite\" class=\"collapse\">
                            <li>
                                <a href=\"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("famille_admin_ajoutelec");
        echo "\">Ajouter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("famille_admin_listelec");
        echo "\">Gestion</a>
                            </li>
                        </ul>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo1\"><i class=\"fa fa-fw fa-arrows-v\"></i> Depot Sokra <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"demo1\" class=\"collapse\">
                            <li>
                                <a href=\"#\">Dropdown Item</a>
                            </li>
                            <li>
                                <a href=\"#\">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo2\"><i class=\"fa fa-fw fa-arrows-v\"></i> Depot Raoued <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"demo2\" class=\"collapse\">
                            <li>
                                <a href=\"\">Dropdown Item</a>
                            </li>
                            <li>
                                <a href=\"#\">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo3\"><i class=\"fa fa-fw fa-arrows-v\"></i> Gestion des utilisateurs <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"demo3\" class=\"collapse\">
                            <li>
                                <a href=\"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Ajouter un utilisateur</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\">Liste des utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
               ";
        // line 230
        $this->displayBlock('body', $context, $blocks);
        // line 231
        echo "               ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 232
        echo "             
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>
     ";
        // line 255
        $this->displayBlock('script', $context, $blocks);
        // line 256
        echo "</body>

</html>
";
    }

    // line 65
    public function block_nomuser($context, array $blocks = array())
    {
    }

    // line 230
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 231
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 255
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
        return array (  416 => 255,  410 => 231,  404 => 230,  399 => 65,  392 => 256,  390 => 255,  386 => 254,  382 => 253,  378 => 252,  374 => 251,  368 => 248,  362 => 245,  347 => 232,  344 => 231,  342 => 230,  325 => 216,  319 => 213,  282 => 179,  276 => 176,  266 => 169,  260 => 166,  250 => 159,  244 => 156,  234 => 149,  228 => 146,  218 => 139,  212 => 136,  202 => 129,  196 => 126,  185 => 118,  179 => 115,  168 => 107,  162 => 104,  152 => 97,  146 => 94,  122 => 75,  115 => 71,  109 => 68,  101 => 65,  57 => 24,  51 => 21,  45 => 18,  39 => 15,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Condair plus</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{asset('bundles/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{asset('bundles/css/sb-admin.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Morris Charts CSS -->*/
/*     <link href="{{asset('bundles/css/plugins/morris.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{asset('bundles/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div id="wrapper">*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">Condair plus</a>*/
/*                 */
/*             </div>*/
/*        */
/*             <!-- Top Menu Items -->*/
/*             <ul class="nav navbar-right top-nav">*/
/*                      */
/* */
/* */
/* <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><input type="button" value="Imprimer" onClick="window.print()"></a>*/
/*                     */
/*                 </li>                */
/*                 */
/*               */
/*                 <li class="dropdown">*/
/*                     <a href="{{path('fos_user_profile_edit')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {%block nomuser %}{%endblock nomuser %} <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <i class="fa fa-fw fa-gear"> <a  href="{{ path('fos_user_resetting_request') }}">Mot de passe oublie?</a></i>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-fw fa-gear"> <a  href="{{path('fos_user_profile_edit')}}">Profile</a></i>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <i class="fa fa-fw fa-power-off"><a href="{{ path('fos_user_security_logout') }}">{{'layout.logout'|trans({}, 'FOSUserBundle')}}</a></i>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/*             <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav">*/
/*                     */
/*                     <li>*/
/*                             <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Depot Cite El Khadhra <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                             */
/*                         <ul id="demo" class="collapse">*/
/*                             <li>*/
/*                                 */
/*                                  <a href="javascript:;" data-toggle="collapse" data-target="#quincaillerie"><i class="fa fa-fw fa-arrows-v"></i> Quincaillerie <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="quincaillerie" class="collapse">*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_ajoutquin')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_listquin')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>   */
/*                                     <a href="javascript:;" data-toggle="collapse" data-target="#pvc"><i class="fa fa-fw fa-arrows-v"></i> Accessoire pvc <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 <ul id="pvc" class="collapse">*/
/*                             <li>*/
/*                                 */
/*                                 <a href="{{ path('famille_admin_ajoutpvc')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_listpvc')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                                        <a href="javascript:;" data-toggle="collapse" data-target="#pvc-c"><i class="fa fa-fw fa-arrows-v"></i> Accessoire pvc-c <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="pvc-c" class="collapse">*/
/*                             <li>*/
/*                                 */
/*                                 <a href="{{ path('famille_admin_ajoutpvcc')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_listpvcc')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>          */
/*                                        <a href="javascript:;" data-toggle="collapse" data-target="#pvc-v"><i class="fa fa-fw fa-arrows-v"></i> Accessoire pvc-v <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="pvc-v" class="collapse">*/
/*                             <li>*/
/*                                 */
/*                                 <a href="{{ path('famille_admin_ajoutpvcc')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_listpvcc')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                                           <a href="javascript:;" data-toggle="collapse" data-target="#ppr"><i class="fa fa-fw fa-arrows-v"></i> Accessoire ppr <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="ppr" class="collapse">*/
/*                             <li>*/
/*                                  <a href="{{ path('famille_admin_ajoutppr')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                  <a href="{{ path('famille_admin_listppr')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                                              <a href="javascript:;" data-toggle="collapse" data-target="#pvr"><i class="fa fa-fw fa-arrows-v"></i> Accessoire pvr <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="pvr" class="collapse">*/
/*                             <li>*/
/*                                  <a href="{{ path('famille_admin_ajoutpvr')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                  <a href="{{ path('famille_admin_listpvr')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                                                 <a href="javascript:;" data-toggle="collapse" data-target="#cuivrelaitoninox"><i class="fa fa-fw fa-arrows-v"></i> Accessoire cuivre,laiton,inox <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="cuivrelaitoninox" class="collapse">*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_ajoutcula')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_listcula')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                                                    <a href="javascript:;" data-toggle="collapse" data-target="#sibec"><i class="fa fa-fw fa-arrows-v"></i> Sibec <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="sibec" class="collapse">*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_ajoutspr')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_listspr')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                                                       <a href="javascript:;" data-toggle="collapse" data-target="#electricite"><i class="fa fa-fw fa-arrows-v"></i> Electricite <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 */
/*                                 <ul id="electricite" class="collapse">*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_ajoutelec')}}">Ajouter</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('famille_admin_listelec')}}">Gestion</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                             </li>*/
/*                             */
/*                            */
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Depot Sokra <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                         <ul id="demo1" class="collapse">*/
/*                             <li>*/
/*                                 <a href="#">Dropdown Item</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">Dropdown Item</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Depot Raoued <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                         <ul id="demo2" class="collapse">*/
/*                             <li>*/
/*                                 <a href="">Dropdown Item</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">Dropdown Item</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                      <li>*/
/*                         <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-arrows-v"></i> Gestion des utilisateurs <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                         <ul id="demo3" class="collapse">*/
/*                             <li>*/
/*                                 <a href="{{path('fos_user_registration_register')}}">Ajouter un utilisateur</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('user_list')}}">Liste des utilisateurs</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </nav>*/
/* */
/*         <div id="page-wrapper">*/
/* */
/*             <div class="container-fluid">*/
/* */
/*                 <!-- Page Heading -->*/
/*                {%block body %} {%endblock body %}*/
/*                {% block fos_user_content %} {% endblock fos_user_content %}*/
/*              */
/*                 <!-- /.row -->*/
/* */
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/* */
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/* */
/*     </div>*/
/*     <!-- /#wrapper -->*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{asset('bundles/js/jquery.js')}}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{asset('bundles/js/bootstrap.min.js')}}"></script>*/
/* */
/*     <!-- Morris Charts JavaScript -->*/
/*     <script src="{{asset('bundles/js/plugins/morris/raphael.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/js/plugins/morris/morris.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/js/plugins/morris/morris-data.js')}}"></script>*/
/*     <script src="{{asset ('bundles/table.js')}}"></script>*/
/*      {% block script %}{% endblock script %}*/
/* </body>*/
/* */
/* </html>*/
/* */
