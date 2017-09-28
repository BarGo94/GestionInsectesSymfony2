<?php

/* FamilleBundle:Famille:listfriends.html.twig */
class __TwigTemplate_fce5e0e68860bc2f56cf1092c12e88f1f892ae6fc3d87cc56544a2449869a4d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:listfriends.html.twig", 3);
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

    // line 4
    public function block_nomuser($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\">


        <form method=\"POST\" name=\"form\">
            <div style=\"float: left\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usernames"]) ? $context["usernames"] : $this->getContext($context, "usernames")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 13
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ages"]) ? $context["ages"] : $this->getContext($context, "ages")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 19
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familles"]) ? $context["familles"] : $this->getContext($context, "familles")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 25
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["races"]) ? $context["races"] : $this->getContext($context, "races")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 31
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nourritures"]) ? $context["nourritures"] : $this->getContext($context, "nourritures")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 37
            echo "                    <input value=\"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\" readonly>
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
            <div style=\"float: left\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) ? $context["ids"] : $this->getContext($context, "ids")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 43
            echo "                    <div style=\"margin-top: 6%\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addtolist", array("id" => $context["u"])), "html", null, true);
            echo "\">Ajouter</a></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>






        </form>



    </div>
    <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("my_insect_count");
        echo "\">Retour</a>

";
    }

    // line 60
    public function block_script($context, array $blocks = array())
    {
        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:listfriends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  173 => 60,  166 => 57,  152 => 45,  143 => 43,  139 => 42,  135 => 40,  125 => 37,  121 => 36,  117 => 34,  107 => 31,  103 => 30,  99 => 28,  89 => 25,  85 => 24,  81 => 22,  71 => 19,  67 => 18,  63 => 16,  53 => 13,  49 => 12,  41 => 6,  38 => 5,  30 => 4,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
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
/*                     <input value="{{ u}}" readonly>*/
/*                     <br>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div style="float: left">*/
/*                 {% for u in ids %}*/
/*                     <div style="margin-top: 6%"> <a href="{{ path('addtolist', {'id':u}) }}">Ajouter</a></div>*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         </form>*/
/* */
/* */
/* */
/*     </div>*/
/*     <a href="{{ path('my_insect_count') }}">Retour</a>*/
/* */
/* {% endblock %}*/
/* {% block script %}*/
/*     <script src="{{asset ('bundles/table.js')}}"></script>*/
/* */
/* {% endblock script %}*/
