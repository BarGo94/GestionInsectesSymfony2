<?php

/* FamilleBundle:Famille:Gestionaccrecs.html.twig */
class __TwigTemplate_90b2497fd7d506e3710e2f420abb6fffe1040021848a5a496c8b111f1e8ae614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:Gestionaccrecs.html.twig", 2);
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
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
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
            Condair plus , Liste de stock Famille:  ACCESSOIRES RECUPEREES
            </div>
            <div align='center' class=\"panel-heading\">
                 Ajouter 
                 
            </div>
            <div class=\"panel-body\">
                <form role=\"form\" method=\"post\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : null), 'form');
        echo "
                </form>
            </div>
        </div>
    </div>

";
    }

    // line 27
    public function block_space($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:Gestionaccrecs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  57 => 20,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 2,);
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
/*             Condair plus , Liste de stock Famille:  ACCESSOIRES RECUPEREES*/
/*             </div>*/
/*             <div align='center' class="panel-heading">*/
/*                  Ajouter */
/*                  */
/*             </div>*/
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
