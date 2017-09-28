<?php

/* FamilleBundle:Famille:defaultstart.html.twig */
class __TwigTemplate_fba0b403be58530802227bf90a7e274629441e8ab70fe0308ffc90c418b117ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:defaultstart.html.twig", 2);
        $this->blocks = array(
            'nomuser' => array($this, 'block_nomuser'),
            'body' => array($this, 'block_body'),
            'space' => array($this, 'block_space'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle::gridLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nomuser($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <div class=\"panel panel-info\">
            <div align='center' class=\"panel-heading\">
            </div>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("edit_pro");
        echo "\">Consulter ou editer mes informations</a>
            <br>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("add_friends");
        echo "\">Ajouter a la liste d amis</a>
            <br>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("list_friends");
        echo "\">Ma liste d amis</a>

        </div>
    </div>

";
    }

    // line 23
    public function block_space($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:defaultstart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  60 => 17,  55 => 15,  50 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%}*/
/* {%block nomuser %}*/
/*     {{user}}*/
/* {%endblock %}*/
/* */
/* {%block body %}*/
/* */
/*     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*         <div class="panel panel-info">*/
/*             <div align='center' class="panel-heading">*/
/*             </div>*/
/*             <a href="{{ path('edit_pro') }}">Consulter ou editer mes informations</a>*/
/*             <br>*/
/*             <a href="{{ path('add_friends') }}">Ajouter a la liste d amis</a>*/
/*             <br>*/
/*             <a href="{{ path('list_friends') }}">Ma liste d amis</a>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {%endblock%}*/
/* {%block space %} {%endblock space %}*/
/* */
