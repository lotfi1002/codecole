<?php
// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface 
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
	
	/**
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
	private $name ;
	
	 /**
		 * @var string
		 *
		 * @ORM\Column(name="type", type="string", length=255, nullable=true)
		 */
			private $type;
	
	 /**
		 * @var string
		 *
		 * @ORM\Column(name="role", type="string", length=255, nullable=true)
		 */
			private $role;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }


    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Compte
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Compte
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
	
	/**
     * Set type
     *
     * @param string $type
     *
     * @return Compte
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
	
	/**
     * Set type
     *
     * @param string $role
     *
     * @return Compte
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
	
	
	/**
     * Set type
     *
     * @param string $isActive
     *
     * @return Compte
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

  
/**
     * Set username
     *
     * @param string $username
     *
     * @return Compte
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
   
	
	
	public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }
	
	/**
     * Set type
     *
     * @param string $role
     *
     * @return Compte
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

?>