<?php

/* FamilleBundle:Famille:details_bonsortir.html.twig */
class __TwigTemplate_0c4c6f72754e30c7e76f74a4b859161891be051f38af45b7fba97da7fb30faaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:details_bonsortir.html.twig", 1);
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
    <h1>Bon de sortie</h1>
    <HR align=center  width=\"100%\">
    <h3>Date: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</h3>
    <HR align=center  width=\"100%\">
    
<table border=\"1\" class=\"table table-hover\" id=\"dev-table\">
                        <thead>
                            <tr>
                                
                                
                                <th>Reference</th>
                                <th>Designation</th>
                                <th>Unite</th>
                                <th>Quantite</th>
                                <th>Prix H.T</th>
                                <th>Montant</th>
                             

                            </tr>
                        </thead>
                        <tbody>



                            
                                <tr> 
                                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "ref", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "des", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "unite", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "qte", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "prix", array()), "html", null, true);
        echo " </td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "montant", array()), "html", null, true);
        echo " </td>
                                   
                                </tr> 
                            

                        </tbody>
                    </table>
                                    <HR align=center  width=\"100%\">
                                    <HR align=center  width=\"100%\">
                                    
                                    <table  border=\"1\"> 
<tr> 
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visa magasin <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>signature ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td> 
  
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visa livreur <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Nom &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Vehicule &nbsp&nbsp..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>signature &nbsp.................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td> 
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visa Client/Chantier <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Recu par: ................. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>signature &nbsp.................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td> 

</tr> 
</table> 
                                    <HR align=center  width=\"100%\">
                                    <div align=\"center\"><h4>Siege:2, Rue Mohamed Badra Appt. N 4 Monplaisie, 1002 Tunis - Tel:(216) 71 906 919 Fax:(216) 71 908 234</h4>
                                    <h4>&nbsp&nbspE-mail: condair.plus@gnet.tn - R.C:b161352000 - T.V.A: 745191 N/A/M/000 Code Douane:774685G</h4>
                                    </div>
                                    <HR align=center  width=\"100%\">
                                       
";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:details_bonsortir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  89 => 36,  85 => 35,  81 => 34,  77 => 33,  73 => 32,  46 => 8,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%}*/
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {% block body %}*/
/* */
/*     <HR align=center  width="100%">*/
/*     <h1>Bon de sortie</h1>*/
/*     <HR align=center  width="100%">*/
/*     <h3>Date: {{ os.date|date('d/m/Y')}}</h3>*/
/*     <HR align=center  width="100%">*/
/*     */
/* <table border="1" class="table table-hover" id="dev-table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 */
/*                                 */
/*                                 <th>Reference</th>*/
/*                                 <th>Designation</th>*/
/*                                 <th>Unite</th>*/
/*                                 <th>Quantite</th>*/
/*                                 <th>Prix H.T</th>*/
/*                                 <th>Montant</th>*/
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
/*                                     <td>{{ os.ref }}</td>*/
/*                                     <td width="150px" height="50px">{{ os.des}}</td>*/
/*                                     <td width="150px" height="50px">{{ os.unite}}</td>*/
/*                                     <td width="150px" height="50px">{{ os.qte}}</td>*/
/*                                     <td width="150px" height="50px">{{ os.prix  }} </td>*/
/*                                     <td width="150px" height="50px">{{ os.montant  }} </td>*/
/*                                    */
/*                                 </tr> */
/*                             */
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                                     <HR align=center  width="100%">*/
/*                                     <HR align=center  width="100%">*/
/*                                     */
/*                                     <table  border="1"> */
/* <tr> */
/*     <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visa magasin <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>signature ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td> */
/*   */
/*     <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visa livreur <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Nom &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Vehicule &nbsp&nbsp..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>signature &nbsp.................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td> */
/*     <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visa Client/Chantier <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Recu par: ................. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>signature &nbsp.................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ..................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td> */
/* */
/* </tr> */
/* </table> */
/*                                     <HR align=center  width="100%">*/
/*                                     <div align="center"><h4>Siege:2, Rue Mohamed Badra Appt. N 4 Monplaisie, 1002 Tunis - Tel:(216) 71 906 919 Fax:(216) 71 908 234</h4>*/
/*                                     <h4>&nbsp&nbspE-mail: condair.plus@gnet.tn - R.C:b161352000 - T.V.A: 745191 N/A/M/000 Code Douane:774685G</h4>*/
/*                                     </div>*/
/*                                     <HR align=center  width="100%">*/
/*                                        */
/* {% endblock body %}*/
