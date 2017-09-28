<?php

/* MyAppUserBundle::tempauth.html.twig */
class __TwigTemplate_e02547388bd48c791872628b3cbfde8a39e64bfa32bd0b28bb129272bd5d6903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

  <title>Condair plus</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
\tmargin: 0;
\tpadding: 0;
\tbackground: #fff;

\tcolor: #fff;
\tfont-family: Arial;
\tfont-size: 12px;
}

.body{
\tposition: absolute;
\ttop: -20px;
\tleft: -20px;
\tright: -40px;
\tbottom: -40px;
\twidth: auto;
\theight: auto;
\tbackground-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
\tbackground-size: cover;
\t-webkit-filter: blur(5px);
\tz-index: 0;
}

.grad{
\tposition: absolute;
\ttop: -20px;
\tleft: -20px;
\tright: -40px;
\tbottom: -40px;
\twidth: auto;
\theight: auto;
\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
\tz-index: 1;
\topacity: 0.7;
}

.header{
\tposition: absolute;
\ttop: calc(50% - 35px);
\tleft: calc(50% - 255px);
\tz-index: 2;
}

.header div{
\tfloat: left;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 35px;
\tfont-weight: 200;
}

.header div span{
\tcolor: #5379fa !important;
}

.login{
\tposition: absolute;
\ttop: calc(50% - 75px);
\tleft: calc(50% - 50px);
\theight: 150px;
\twidth: 350px;
\tpadding: 10px;
\tz-index: 2;
}

.login input[type=text]{
\twidth: 250px;
\theight: 30px;
\tbackground: transparent;
\tborder: 1px solid rgba(255,255,255,0.6);
\tborder-radius: 2px;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 4px;
}

.login input[type=password]{
\twidth: 250px;
\theight: 30px;
\tbackground: transparent;
\tborder: 1px solid rgba(255,255,255,0.6);
\tborder-radius: 2px;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 4px;
\tmargin-top: 10px;
}

.login input[type=submit]{
\twidth: 260px;
\theight: 35px;
\tbackground: #fff;
\tborder: 1px solid #fff;
\tcursor: pointer;
\tborder-radius: 2px;
\tcolor: #a18d6c;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 6px;
\tmargin-top: 10px;
}

.login input[type=submit]:hover{
\topacity: 0.8;
}

.login input[type=submit]:active{
\topacity: 0.6;
}

.login input[type=text]:focus{
\toutline: none;
\tborder: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
\toutline: none;
\tborder: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
\toutline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/js1/prefixfree.min.js"), "html", null, true);
        echo "\"></script>

</head>

<body>

  <div class=\"body\"></div>
\t\t<div class=\"grad\"></div>
\t\t<div class=\"header\">
\t\t\t<div>Condair<span>plus</span></div>
\t\t</div>
\t\t<br>
\t\t<div class=\"login\">
\t\t\t\t
                                  ";
        // line 167
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 168
        echo "                                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style=\"color: red\" href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password?</a>
\t\t</div>
                

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>";
    }

    // line 167
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::tempauth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 167,  193 => 168,  191 => 167,  174 => 153,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/*   <meta charset="UTF-8">*/
/* */
/*   <title>Condair plus</title>*/
/* */
/*     <style>*/
/* @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);*/
/* @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);*/
/* */
/* body{*/
/* 	margin: 0;*/
/* 	padding: 0;*/
/* 	background: #fff;*/
/* */
/* 	color: #fff;*/
/* 	font-family: Arial;*/
/* 	font-size: 12px;*/
/* }*/
/* */
/* .body{*/
/* 	position: absolute;*/
/* 	top: -20px;*/
/* 	left: -20px;*/
/* 	right: -40px;*/
/* 	bottom: -40px;*/
/* 	width: auto;*/
/* 	height: auto;*/
/* 	background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);*/
/* 	background-size: cover;*/
/* 	-webkit-filter: blur(5px);*/
/* 	z-index: 0;*/
/* }*/
/* */
/* .grad{*/
/* 	position: absolute;*/
/* 	top: -20px;*/
/* 	left: -20px;*/
/* 	right: -40px;*/
/* 	bottom: -40px;*/
/* 	width: auto;*/
/* 	height: auto;*/
/* 	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ *//* */
/* 	z-index: 1;*/
/* 	opacity: 0.7;*/
/* }*/
/* */
/* .header{*/
/* 	position: absolute;*/
/* 	top: calc(50% - 35px);*/
/* 	left: calc(50% - 255px);*/
/* 	z-index: 2;*/
/* }*/
/* */
/* .header div{*/
/* 	float: left;*/
/* 	color: #fff;*/
/* 	font-family: 'Exo', sans-serif;*/
/* 	font-size: 35px;*/
/* 	font-weight: 200;*/
/* }*/
/* */
/* .header div span{*/
/* 	color: #5379fa !important;*/
/* }*/
/* */
/* .login{*/
/* 	position: absolute;*/
/* 	top: calc(50% - 75px);*/
/* 	left: calc(50% - 50px);*/
/* 	height: 150px;*/
/* 	width: 350px;*/
/* 	padding: 10px;*/
/* 	z-index: 2;*/
/* }*/
/* */
/* .login input[type=text]{*/
/* 	width: 250px;*/
/* 	height: 30px;*/
/* 	background: transparent;*/
/* 	border: 1px solid rgba(255,255,255,0.6);*/
/* 	border-radius: 2px;*/
/* 	color: #fff;*/
/* 	font-family: 'Exo', sans-serif;*/
/* 	font-size: 16px;*/
/* 	font-weight: 400;*/
/* 	padding: 4px;*/
/* }*/
/* */
/* .login input[type=password]{*/
/* 	width: 250px;*/
/* 	height: 30px;*/
/* 	background: transparent;*/
/* 	border: 1px solid rgba(255,255,255,0.6);*/
/* 	border-radius: 2px;*/
/* 	color: #fff;*/
/* 	font-family: 'Exo', sans-serif;*/
/* 	font-size: 16px;*/
/* 	font-weight: 400;*/
/* 	padding: 4px;*/
/* 	margin-top: 10px;*/
/* }*/
/* */
/* .login input[type=submit]{*/
/* 	width: 260px;*/
/* 	height: 35px;*/
/* 	background: #fff;*/
/* 	border: 1px solid #fff;*/
/* 	cursor: pointer;*/
/* 	border-radius: 2px;*/
/* 	color: #a18d6c;*/
/* 	font-family: 'Exo', sans-serif;*/
/* 	font-size: 16px;*/
/* 	font-weight: 400;*/
/* 	padding: 6px;*/
/* 	margin-top: 10px;*/
/* }*/
/* */
/* .login input[type=submit]:hover{*/
/* 	opacity: 0.8;*/
/* }*/
/* */
/* .login input[type=submit]:active{*/
/* 	opacity: 0.6;*/
/* }*/
/* */
/* .login input[type=text]:focus{*/
/* 	outline: none;*/
/* 	border: 1px solid rgba(255,255,255,0.9);*/
/* }*/
/* */
/* .login input[type=password]:focus{*/
/* 	outline: none;*/
/* 	border: 1px solid rgba(255,255,255,0.9);*/
/* }*/
/* */
/* .login input[type=submit]:focus{*/
/* 	outline: none;*/
/* }*/
/* */
/* ::-webkit-input-placeholder{*/
/*    color: rgba(255,255,255,0.6);*/
/* }*/
/* */
/* ::-moz-input-placeholder{*/
/*    color: rgba(255,255,255,0.6);*/
/* }*/
/* </style>*/
/* */
/*     <script src="{{asset('bundles/js1/prefixfree.min.js')}}"></script>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*   <div class="body"></div>*/
/* 		<div class="grad"></div>*/
/* 		<div class="header">*/
/* 			<div>Condair<span>plus</span></div>*/
/* 		</div>*/
/* 		<br>*/
/* 		<div class="login">*/
/* 				*/
/*                                   {% block fos_user_content %} {% endblock fos_user_content %}*/
/*                                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style="color: red" href="{{ path('fos_user_resetting_request') }}">Forgot password?</a>*/
/* 		</div>*/
/*                 */
/* */
/*   <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
