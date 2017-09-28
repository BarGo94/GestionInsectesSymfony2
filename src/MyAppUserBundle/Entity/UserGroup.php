<?php

namespace MyAppUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()

 * @ORM\Table(name="usergroup")
 */
class UserGroup {

    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection|User[]
     * @ORM\ManyToMany(targetEntity="User", mappedBy="userGroups")
     */
    function getId() {
        return $this->id;
    }

    function getUsers() {
        return $this->users;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsers(\Doctrine\Common\Collections\Collection $users) {
        $this->users = $users;
    }

    protected $users;

    /**
     * Default constructor, initializes collections
     */
    public function __construct() {
        $this->users = new ArrayCollection();
    }

    /**
     * @param User $user
     */
    public function addUser(User $user) {
        if ($this->users->contains($user)) {
            return;
        }
        $this->users->add($user);
        $user->addUserGroup($this);
    }

    /**
     * @param User $user
     */
    public function removeUser(User $user) {
        if (!$this->users->contains($user)) {
            return;
        }
        $this->users->removeElement($user);
        $user->removeUserGroup($this);
    }

}
