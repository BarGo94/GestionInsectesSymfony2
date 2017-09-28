<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // famille_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_homepage')), array (  '_controller' => 'FamilleBundle\\Controller\\DefaultController::indexAction',));
        }

        // famille_admin_listaccrec
        if ($pathinfo === '/listaccrec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AccrecController::listaccrecAction',  '_route' => 'famille_admin_listaccrec',);
        }

        // famille_admin_ajoutaccrec
        if ($pathinfo === '/ajoutaccrec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AccrecController::ajoutaccrecAction',  '_route' => 'famille_admin_ajoutaccrec',);
        }

        // supprimer_accrec
        if ($pathinfo === '/deleteaccrec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AccrecController::deleteaccrecAction',  '_route' => 'supprimer_accrec',);
        }

        // modifier_accrec
        if ($pathinfo === '/modifieraccrec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AccrecController::modifieraccrecAction',  '_route' => 'modifier_accrec',);
        }

        // famille_admin_listaerex
        if ($pathinfo === '/listaerex') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AerexController::listaerexAction',  '_route' => 'famille_admin_listaerex',);
        }

        // famille_admin_ajoutaerex
        if ($pathinfo === '/ajoutaerex') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AerexController::ajoutaerexAction',  '_route' => 'famille_admin_ajoutaerex',);
        }

        // supprimer_aerex
        if ($pathinfo === '/deleteaerex') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AerexController::deleteaerexAction',  '_route' => 'supprimer_aerex',);
        }

        // modifier_aerex
        if ($pathinfo === '/modifieraerex') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AerexController::modifieraerexAction',  '_route' => 'modifier_aerex',);
        }

        // famille_admin_listaircom
        if ($pathinfo === '/listaircom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AircomController::listaircomAction',  '_route' => 'famille_admin_listaircom',);
        }

        // famille_admin_ajoutaircom
        if ($pathinfo === '/ajoutaircom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AircomController::ajoutaircomAction',  '_route' => 'famille_admin_ajoutaircom',);
        }

        // supprimer_aircom
        if ($pathinfo === '/deleteaircom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AircomController::deleteaircomAction',  '_route' => 'supprimer_aircom',);
        }

        // modifier_aircom
        if ($pathinfo === '/modifieraircom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\AircomController::modifieraircomAction',  '_route' => 'modifier_aircom',);
        }

        // famille_admin_listboidri
        if ($pathinfo === '/listboidri') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BoidriController::listboidriAction',  '_route' => 'famille_admin_listboidri',);
        }

        // famille_admin_ajoutboidri
        if ($pathinfo === '/ajoutboidri') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BoidriController::ajoutboidriAction',  '_route' => 'famille_admin_ajoutboidri',);
        }

        // supprimer_boidri
        if ($pathinfo === '/deleteboidri') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BoidriController::deleteboidriAction',  '_route' => 'supprimer_boidri',);
        }

        // modifier_boidri
        if ($pathinfo === '/modifierboidri') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BoidriController::modifierboidriAction',  '_route' => 'modifier_boidri',);
        }

        // famille_admin_listchatrai
        if ($pathinfo === '/listchatrai') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ChatraiController::listchatraiAction',  '_route' => 'famille_admin_listchatrai',);
        }

        // famille_admin_ajoutchatrai
        if ($pathinfo === '/ajoutchatrai') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ChatraiController::ajoutchatraiAction',  '_route' => 'famille_admin_ajoutchatrai',);
        }

        // supprimer_chatrai
        if ($pathinfo === '/deletechatrai') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ChatraiController::deletechatraiAction',  '_route' => 'supprimer_chatrai',);
        }

        // modifier_chatrai
        if ($pathinfo === '/modifierchatrai') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ChatraiController::modifierchatraiAction',  '_route' => 'modifier_chatrai',);
        }

        // famille_admin_listcom
        if ($pathinfo === '/listcom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ComController::listcomAction',  '_route' => 'famille_admin_listcom',);
        }

        // famille_admin_ajoutcom
        if ($pathinfo === '/ajoutcom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ComController::ajoutcomAction',  '_route' => 'famille_admin_ajoutcom',);
        }

        // supprimer_com
        if ($pathinfo === '/deletecom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ComController::deletecomAction',  '_route' => 'supprimer_com',);
        }

        // modifier_com
        if ($pathinfo === '/modifiercom') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ComController::modifiercomAction',  '_route' => 'modifier_com',);
        }

        // famille_admin_listcula
        if ($pathinfo === '/listcula') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\CulaController::listculaAction',  '_route' => 'famille_admin_listcula',);
        }

        // famille_admin_ajoutcula
        if ($pathinfo === '/ajoutcula') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\CulaController::ajoutculaAction',  '_route' => 'famille_admin_ajoutcula',);
        }

        // supprimer_cula
        if ($pathinfo === '/deletecula') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\CulaController::deleteculaAction',  '_route' => 'supprimer_cula',);
        }

        // modifier_cula
        if ($pathinfo === '/modifiercula') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\CulaController::modifierculaAction',  '_route' => 'modifier_cula',);
        }

        // famille_admin_listelec
        if ($pathinfo === '/listelec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ElecController::listelecAction',  '_route' => 'famille_admin_listelec',);
        }

        // famille_admin_ajoutelec
        if ($pathinfo === '/ajoutelec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ElecController::ajoutelecAction',  '_route' => 'famille_admin_ajoutelec',);
        }

        // supprimer_elec
        if ($pathinfo === '/deleteelec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ElecController::deleteelecAction',  '_route' => 'supprimer_elec',);
        }

        // modifier_elec
        if ($pathinfo === '/modifierelec') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ElecController::modifierelecAction',  '_route' => 'modifier_elec',);
        }

        // famille_admin_listdivv
        if ($pathinfo === '/listdivv') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\DivvController::listdivvAction',  '_route' => 'famille_admin_listdivv',);
        }

        // famille_admin_ajoutdivv
        if ($pathinfo === '/ajoutdivv') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\DivvController::ajoutdivvAction',  '_route' => 'famille_admin_ajoutdivv',);
        }

        // supprimer_divv
        if ($pathinfo === '/deletedivv') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\DivvController::deletedivvAction',  '_route' => 'supprimer_divv',);
        }

        // modifier_divv
        if ($pathinfo === '/modifierdivv') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\DivvController::modifierdivvAction',  '_route' => 'modifier_divv',);
        }

        // famille_admin_listeqcl
        if ($pathinfo === '/listeqcl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\EqclController::listeqclAction',  '_route' => 'famille_admin_listeqcl',);
        }

        // famille_admin_ajouteqcl
        if ($pathinfo === '/ajouteqcl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\EqclController::ajouteqclAction',  '_route' => 'famille_admin_ajouteqcl',);
        }

        // supprimer_eqcl
        if ($pathinfo === '/deleteeqcl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\EqclController::deleteeqclAction',  '_route' => 'supprimer_eqcl',);
        }

        // modifier_eqcl
        if ($pathinfo === '/modifiereqcl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\EqclController::modifiereqclAction',  '_route' => 'modifier_eqcl',);
        }

        // famille_admin_listgrve
        if ($pathinfo === '/listgrve') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\GrveController::listgrveAction',  '_route' => 'famille_admin_listgrve',);
        }

        // famille_admin_ajoutgrve
        if ($pathinfo === '/ajoutgrve') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\GrveController::ajoutgrveAction',  '_route' => 'famille_admin_ajoutgrve',);
        }

        // supprimer_grve
        if ($pathinfo === '/deletegrve') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\GrveController::deletegrveAction',  '_route' => 'supprimer_grve',);
        }

        // modifier_grve
        if ($pathinfo === '/modifiergrve') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\GrveController::modifiergrveAction',  '_route' => 'modifier_grve',);
        }

        // famille_admin_listiso
        if ($pathinfo === '/listiso') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\IsoController::listisoAction',  '_route' => 'famille_admin_listiso',);
        }

        // famille_admin_ajoutiso
        if ($pathinfo === '/ajoutiso') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\IsoController::ajoutisoAction',  '_route' => 'famille_admin_ajoutiso',);
        }

        // supprimer_iso
        if ($pathinfo === '/deleteiso') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\IsoController::deleteisoAction',  '_route' => 'supprimer_iso',);
        }

        // modifier_iso
        if ($pathinfo === '/modifieriso') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\IsoController::modifierisoAction',  '_route' => 'modifier_iso',);
        }

        // famille_admin_listmch
        if ($pathinfo === '/listmch') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\MchController::listmchAction',  '_route' => 'famille_admin_listmch',);
        }

        // famille_admin_ajoutmch
        if ($pathinfo === '/ajoutmch') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\MchController::ajoutmchAction',  '_route' => 'famille_admin_ajoutmch',);
        }

        // supprimer_mch
        if ($pathinfo === '/deletemch') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\MchController::deletemchAction',  '_route' => 'supprimer_mch',);
        }

        // modifier_mch
        if ($pathinfo === '/modifiermch') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\MchController::modifiermchAction',  '_route' => 'modifier_mch',);
        }

        // famille_admin_listoutt
        if ($pathinfo === '/listoutt') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\OuttController::listouttAction',  '_route' => 'famille_admin_listoutt',);
        }

        // famille_admin_ajoutoutt
        if ($pathinfo === '/ajoutoutt') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\OuttController::ajoutouttAction',  '_route' => 'famille_admin_ajoutoutt',);
        }

        // supprimer_outt
        if ($pathinfo === '/deleteoutt') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\OuttController::deleteouttAction',  '_route' => 'supprimer_outt',);
        }

        // modifier_outt
        if ($pathinfo === '/modifieroutt') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\OuttController::modifierouttAction',  '_route' => 'modifier_outt',);
        }

        // famille_admin_listpet
        if ($pathinfo === '/listpet') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PetController::listpetAction',  '_route' => 'famille_admin_listpet',);
        }

        // famille_admin_ajoutpet
        if ($pathinfo === '/ajoutpet') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PetController::ajoutpetAction',  '_route' => 'famille_admin_ajoutpet',);
        }

        // supprimer_pet
        if ($pathinfo === '/deletepet') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PetController::deletepetAction',  '_route' => 'supprimer_pet',);
        }

        // modifier_pet
        if ($pathinfo === '/modifierpet') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PetController::modifierpetAction',  '_route' => 'modifier_pet',);
        }

        // famille_admin_listppr
        if ($pathinfo === '/listppr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PprController::listpprAction',  '_route' => 'famille_admin_listppr',);
        }

        // famille_admin_ajoutppr
        if ($pathinfo === '/ajoutppr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PprController::ajoutpprAction',  '_route' => 'famille_admin_ajoutppr',);
        }

        // supprimer_ppr
        if ($pathinfo === '/deleteppr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PprController::deletepprAction',  '_route' => 'supprimer_ppr',);
        }

        // modifier_ppr
        if ($pathinfo === '/modifierppr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PprController::modifierpprAction',  '_route' => 'modifier_ppr',);
        }

        // famille_admin_listpvc
        if ($pathinfo === '/listpvc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcController::listpvcAction',  '_route' => 'famille_admin_listpvc',);
        }

        // famille_admin_ajoutpvc
        if ($pathinfo === '/ajoutpvc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcController::ajoutpvcAction',  '_route' => 'famille_admin_ajoutpvc',);
        }

        // supprimer_pvc
        if ($pathinfo === '/deletepvc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcController::deletepvcAction',  '_route' => 'supprimer_pvc',);
        }

        // modifier_pvc
        if ($pathinfo === '/modifierpvc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcController::modifierpvcAction',  '_route' => 'modifier_pvc',);
        }

        // famille_admin_listpvcc
        if ($pathinfo === '/listpvcc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccController::listpvccAction',  '_route' => 'famille_admin_listpvcc',);
        }

        // famille_admin_ajoutpvcc
        if ($pathinfo === '/ajoutpvcc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccController::ajoutpvccAction',  '_route' => 'famille_admin_ajoutpvcc',);
        }

        // supprimer_pvcc
        if ($pathinfo === '/deletepvcc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccController::deletepvccAction',  '_route' => 'supprimer_pvcc',);
        }

        // modifier_pvcc
        if ($pathinfo === '/modifierpvcc') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccController::modifierpvccAction',  '_route' => 'modifier_pvcc',);
        }

        // famille_admin_listpvccj
        if ($pathinfo === '/listpvccj') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccjController::listpvccjAction',  '_route' => 'famille_admin_listpvccj',);
        }

        // famille_admin_ajoutpvccj
        if ($pathinfo === '/ajoutpvccj') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccjController::ajoutpvccjAction',  '_route' => 'famille_admin_ajoutpvccj',);
        }

        // supprimer_pvccj
        if ($pathinfo === '/deletepvccj') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccjController::deletepvccjAction',  '_route' => 'supprimer_pvccj',);
        }

        // modifier_pvccj
        if ($pathinfo === '/modifierpvccj') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvccjController::modifierpvccjAction',  '_route' => 'modifier_pvccj',);
        }

        // famille_admin_listpvcpr
        if ($pathinfo === '/listpvcpr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcprController::listpvcprAction',  '_route' => 'famille_admin_listpvcpr',);
        }

        // famille_admin_ajoutpvcpr
        if ($pathinfo === '/ajoutpvcpr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcprController::ajoutpvcprAction',  '_route' => 'famille_admin_ajoutpvcpr',);
        }

        // supprimer_pvcpr
        if ($pathinfo === '/deletepvcpr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcprController::deletepvcprAction',  '_route' => 'supprimer_pvcpr',);
        }

        // modifier_pvcpr
        if ($pathinfo === '/modifierpvcpr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvcprController::modifierpvcprAction',  '_route' => 'modifier_pvcpr',);
        }

        // famille_admin_listpvr
        if ($pathinfo === '/listpvr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvrController::listpvrAction',  '_route' => 'famille_admin_listpvr',);
        }

        // famille_admin_ajoutpvr
        if ($pathinfo === '/ajoutpvr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvrController::ajoutpvrAction',  '_route' => 'famille_admin_ajoutpvr',);
        }

        // supprimer_pvr
        if ($pathinfo === '/deletepvr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvrController::deletepvrAction',  '_route' => 'supprimer_pvr',);
        }

        // modifier_pvr
        if ($pathinfo === '/modifierpvr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\PvrController::modifierpvrAction',  '_route' => 'modifier_pvr',);
        }

        // famille_admin_listquin
        if ($pathinfo === '/listquin') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\QuinController::listquinAction',  '_route' => 'famille_admin_listquin',);
        }

        // famille_admin_ajoutquin
        if ($pathinfo === '/ajoutquin') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\QuinController::ajoutquinAction',  '_route' => 'famille_admin_ajoutquin',);
        }

        // supprimer_quin
        if ($pathinfo === '/deletequin') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\QuinController::deletequinAction',  '_route' => 'supprimer_quin',);
        }

        // modifier_quin
        if ($pathinfo === '/modifierquin') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\QuinController::modifierquinAction',  '_route' => 'modifier_quin',);
        }

        // famille_admin_listreg
        if ($pathinfo === '/listreg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\RegController::listregAction',  '_route' => 'famille_admin_listreg',);
        }

        // famille_admin_ajoutreg
        if ($pathinfo === '/ajoutreg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\RegController::ajoutregAction',  '_route' => 'famille_admin_ajoutreg',);
        }

        // supprimer_reg
        if ($pathinfo === '/deletereg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\RegController::deleteregAction',  '_route' => 'supprimer_reg',);
        }

        // modifier_reg
        if ($pathinfo === '/modifierreg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\RegController::modifierregAction',  '_route' => 'modifier_reg',);
        }

        // famille_admin_listres
        if ($pathinfo === '/listres') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ResController::listresAction',  '_route' => 'famille_admin_listres',);
        }

        // famille_admin_ajoutres
        if ($pathinfo === '/ajoutres') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ResController::ajoutresAction',  '_route' => 'famille_admin_ajoutres',);
        }

        // supprimer_res
        if ($pathinfo === '/deleteres') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ResController::deleteresAction',  '_route' => 'supprimer_res',);
        }

        // modifier_res
        if ($pathinfo === '/modifierres') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\ResController::modifierresAction',  '_route' => 'modifier_res',);
        }

        // famille_admin_listsan
        if ($pathinfo === '/listsan') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SanController::listsanAction',  '_route' => 'famille_admin_listsan',);
        }

        // famille_admin_ajoutsan
        if ($pathinfo === '/ajoutsan') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SanController::ajoutsanAction',  '_route' => 'famille_admin_ajoutsan',);
        }

        // supprimer_san
        if ($pathinfo === '/deletesan') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SanController::deletesanAction',  '_route' => 'supprimer_san',);
        }

        // modifier_san
        if ($pathinfo === '/modifiersan') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SanController::modifiersanAction',  '_route' => 'modifier_san',);
        }

        // famille_admin_listspl
        if ($pathinfo === '/listspl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SplController::listsplAction',  '_route' => 'famille_admin_listspl',);
        }

        // famille_admin_ajoutspl
        if ($pathinfo === '/ajoutspl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SplController::ajoutsplAction',  '_route' => 'famille_admin_ajoutspl',);
        }

        // supprimer_spl
        if ($pathinfo === '/deletepl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SplController::deletesplAction',  '_route' => 'supprimer_spl',);
        }

        // modifier_spl
        if ($pathinfo === '/modifierpl') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SplController::modifiersplAction',  '_route' => 'modifier_spl',);
        }

        // famille_admin_listspr
        if ($pathinfo === '/listspr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SprController::listsprAction',  '_route' => 'famille_admin_listspr',);
        }

        // famille_admin_ajoutspr
        if ($pathinfo === '/ajoutspr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SprController::ajoutsprAction',  '_route' => 'famille_admin_ajoutspr',);
        }

        // supprimer_spr
        if ($pathinfo === '/deletepr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SprController::deletesprAction',  '_route' => 'supprimer_spr',);
        }

        // modifier_spr
        if ($pathinfo === '/modifierpr') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\SprController::modifiersprAction',  '_route' => 'modifier_spr',);
        }

        // famille_admin_listtub
        if ($pathinfo === '/listtub') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubController::listtubAction',  '_route' => 'famille_admin_listtub',);
        }

        // famille_admin_ajouttub
        if ($pathinfo === '/ajouttub') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubController::ajouttubAction',  '_route' => 'famille_admin_ajouttub',);
        }

        // supprimer_tub
        if ($pathinfo === '/deletetub') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubController::deletetubAction',  '_route' => 'supprimer_tub',);
        }

        // modifier_tub
        if ($pathinfo === '/modifiertub') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubController::modifiertubAction',  '_route' => 'modifier_tub',);
        }

        // famille_admin_listtubg
        if ($pathinfo === '/listtubg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubgController::listtubgAction',  '_route' => 'famille_admin_listtubg',);
        }

        // famille_admin_ajouttubg
        if ($pathinfo === '/ajouttubg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubgController::ajouttubgAction',  '_route' => 'famille_admin_ajouttubg',);
        }

        // supprimer_tubg
        if ($pathinfo === '/deletetubg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubgController::deletetubgAction',  '_route' => 'supprimer_tubg',);
        }

        // modifier_tubg
        if ($pathinfo === '/modifiertubg') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubgController::modifiertubgAction',  '_route' => 'modifier_tubg',);
        }

        // famille_admin_listtubn
        if ($pathinfo === '/listtubn') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubnController::listtubnAction',  '_route' => 'famille_admin_listtubn',);
        }

        // famille_admin_ajouttubn
        if ($pathinfo === '/ajouttubn') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubnController::ajouttubnAction',  '_route' => 'famille_admin_ajouttubn',);
        }

        // supprimer_tubn
        if ($pathinfo === '/deletetubn') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubnController::deletetubnAction',  '_route' => 'supprimer_tubn',);
        }

        // modifier_tubn
        if ($pathinfo === '/modifiertubn') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\TubnController::modifiertubnAction',  '_route' => 'modifier_tubn',);
        }

        // famille_admin_listvann
        if ($pathinfo === '/listvann') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\VannController::listvannAction',  '_route' => 'famille_admin_listvann',);
        }

        // famille_admin_ajoutvann
        if ($pathinfo === '/ajoutvann') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\VannController::ajoutvannAction',  '_route' => 'famille_admin_ajoutvann',);
        }

        // supprimer_vann
        if ($pathinfo === '/deletevann') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\VannController::deletevannAction',  '_route' => 'supprimer_vann',);
        }

        // modifier_vann
        if ($pathinfo === '/modifiervann') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\VannController::modifiervannAction',  '_route' => 'modifier_vann',);
        }

        // famille_admin_listbonsortir
        if ($pathinfo === '/listbonsortir') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonsortirController::listbonsortirAction',  '_route' => 'famille_admin_listbonsortir',);
        }

        // famille_admin_ajoutbonsortir
        if ($pathinfo === '/ajoutbonsortir') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonsortirController::ajoutbonsortirAction',  '_route' => 'famille_admin_ajoutbonsortir',);
        }

        // supprimer_bonsortir
        if ($pathinfo === '/deletebonsortir') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonsortirController::deletebonsortirAction',  '_route' => 'supprimer_bonsortir',);
        }

        // modifier_bonsortir
        if ($pathinfo === '/modifierbonsortir') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonsortirController::modifierbonsortirAction',  '_route' => 'modifier_bonsortir',);
        }

        // famille_admin_listbonretour
        if ($pathinfo === '/listbonretour') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonretourController::listbonretourAction',  '_route' => 'famille_admin_listbonretour',);
        }

        // famille_admin_ajoutbonretour
        if ($pathinfo === '/ajoutbonretour') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonretourController::ajoutbonretourAction',  '_route' => 'famille_admin_ajoutbonretour',);
        }

        // supprimer_bonretour
        if ($pathinfo === '/deletebonretour') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonretourController::deletebonretourAction',  '_route' => 'supprimer_bonretour',);
        }

        // modifier_bonretour
        if ($pathinfo === '/modifierbonretour') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonretourController::modifierbonretourAction',  '_route' => 'modifier_bonretour',);
        }

        // famille_admin_listbonlivraison
        if ($pathinfo === '/listbonlivraison') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonlivraisonController::listbonlivraisonAction',  '_route' => 'famille_admin_listbonlivraison',);
        }

        // famille_admin_ajoutbonlivraison
        if ($pathinfo === '/ajoutbonlivraison') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonlivraisonController::ajoutbonlivraisonAction',  '_route' => 'famille_admin_ajoutbonlivraison',);
        }

        // supprimer_bonlivraison
        if ($pathinfo === '/deletebonlivraison') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonlivraisonController::deletebonlivraisonAction',  '_route' => 'supprimer_bonlivraison',);
        }

        // modifier_bonlivraison
        if ($pathinfo === '/modifierbonlivraison') {
            return array (  '_controller' => 'FamilleBundle\\Controller\\BonlivraisonController::modifierbonlivraisonAction',  '_route' => 'modifier_bonlivraison',);
        }

        if (0 === strpos($pathinfo, '/details')) {
            if (0 === strpos($pathinfo, '/detailsbon')) {
                // details_bonsortir
                if ($pathinfo === '/detailsbonlivraison') {
                    return array (  '_controller' => 'FamilleBundle\\Controller\\BonsortirController::listdetailbonsortirAction',  '_route' => 'details_bonsortir',);
                }

                // details_bonretour
                if ($pathinfo === '/detailsbonretour') {
                    return array (  '_controller' => 'FamilleBundle\\Controller\\BonretourController::listdetailbonretourAction',  '_route' => 'details_bonretour',);
                }

            }

            // detailslivraison
            if ($pathinfo === '/details') {
                return array (  '_controller' => 'FamilleBundle\\Controller\\BonlivraisonController::detailbonlivraisonAction',  '_route' => 'detailslivraison',);
            }

        }

        if (0 === strpos($pathinfo, '/listsimplebon')) {
            // detailssimpelivraison
            if ($pathinfo === '/listsimplebonlivraison') {
                return array (  '_controller' => 'FamilleBundle\\Controller\\BonlivraisonController::listsimplebonlivraisonAction',  '_route' => 'detailssimpelivraison',);
            }

            // detailssimperetour
            if ($pathinfo === '/listsimplebonretour') {
                return array (  '_controller' => 'FamilleBundle\\Controller\\BonretourController::listsimplebonretourAction',  '_route' => 'detailssimperetour',);
            }

            // detailssimpesortir
            if ($pathinfo === '/listsimplebonsortir') {
                return array (  '_controller' => 'FamilleBundle\\Controller\\BonsortirController::listsimplebonsortirAction',  '_route' => 'detailssimpesortir',);
            }

        }

        // my_app_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_user_homepage')), array (  '_controller' => 'MyAppUserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_delete
            if ($pathinfo === '/userdelete') {
                return array (  '_controller' => 'MyAppUserBundle\\Controller\\UserController::deleteAction',  '_route' => 'user_delete',);
            }

            // user_list
            if ($pathinfo === '/userlist') {
                return array (  '_controller' => 'MyAppUserBundle\\Controller\\UserController::listAction',  '_route' => 'user_list',);
            }

        }

        // user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_homepage')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
