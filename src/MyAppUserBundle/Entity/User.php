<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Anas
 */

namespace MyAppUserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity

 * @ORM\Table(name="insect")

 */
class User extends BaseUser {

    /**

     * @ORM\Id
     * @ORM\Column(type="integer")

     * @ORM\GeneratedValue(strategy="AUTO")

     *

     */
    protected $id;

    /**

     *

     * @ORM\Column(type="string", length=255)

     *

     */
    protected $ageed;

    /**

     *

     * @ORM\Column(type="string", length=255)

     *

     */
    protected $famille;

    /**

     *

     * @ORM\Column(type="string", length=255)

     *

     */
    protected $race;

    /**

     *

     * @ORM\Column(type="string", length=255)

     *

     */
    protected $nourriture;

    /**
     * @var \Doctrine\Common\Collections\Collection|UserGroup[]
     *
     * @ORM\ManyToMany(targetEntity="UserGroup", inversedBy="users")
     * @ORM\JoinTable(
     *  name="user_usergroup",
     *  joinColumns={
     *      @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="usergroup_id", referencedColumnName="id")
     *  }
     * )
     */
    protected $userGroups;

    function getId() {
        return $this->id;
    }

    function getAge() {
        return $this->ageed;
    }

    function getFamille() {
        return $this->famille;
    }

    function getRace() {
        return $this->race;
    }

    function getNourriture() {
        return $this->nourriture;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAge($ageed) {
        $this->ageed = $ageed;
    }

    function getAgeed() {
        return $this->ageed;
    }

    function setAgeed($ageed) {
        $this->ageed = $ageed;
    }

    function getUserGroups() {
        return $this->userGroups;
    }

    function setUserGroups(\Doctrine\Common\Collections\Collection $userGroups) {
        $this->userGroups = $userGroups;
    }

    function setFamille($famille) {
        $this->famille = $famille;
    }

    function setRace($race) {
        $this->race = $race;
    }

    function setNourriture($nourriture) {
        $this->nourriture = $nourriture;
    }

    /**
     * Default constructor, initializes collections
     */
    public function __construct() {
        parent::__construct();
        $this->userGroups = new ArrayCollection();
    }

    /**
     * @param UserGroup $userGroup
     */
    public function addUserGroup(UserGroup $userGroup) {
        if ($this->userGroups->contains($userGroup)) {
            return;
        }
        $this->userGroups->add($userGroup);
        $userGroup->addUser($this);
    }

    /**
     * @param UserGroup $userGroup
     */
    public function removeUserGroup(UserGroup $userGroup) {
        if (!$this->userGroups->contains($userGroup)) {
            return;
        }
        $this->userGroups->removeElement($userGroup);
        $userGroup->removeUser($this);
    }

}
