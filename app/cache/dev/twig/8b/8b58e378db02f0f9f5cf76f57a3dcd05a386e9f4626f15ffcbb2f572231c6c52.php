<?php

/* FamilleBundle:Famille:maliste.html.twig */
class __TwigTemplate_14c892b0e77287a473ebe82fc8cb30671bc1530b4f7d91a4b8efc98d89d268cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:maliste.html.twig", 1);
        $this->blocks = array(
            'nomuser' => array($this, 'block_nomuser'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
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

    // line 2
    public function block_nomuser($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">


        <form method=\"POST\" name=\"form\">
            <div style=\"float: left\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usernames"]) ? $context["usernames"] : $this->getContext($context, "usernames")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 11
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ages"]) ? $context["ages"] : $this->getContext($context, "ages")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 17
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familles"]) ? $context["familles"] : $this->getContext($context, "familles")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 23
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["races"]) ? $context["races"] : $this->getContext($context, "races")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 29
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nourritures"]) ? $context["nourritures"] : $this->getContext($context, "nourritures")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 35
            echo "                    <input  value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) ? $context["ids"] : $this->getContext($context, "ids")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 41
            echo "                    <div style=\"margin-top: 6%\"><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletefromlist", array("id" => $context["u"])), "html", null, true);
            echo "\">Supprimer</a></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>






        </form>
        <br>



    </div>
    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("my_insect_count");
        echo "\">Retour</a>
";
    }

    // line 58
    public function block_script($context, array $blocks = array())
    {
        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:maliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 59,  173 => 58,  167 => 56,  152 => 43,  143 => 41,  139 => 40,  135 => 38,  125 => 35,  121 => 34,  117 => 32,  107 => 29,  103 => 28,  99 => 26,  89 => 23,  85 => 22,  81 => 20,  71 => 17,  67 => 16,  63 => 14,  53 => 11,  49 => 10,  41 => 4,  38 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%}*/
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/* */
/* */
/*         <form method="POST" name="form">*/
/*             <div style="float: left">*/
/*                 {% for u in usernames %}*/
/*                     <input value="{{ u}}" readonly>*/
/*                     <br>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div style="float: left">*/
/*                 {% for u in ages %}*/
/*                     <input value="{{ u}}" readonly>*/
/*                     <br>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div style="float: left">*/
/*                 {% for u in familles %}*/
/*                     <input value="{{ u}}" readonly>*/
/*                     <br>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div style="float: left">*/
/*                 {% for u in races %}*/
/*                     <input value="{{ u}}" readonly>*/
/*                     <br>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div style="float: left">*/
/*                 {% for u in nourritures %}*/
/*                     <input  value="{{ u}}" readonly>*/
/*                     <br>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div style="float: left">*/
/*                 {% for u in ids %}*/
/*                     <div style="margin-top: 6%"><a  href="{{ path('deletefromlist', {'id':u}) }}">Supprimer</a></div>*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         </form>*/
/*         <br>*/
/* */
/* */
/* */
/*     </div>*/
/*     <a href="{{ path('my_insect_count') }}">Retour</a>*/
/* {% endblock %}*/
/* {% block script %}*/
/*     <script src="{{asset ('bundles/table.js')}}"></script>*/
/* */
/* {% endblock script %}*/
