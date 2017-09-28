<?php

/* FamilleBundle:Famille:affichage_bonlivraison.html.twig */
class __TwigTemplate_3e58ce0a2e51a235ad7fd04d29db8e657939defffba5833f7e0983eca69a8453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:affichage_bonlivraison.html.twig", 3);
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
                        <h3 class=\"panel-title\">Bon Livraison</h3>
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
                                <th>Code</th>
                                <th>Designation</th>
                                <th>P.U.H.T</th>
                                <th>P.T.H.T</th>
                                <th>Suppression</th>
                                <th>Modification</th>
                                <th>Details</th>

                            </tr>
                        </thead>
                        <tbody>



                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["os"]) ? $context["os"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 42
            echo "                                <tr> 
                                    <td width=\"150px\" height=\"50px\">";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["o"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "ref", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "des", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "prix", array()), "html", null, true);
            echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "prixt", array()), "html", null, true);
            echo " </td>
                                    <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_bonlivraison", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                                    <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_bonlivraison", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Modification</a></td>
                                    <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailslivraison", array("id" => $this->getAttribute($context["o"], "id", array()))), "html", null, true);
            echo "\">Details</a></td>
                                </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 62
    public function block_script($context, array $blocks = array())
    {
        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/table.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:affichage_bonlivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 63,  134 => 62,  122 => 53,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  97 => 46,  93 => 45,  89 => 44,  85 => 43,  82 => 42,  78 => 41,  41 => 6,  38 => 5,  30 => 4,  11 => 3,);
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
/*                         <h3 class="panel-title">Bon Livraison</h3>*/
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
/*                                 <th>Code</th>*/
/*                                 <th>Designation</th>*/
/*                                 <th>P.U.H.T</th>*/
/*                                 <th>P.T.H.T</th>*/
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
/*                                     <td width="150px" height="50px">{{ o.ref}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.des}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.prix}}</td>*/
/*                                     <td width="150px" height="50px">{{ o.prixt  }} </td>*/
/*                                     <td><a href="{{ path('supprimer_bonlivraison', {'id':o.id}) }}">Supprimer</a></td>*/
/*                                     <td><a href="{{ path('modifier_bonlivraison', {'id':o.id}) }}">Modification</a></td>*/
/*                                     <td><a href="{{ path('detailslivraison', {'id':o.id}) }}">Details</a></td>*/
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
