<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyAppUserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of UserController
 *
 * @author Boukhchina Alaa
 */
class UserController extends Controller {
    public function deleteAction()
    {
        $req=$this->getRequest();
        $id=$req->get('id');
        $em=$this->getDoctrine()->getManager();
       $user = $this->container->get('security.context')->getToken()->getUser()->getNom();
        $user1 = $this->container->get('security.context')->getToken()->getUser()->getPrenom();
        $username=$user." ".$user1;
       
       $usera =$em->getRepository("MyAppUserBundle:User")
                   ->find($id);
       
       $em->remove($usera);
       $em->flush();
       return $this->redirectToRoute("user_list",array("user"=>$username));
    }
    
    public function listAction()
    {   $user = $this->container->get('security.context')->getToken()->getUser()->getNom();
        $user1 = $this->container->get('security.context')->getToken()->getUser()->getPrenom();
        $username=$user." ".$user1;
       
        $em = $this->getDoctrine()->getManager();
        $usera = $em->getRepository("MyAppUserBundle:User")->findAll();
        return $this->render("MyAppUserBundle:user:listUser.html.twig",array("users"=>$usera,"user"=>$username));
    }
    
}
