<?php

/* FamilleBundle:Famille:affichage_spr.html.twig */
class __TwigTemplate_87a6d5a627dfe9e649e02ed8cf53eb82ef30a9bf402f5c88d5886747198f898d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:affichage_spr.html.twig", 3);
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
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Tableau de Condair plus , Liste de stock Famille: SPRINKLAGE & PROTECTION</h3>
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
                                <th>Reference</th>
                                <th>Designation</th>
                                <th>Unite</th>
                                <th>Quantite</th>
                                <th>Prix H.T</th>
                                <th>Suppression</th>
                                <th>Modification</th>

                            </tr>
                        </thead>
                        <tbody>



                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["os"]) ? $context["os"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 40
            echo "                                <tr> 
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "ref", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "des", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "unite", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "qte", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "prix", array()), "html", null, true);
            echo " </td>
                                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_spr", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                                    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_spr", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Modification</a></td>
                                </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 59
    public function block_script($context, array $blocks = array())
    {
        // line 60
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:affichage_spr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 60,  128 => 59,  116 => 50,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  91 => 43,  87 => 42,  83 => 41,  80 => 40,  76 => 39,  41 => 6,  38 => 5,  30 => 4,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%}*/
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-10">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Tableau de Condair plus , Liste de stock Famille: SPRINKLAGE & PROTECTION</h3>*/
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
/*                                 <th>Reference</th>*/
/*                                 <th>Designation</th>*/
/*                                 <th>Unite</th>*/
/*                                 <th>Quantite</th>*/
/*                                 <th>Prix H.T</th>*/
/*                                 <th>Suppression</th>*/
/*                                 <th>Modification</th>*/
/* */
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/* */
/* */
/* */
/*                             {% for o in os %}*/
/*                                 <tr> */
/*                                     <td>{{ o.ref }}</td>*/
/*                                     <td width="150px" height="50px">{{ o.des}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.unite}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.qte}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.prix  }} </td>*/
/*                                     <td><a href="{{ path('supprimer_spr', {'id':o.id}) }}">Supprimer</a></td>*/
/*                                     <td><a href="{{ path('modifier_spr', {'id':o.id}) }}">Modification</a></td>*/
/*                                 </tr> */
/*                             {% endfor %}*/
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
