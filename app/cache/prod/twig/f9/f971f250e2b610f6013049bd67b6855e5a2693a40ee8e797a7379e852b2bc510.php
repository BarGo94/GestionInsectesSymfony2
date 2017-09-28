<?php

/* FamilleBundle:Famille:details_bonlivraison.html.twig */
class __TwigTemplate_9bef587e3cc0d706ab92e37b96fe9eb0cec540a3bb36d59efa4bbf0aed7319ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle::gridLayout.html.twig", "FamilleBundle:Famille:details_bonlivraison.html.twig", 1);
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
    <h1>Bon de livraison</h1>
    <HR align=center  width=\"100%\">
    <h3>Date: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</h3>
    <HR align=center  width=\"100%\">
    <table  border=\"1\" width=\"100%\"> 
<tr> 
    <td>Ref commande client:  .......................................................</br>Date ..................................................................................<br/>Projet: ...............................................................................<br/></td> 
    <td>Client ................................................................................ <br/>..........................................................................................<br/>Adresse ............................................................................ </td> 
    
</tr> 
</table> 
    <HR align=center  width=\"100%\">
<table border=\"1\" class=\"table table-hover\" id=\"dev-table\">
                        <thead>
                            <tr>
                                
                                
                                <th>Code</th>
                                <th>Designation</th>
                                <th>P.U.H.T</th>
                                <th>P.T.H.T</th>
                             

                            </tr>
                        </thead>
                        <tbody>



                            
                                <tr> 
                                    <td width=\"150px\" height=\"50px\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "ref", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "des", array()), "html", null, true);
        echo "</td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "prix", array()), "html", null, true);
        echo " </td>
                                    <td width=\"150px\" height=\"50px\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os"]) ? $context["os"] : null), "prixt", array()), "html", null, true);
        echo " </td>
                                   
                                </tr> 
                            

                        </tbody>
                    </table>
                                    <HR align=center  width=\"100%\">
                                    <h4>Date de livraison:...........................................</h4>
                                    <h4>Adresse de livraison:......................................</h4>                              
                                    <HR align=center  width=\"100%\">
                                    <CENTER><TABLE width=78% border=1>
<TR><TD width=33%>Le client</TD><TD width=33%>Le transporteur</TD>
<TD width=34%>Visa Condair plus</TD></TR>
<TR><TD width=35%>Materiel recu conforme sans degat apparents<br/>Cachet et signature<br/><br/><br/><br/><br/><h5>Nom et prenom:</h5></TD>
    <TD width=35%><br/>Nom:<br/>Cin:<br/>Vehicule:<br/><br/><br/><br/><br/><br/><br/></TD>
<TD width=34%></TD></TR>
</TABLE></CENTER>
                                    <HR align=center  width=\"100%\">
                                    <div align=\"center\"><h4>Siege:2, Rue Mohamed Badra Appt. N 4 Monplaisie, 1002 Tunis - Tel:(216) 71 846 541 Fax:(216) 71 288 234</h4>
                                    <h4>&nbsp&nbspE-mail: condair.plus@gnet.tn - R.C:B161352000 - T.V.A: 745191 N/A/M/000 Code Douane:774685G</h4>
                                    </div>
                                    <HR align=center  width=\"100%\">
                                       
";
    }

    public function getTemplateName()
    {
        return "FamilleBundle:Famille:details_bonlivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  86 => 39,  82 => 38,  78 => 37,  46 => 8,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle::gridLayout.html.twig"%} */
/* {%block nomuser %} {{user}} {%endblock nomuser %}*/
/* {% block body %}*/
/* */
/*     <HR align=center  width="100%">*/
/*     <h1>Bon de livraison</h1>*/
/*     <HR align=center  width="100%">*/
/*     <h3>Date: {{ os.date|date('d/m/Y')}}</h3>*/
/*     <HR align=center  width="100%">*/
/*     <table  border="1" width="100%"> */
/* <tr> */
/*     <td>Ref commande client:  .......................................................</br>Date ..................................................................................<br/>Projet: ...............................................................................<br/></td> */
/*     <td>Client ................................................................................ <br/>..........................................................................................<br/>Adresse ............................................................................ </td> */
/*     */
/* </tr> */
/* </table> */
/*     <HR align=center  width="100%">*/
/* <table border="1" class="table table-hover" id="dev-table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 */
/*                                 */
/*                                 <th>Code</th>*/
/*                                 <th>Designation</th>*/
/*                                 <th>P.U.H.T</th>*/
/*                                 <th>P.T.H.T</th>*/
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
/*                                     <td width="150px" height="50px">{{ os.ref }}</td>*/
/*                                     <td width="150px" height="50px">{{ os.des}}</td>*/
/*                                     <td width="150px" height="50px">{{ os.prix  }} </td>*/
/*                                     <td width="150px" height="50px">{{ os.prixt  }} </td>*/
/*                                    */
/*                                 </tr> */
/*                             */
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                                     <HR align=center  width="100%">*/
/*                                     <h4>Date de livraison:...........................................</h4>*/
/*                                     <h4>Adresse de livraison:......................................</h4>                              */
/*                                     <HR align=center  width="100%">*/
/*                                     <CENTER><TABLE width=78% border=1>*/
/* <TR><TD width=33%>Le client</TD><TD width=33%>Le transporteur</TD>*/
/* <TD width=34%>Visa Condair plus</TD></TR>*/
/* <TR><TD width=35%>Materiel recu conforme sans degat apparents<br/>Cachet et signature<br/><br/><br/><br/><br/><h5>Nom et prenom:</h5></TD>*/
/*     <TD width=35%><br/>Nom:<br/>Cin:<br/>Vehicule:<br/><br/><br/><br/><br/><br/><br/></TD>*/
/* <TD width=34%></TD></TR>*/
/* </TABLE></CENTER>*/
/*                                     <HR align=center  width="100%">*/
/*                                     <div align="center"><h4>Siege:2, Rue Mohamed Badra Appt. N 4 Monplaisie, 1002 Tunis - Tel:(216) 71 846 541 Fax:(216) 71 288 234</h4>*/
/*                                     <h4>&nbsp&nbspE-mail: condair.plus@gnet.tn - R.C:B161352000 - T.V.A: 745191 N/A/M/000 Code Douane:774685G</h4>*/
/*                                     </div>*/
/*                                     <HR align=center  width="100%">*/
/*                                        */
/* {% endblock body %}*/
