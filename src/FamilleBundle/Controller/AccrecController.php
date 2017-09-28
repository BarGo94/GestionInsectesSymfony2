<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FamilleBundle\Controller;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AccrecController
 *
 * @author Boukhchina Alaa
 */
class AccrecController extends Controller {

    public function ajoutaccrecAction() {
        $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
        $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
        $username = $user . " " . $user1;
        return $this->render('FamilleBundle:Famille:defaultstart.html.twig', array("user" => $username));
    }

    /* public function listaccrecAction() {
      $em = $this->getDoctrine()->getManager();
      $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
      $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
      $username = $user . " " . $user1;
      $accrec = $em->getRepository("FamilleBundle:Accrec")->findAll();
      return $this->render("FamilleBundle:Famille:affichage_accrec.html.twig", array("os" => $accrec, "user" => $username));
      }
     */
    /*  public function deleteaccrecAction() {
      $req = $this->get('request');
      $id = $req->get('id');
      $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
      $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
      $username = $user . " " . $user1;

      $em = $this->getDoctrine()->getManager();

      $accrec = $em->getRepository("FamilleBundle:Accrec")
      ->find($id);

      $em->remove($accrec);
      $em->flush();
      return $this->redirectToRoute("famille_admin_listaccrec", array("user" => $username));
      }
     */

    public function updateinfoAction() {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $famille = $_POST['famille'];
        $race = $_POST['race'];
        $nourriture = $_POST['nourriture'];
        $host = "localhost";
        $userrr = "root";
        $passwords = "";
        $connection = mysqli_connect($host, $userrr, $passwords, 'gestion');
        if (!$connection) {
            die("connection failed");
        } else {
            $queryfinal = "UPDATE `insect` SET `username`='$username',`username_canonical`='$username',`email`='$email',`email_canonical`='$email',`ageed`='$age',`famille`='$famille',`race`='$race',`nourriture`='$nourriture' WHERE `id`='$id'";
            mysqli_query($connection, $queryfinal);
            $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
            $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
            $username = $user . " " . $user1;
            return $this->render('FamilleBundle:Famille:defaultstart.html.twig', array("user" => $username));
        }
    }

    public function showAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
        $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
        $entity = $em->getRepository('MyAppUserBundle:User')->find($this->container->get('security.context')->getToken()->getUser()->getId());
        $username = $user . " " . $user1;
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }


        return $this->render('MyAppUserBundle:user:listUser.html.twig', array(
                    'users' => $entity, "user" => $username
        ));
    }

    /**
     * Edit the user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);
        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');
        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);
            $userManager->updateUser($user);
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
            return $response;
        }
        return $this->render('@FOSUser/Profile/edit.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function friendaddAction() {
        $host = "localhost";
        $userrr = "root";
        $passwords = "";
        $connection = mysqli_connect($host, $userrr, $passwords, 'gestion');
        if (!$connection) {
            die("connection failed");
        } else {
            $id = $this->container->get('security.context')->getToken()->getUser()->getId();
            $queryfinal = "SELECT `id`,`username`,`ageed`, `famille`, `race`, `nourriture` FROM `insect` WHERE `id`!=$id";
            $resultfinal = mysqli_query($connection, $queryfinal);
            $records = array();
            while ($r = mysqli_fetch_assoc($resultfinal)) {
                $records[] = $r;
            }
            $usernames = array();
            $ages = array();
            $races = array();
            $familles = array();
            $nourritures = array();
            $ids = array();
            foreach ($records as $tit) {
                $ids[] = $tit['id'];
                $usernames[] = $tit['username'];
                $ages[] = $tit['ageed'];
                $races[] = $tit['race'];
                $familles[] = $tit['famille'];
                $nourritures[] = $tit['nourriture'];
            }
            $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
            $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
            $username = $user . " " . $user1;
            return $this->render('FamilleBundle:Famille:listfriends.html.twig', array("ids" => $ids, "usernames" => $usernames, "familles" => $familles, "races" => $races, "nourritures" => $nourritures, "ages" => $ages, "user" => $username));
        }
    }

    public function friendadddAction() {
        $req = $this->get('request');
        $id = $req->get('id');
        $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
        $conuser = $this->container->get('security.context')->getToken()->getUser()->getId();
        $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
        $username = $user . " " . $user1;
        $host = "localhost";
        $userrr = "root";
        $passwords = "";
        $connection = mysqli_connect($host, $userrr, $passwords, 'gestion');
        if (!$connection) {
            die("connection failed");
        } else {
            $queryfinal = "INSERT INTO `usergroup`(`id_user`, `id_friend`) VALUES ($conuser,$id)";
            mysqli_query($connection, $queryfinal);
            return $this->render('FamilleBundle:Famille:defaultstart.html.twig', array("user" => $username));
        }
    }

    public function listfriendsAction() {
        $host = "localhost";
        $userrr = "root";
        $passwords = "";
        $connection = mysqli_connect($host, $userrr, $passwords, 'gestion');
        if (!$connection) {
            die("connection failed");
        } else {
            $id = $this->container->get('security.context')->getToken()->getUser()->getId();
            $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
            $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
            $username = $user . " " . $user1;
            $queryfinal = "SELECT `id_friend` FROM `usergroup` WHERE `id_user`=$id";
            $resultfinal = mysqli_query($connection, $queryfinal);
            $records = array();
            while ($r = mysqli_fetch_assoc($resultfinal)) {
                $records[] = $r;
            }
            $ids = array();
            foreach ($records as $tit) {
                $ids[] = $tit['id_friend'];
            }
            $array = join(',', $ids);
            $query = "SELECT `id`,`username`,`ageed`, `famille`, `race`, `nourriture` FROM insect WHERE id IN (SELECT `id_friend` FROM `usergroup` WHERE `id_user`=$id) AND id!=$id";
            $friends = mysqli_query($connection, $query);
            $recordss = array();
            while ($r = mysqli_fetch_assoc($friends)) {
                $recordss[] = $r;
            }
            $usernames = array();
            $ages = array();
            $races = array();
            $familles = array();
            $nourritures = array();
            $idsss = array();
            foreach ($recordss as $tit) {
                $idsss[] = $tit['id'];
                $usernames[] = $tit['username'];
                $ages[] = $tit['ageed'];
                $races[] = $tit['race'];
                $familles[] = $tit['famille'];
                $nourritures[] = $tit['nourriture'];
            }

            return $this->render('FamilleBundle:Famille:maliste.html.twig', array("ids" => $idsss, "usernames" => $usernames, "familles" => $familles, "races" => $races, "nourritures" => $nourritures, "ages" => $ages, "user" => $username));
        }
    }

    public function deletefriendAction() {
        $host = "localhost";
        $userrr = "root";
        $passwords = "";
        $connection = mysqli_connect($host, $userrr, $passwords, 'gestion');
        $req = $this->get('request');
        $id = $req->get('id');
        $user = $this->container->get('security.context')->getToken()->getUser()->getRace();
        $user1 = $this->container->get('security.context')->getToken()->getUser()->getFamille();
        $username = $user . " " . $user1;
        $conuser = $this->container->get('security.context')->getToken()->getUser()->getId();
        $query = "DELETE FROM `usergroup` WHERE id_friend=$id AND id_user=$conuser";
        mysqli_query($connection, $query);
        return $this->render('FamilleBundle:Famille:defaultstart.html.twig', array("user" => $username));
    }

}
