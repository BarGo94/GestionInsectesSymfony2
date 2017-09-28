<?php

/* MyAppUserBundle:Security:login.html.twig */
class __TwigTemplate_8b456d31e2ab173878753427f7fe05d40f67020d8e7554df15ffe0ad8c4d9ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle::tempauth.html.twig", "MyAppUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle::tempauth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
   <table align=\"center\">
        <tr>
            
   <td> <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" /></td>
        </tr>

<tr>    <td><label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td></tr>
    <tr><td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /></td></tr>
</tr>
<tr>
    <tr><td><label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td></tr>
    <tr><td><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /></td></tr>
</tr>
<tr>
    <td></td>
    <tr><td><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /><label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td></tr>
</tr>

<tr><td><input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></td></tr>
    </table>
</form>
";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  73 => 27,  65 => 22,  59 => 19,  55 => 18,  49 => 15,  42 => 11,  39 => 10,  33 => 8,  31 => 7,  28 => 6,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle::tempauth.html.twig"%}*/
/* */
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*    <table align="center">*/
/*         <tr>*/
/*             */
/*    <td> <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" /></td>*/
/*         </tr>*/
/* */
/* <tr>    <td><label for="username">{{ 'security.login.username'|trans }}</label></td></tr>*/
/*     <tr><td><input type="text" id="username" name="_username" value="{{ last_username }}" required="required" /></td></tr>*/
/* </tr>*/
/* <tr>*/
/*     <tr><td><label for="password">{{ 'security.login.password'|trans }}</label></td></tr>*/
/*     <tr><td><input type="password" id="password" name="_password" required="required" /></td></tr>*/
/* </tr>*/
/* <tr>*/
/*     <td></td>*/
/*     <tr><td><input type="checkbox" id="remember_me" name="_remember_me" value="on" /><label for="remember_me">{{ 'security.login.remember_me'|trans }}</label></td></tr>*/
/* </tr>*/
/* */
/* <tr><td><input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" /></td></tr>*/
/*     </table>*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
