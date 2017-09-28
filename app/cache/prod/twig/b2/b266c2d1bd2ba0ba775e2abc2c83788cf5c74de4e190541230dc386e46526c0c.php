<?php

/* FamilleBundle:Famille:details_bonretour.html.twig */
class __TwigTemplate_7547e8268e1eee92036cddaf42d28dd8d4660c530e08ffbb7038d8de63ff23b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:details_bonretour.html.twig", 1);
        $this->blocks = array(
            'nomuser' => array($this, 'block_nomuser'),
            'body' => array($this, 'block_body'),
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
        echo "
    <HR align=center  width=\"100%\">
    <h1>Bon de retour</h1>
    <h3>Date : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</h3>
    <HR align=center  width=\"100%\">
    <h3>Date de Sortie de chantier: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Date de reception magasin: </h3>
    <HR align=center  width=\"100%\">
<table border=\"1\" width=\"100%\" height=\"20%\" >
                                <td>Case reserver au chef chantier&nbsp</td>
                                <td>Case reserver au service Appro</td>
</table>    
<table border=\"1\" class=\"table table-hover\" id=\"dev-table\">
                        <thead>
                            <tr>
                                
                                
                                
                                <th>Designation</th>
                                <th>Quantite</th>
                                <th>Etat</th>
                                <th>Observation</th>
                                
                             

                            </tr>
                        </thead>
                        <tbody>



                            
                                <tr> 
                                    
                                    <td width=\"150px\" height=\"50px\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "des", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "qte", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "etat", array()), "html", null, true);
        echo " </td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "obs", array()), "html", null, true);
        echo " </td>
                                   
                                </tr> 
                            

                        </tbody>
                    </table>
                                    <HR align=center  width=\"100%\">
                                  
                                    <HR align=center  width=\"100%\">
                                    <div align=\"center\"><h4>Siege:2, Rue Mohamed Badra Appt. N 4 Monplaisie, 1002 Tunis - Tel:(216) 71 906 919 Fax:(216) 71 908 234</h4>
                                    <h4>&nbsp&nbspE-mail: condair.plus@gnet.tn - R.C:b161352000 - T.V.A: 745191 N/A/M/000 Code Douane:774685G</h4>
                                    </div>
                                    <HR align=center  width=\"100%\">
                                       
";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:details_bonretour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  86 => 39,  82 => 38,  78 => 37,  45 => 7,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%} */
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {% block body %}*/
/* */
/*     <HR align=center  width="100%">*/
/*     <h1>Bon de retour</h1>*/
/*     <h3>Date : {{ os.date|date('d/m/Y')}}</h3>*/
/*     <HR align=center  width="100%">*/
/*     <h3>Date de Sortie de chantier: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Date de reception magasin: </h3>*/
/*     <HR align=center  width="100%">*/
/* <table border="1" width="100%" height="20%" >*/
/*                                 <td>Case reserver au chef chantier&nbsp</td>*/
/*                                 <td>Case reserver au service Appro</td>*/
/* </table>    */
/* <table border="1" class="table table-hover" id="dev-table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 */
/*                                 */
/*                                 */
/*                                 <th>Designation</th>*/
/*                                 <th>Quantite</th>*/
/*                                 <th>Etat</th>*/
/*                                 <th>Observation</th>*/
/*                                 */
/*                              */
/* */
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/* */
/* */
/* */
/*                             */
/*                                 <tr> */
/*                                     */
/*                                     <td width="150px" height="50px">{{ os.des}}</td>*/
/*                                     <td width="150px" height="50px">{{ os.qte}}</td>*/
/*                                     <td width="150px" height="50px">{{ os.etat  }} </td>*/
/*                                     <td width="150px" height="50px">{{ os.obs  }} </td>*/
/*                                    */
/*                                 </tr> */
/*                             */
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                                     <HR align=center  width="100%">*/
/*                                   */
/*                                     <HR align=center  width="100%">*/
/*                                     <div align="center"><h4>Siege:2, Rue Mohamed Badra Appt. N 4 Monplaisie, 1002 Tunis - Tel:(216) 71 906 919 Fax:(216) 71 908 234</h4>*/
/*                                     <h4>&nbsp&nbspE-mail: condair.plus@gnet.tn - R.C:b161352000 - T.V.A: 745191 N/A/M/000 Code Douane:774685G</h4>*/
/*                                     </div>*/
/*                                     <HR align=center  width="100%">*/
/*                                        */
/* {% endblock body %}*/
