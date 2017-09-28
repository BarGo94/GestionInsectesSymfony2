<?php

/* default/index.html.twig */
class __TwigTemplate_c51f172f4637727f6b4067318b6df308a4b16e63036a0f7001da2326295d108c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'started' => array($this, 'block_started'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_started($context, array $blocks = array())
    {
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Get Started\" /></a>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block started %}*/
/*     <a href="{{ path('fos_user_security_login') }}"><input type="submit" id="_submit" name="_submit" value="Get Started" /></a>*/
/* {% endblock %}*/
/* */
