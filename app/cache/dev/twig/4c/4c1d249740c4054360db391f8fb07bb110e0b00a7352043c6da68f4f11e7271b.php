<?php

/* MyAppUserBundle:user:listUser.html.twig */
class __TwigTemplate_a2a2ca51c4cd8f7a6d483e993f6c32edc1c3bbab2808bb5fab1a31654b8c5cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "MyAppUserBundle:user:listUser.html.twig", 1);
        $this->blocks = array(
            'nomuser' => array($this, 'block_nomuser'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "    <script>
        function redpaste(\$id)
        {
            var url = '";
        // line 7
        echo $this->env->getExtension('routing')->getPath("update_info", array("id" => "id"));
        echo "';
            url = url.replace(\"id\", \$id);
            window.location.replace(url);
        }
    </script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
    <div class=\"container\">
        <form method=\"POST\" name=\"form\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("update_info");
        echo "\" >
            <div id=\"form\">
                <input style=\"visibility: hidden\" class=\"form-group form-control\" id=\"id\" name=\"id\" type=\"number\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "id", array()), "html", null, true);
        echo "\">
                <label>Username:</label>
                <input class=\"form-group form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "username", array()), "html", null, true);
        echo "\">
                <label>email:</label>
                <input class=\"form-group form-control\" id=\"email\" name=\"email\" type=\"email\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "email", array()), "html", null, true);
        echo "\">
                <label>age:</label>
                <input class=\"form-group form-control\" id=\"age\" name=\"age\" type=\"text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "ageed", array()), "html", null, true);
        echo "\">
                <label>famille:</label>
                <input class=\"form-group form-control\" id=\"famille\" name=\"famille\" type=\"text\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "famille", array()), "html", null, true);
        echo "\">
                <label>race:</label>
                <input class=\"form-group form-control\" id=\"race\" name=\"race\" type=\"text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "race", array()), "html", null, true);
        echo "\">
                <label>nourriture:</label>
                <input class=\"form-group form-control\" id=\"nourriture\" name=\"nourriture\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "nourriture", array()), "html", null, true);
        echo "\">

                <button type=\"submit\"   >Mettre a jour</button>
            </div>
            <button type=\"submit\"  formaction=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("my_insect_count");
        echo "\">Retour</button>
        </form>
    </div>


";
    }

    // line 40
    public function block_script($context, array $blocks = array())
    {
        // line 41
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:user:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  116 => 40,  106 => 34,  99 => 30,  94 => 28,  89 => 26,  84 => 24,  79 => 22,  74 => 20,  69 => 18,  64 => 16,  60 => 14,  57 => 13,  47 => 7,  42 => 4,  39 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%}*/
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {%block javascript %}*/
/*     <script>*/
/*         function redpaste($id)*/
/*         {*/
/*             var url = '{{ path("update_info", {'id': 'id'}) }}';*/
/*             url = url.replace("id", $id);*/
/*             window.location.replace(url);*/
/*         }*/
/*     </script>*/
/* {%endblock%}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <form method="POST" name="form" action="{{ path('update_info') }}" >*/
/*             <div id="form">*/
/*                 <input style="visibility: hidden" class="form-group form-control" id="id" name="id" type="number" value="{{users.id}}">*/
/*                 <label>Username:</label>*/
/*                 <input class="form-group form-control" id="username" name="username" type="text" value="{{users.username}}">*/
/*                 <label>email:</label>*/
/*                 <input class="form-group form-control" id="email" name="email" type="email" value="{{users.email}}">*/
/*                 <label>age:</label>*/
/*                 <input class="form-group form-control" id="age" name="age" type="text" value="{{users.ageed}}">*/
/*                 <label>famille:</label>*/
/*                 <input class="form-group form-control" id="famille" name="famille" type="text" value="{{users.famille}}">*/
/*                 <label>race:</label>*/
/*                 <input class="form-group form-control" id="race" name="race" type="text" value="{{users.race}}">*/
/*                 <label>nourriture:</label>*/
/*                 <input class="form-group form-control" id="nourriture" name="nourriture" type="text" value="{{users.nourriture}}">*/
/* */
/*                 <button type="submit"   >Mettre a jour</button>*/
/*             </div>*/
/*             <button type="submit"  formaction="{{ path('my_insect_count') }}">Retour</button>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* {% block script %}*/
/*     <script src="{{asset ('bundles/table.js')}}"></script>*/
/* */
/* {% endblock script %}*/
/* */
