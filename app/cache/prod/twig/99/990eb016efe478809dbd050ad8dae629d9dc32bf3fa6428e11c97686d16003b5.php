<?php

/* FamilleBundle:Famille:updatetubg.html.twig */
class __TwigTemplate_c9f72ae5136c1e3151a61c7f727daf5414254305ef57bafd575051c80ddb8ea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:updatetubg.html.twig", 2);
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
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

    <div class=\"col-md-6 col-sm-6 col-xs-12\">
        <div class=\"panel panel-info\">
            <div align='center' class=\"panel-heading\">
            Condair plus , Liste de stock Famille: TUBE GALVA ET ACCESSOIRES
            </div> 
            <div align='center' class=\"panel-heading\">
                 Modifer 
            </div> 
            <div class=\"panel-body\">
                <form role=\"form\" method=\"post\">
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : null), 'form');
        echo "
                </form>
            </div>
        </div>
    </div>

";
    }

    // line 24
    public function block_space($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:updatetubg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  55 => 17,  41 => 5,  38 => 4,  30 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%}*/
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {%block body %}*/
/* */
/* */
/*     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*         <div class="panel panel-info">*/
/*             <div align='center' class="panel-heading">*/
/*             Condair plus , Liste de stock Famille: TUBE GALVA ET ACCESSOIRES*/
/*             </div> */
/*             <div align='center' class="panel-heading">*/
/*                  Modifer */
/*             </div> */
/*             <div class="panel-body">*/
/*                 <form role="form" method="post">*/
/*                     {{ form(Form) }}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {%endblock%}*/
/* {%block space %} {%endblock space %}*/
/*  */
