<?php

/* MyAppUserBundle:user:listUser.html.twig */
class __TwigTemplate_01f89d17275133c2db66b40adcd9af4bbfe3d9854a0743bed45fcd804738dfd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "MyAppUserBundle:user:listUser.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Liste des utilisateurs</h3>
                        <div class=\"pull-right\">
                            <span class=\"clickable filter\" data-toggle=\"tooltip\" title=\"Recherche\" data-container=\"body\">
                                <i class=\"glyphicon glyphicon-filter\"></i>
                            </span>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <input type=\"text\" class=\"form-control\" id=\"dev-table-filter\" data-action=\"filter\" data-filters=\"#dev-table\" placeholder=\"Recherche ...\" />
                    </div>
                    <table class=\"table table-hover\" id=\"dev-table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Suppression</th>
                                

                            </tr>
                        </thead>
                        <tbody>



                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 36
            echo "        <tr>
            <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo " </td>
           <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 55
    public function block_script($context, array $blocks = array())
    {
        // line 56
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
        return array (  123 => 56,  120 => 55,  106 => 44,  97 => 41,  93 => 40,  89 => 39,  85 => 38,  81 => 37,  78 => 36,  74 => 35,  41 => 4,  38 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%}*/
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {% block body %}*/
/*    <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-10">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Liste des utilisateurs</h3>*/
/*                         <div class="pull-right">*/
/*                             <span class="clickable filter" data-toggle="tooltip" title="Recherche" data-container="body">*/
/*                                 <i class="glyphicon glyphicon-filter"></i>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Recherche ..." />*/
/*                     </div>*/
/*                     <table class="table table-hover" id="dev-table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Nom</th>*/
/*                                 <th>Prenom</th>*/
/*                                 <th>Username</th>*/
/*                                 <th>Email</th>*/
/*                                 <th>Suppression</th>*/
/*                                 */
/* */
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/* */
/* */
/* */
/*                             {% for u in users %}*/
/*         <tr>*/
/*             <td> {{ u.nom }} </td>*/
/*             <td> {{ u.prenom }} </td>*/
/*             <td> {{ u.username }} </td>*/
/*             <td> {{ u.email }} </td>*/
/*            <td><a href="{{ path('user_delete', {'id':u.id}) }}">Supprimer</a></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/* */
/* */
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {% block script %}*/
/*     <script src="{{asset ('bundles/table.js')}}"></script>*/
/* */
/* {% endblock script %}*/
/* */
