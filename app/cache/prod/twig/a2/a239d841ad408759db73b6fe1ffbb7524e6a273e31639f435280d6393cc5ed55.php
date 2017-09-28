<?php

/* FamilleBundle:Famille:affichage_bonsortir.html.twig */
class __TwigTemplate_d665e1aaa4c760843610949311bcc4d3110ef9faccae323b261cbf97d95472f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:affichage_bonsortir.html.twig", 3);
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
                        <h3 class=\"panel-title\">Bon sortir</h3>
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
                                
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Designation</th>
                                <th>Unite</th>
                                <th>Quantite</th>
                                <th>Prix H.T</th>
                                <th>Montant</th>
                                <th>Suppression</th>
                                <th>Modification</th>
                                <th>Details</th>

                            </tr>
                        </thead>
                        <tbody>



                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["os"]) ? $context["os"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 44
            echo "                                <tr> 
                                    <td width=\"150px\" height=\"50px\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["o"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "ref", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "des", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "unite", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "qte", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "prix", array()), "html", null, true);
            echo " </td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "montant", array()), "html", null, true);
            echo " </td>
                                    <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_bonsortir", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_bonsortir", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Modification</a></td>
                                    <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_bonsortir", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Details</a></td>
                                </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 66
    public function block_script($context, array $blocks = array())
    {
        // line 67
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:affichage_bonsortir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 67,  144 => 66,  132 => 57,  123 => 54,  119 => 53,  115 => 52,  111 => 51,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  91 => 46,  87 => 45,  84 => 44,  80 => 43,  41 => 6,  38 => 5,  30 => 4,  11 => 3,);
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
/*                         <h3 class="panel-title">Bon sortir</h3>*/
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
/*                                 */
/*                                 <th>Date</th>*/
/*                                 <th>Reference</th>*/
/*                                 <th>Designation</th>*/
/*                                 <th>Unite</th>*/
/*                                 <th>Quantite</th>*/
/*                                 <th>Prix H.T</th>*/
/*                                 <th>Montant</th>*/
/*                                 <th>Suppression</th>*/
/*                                 <th>Modification</th>*/
/*                                 <th>Details</th>*/
/* */
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/* */
/* */
/* */
/*                             {% for o in os %}*/
/*                                 <tr> */
/*                                     <td width="150px" height="50px">{{ o.date|date('d/m/Y')}}</td>*/
/*                                     <td>{{ o.ref }}</td>*/
/*                                     <td width="150px" height="50px">{{ o.des}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.unite}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.qte}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.prix  }} </td>*/
/*                                     <td width="150px" height="50px">{{ o.montant  }} </td>*/
/*                                     <td><a href="{{ path('supprimer_bonsortir', {'id':o.id}) }}">Supprimer</a></td>*/
/*                                     <td><a href="{{ path('modifier_bonsortir', {'id':o.id}) }}">Modification</a></td>*/
/*                                     <td><a href="{{ path('details_bonsortir', {'id':o.id}) }}">Details</a></td>*/
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
