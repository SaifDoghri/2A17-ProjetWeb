<?php


abstract class User
{
    private ?string $prenom = null;
    private ?string $nom=null;
    private ?string $email=null;
    private ?string $login=null;
    private ?string $mdp=null;

    public function __construct(?string $firstname,?string $lastname,?string $email,?string $login,?string $passwd)
    {
        $this->prenom=$firstname;
        $this->nom=$lastname;
        $this->email=$email;
        $this->login=$login;
        $this->mdp=$passwd;
    }


    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->prenom;
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->nom;
    }

    /**
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * @return string|null
     */
    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $firstname
     */
    public function setFirstname(?string $firstname): void
    {
        $this->prenom = $firstname;
    }

    /**
     * @param string|null $lastname
     */
    public function setLastname(?string $lastname): void
    {
        $this->nom = $lastname;
    }

    /**
     * @param string|null $login
     */
    public function setLogin(?string $login): void
    {
        $this->login = $login;
    }

    /**
     * @param string|null $mdp
     */
    public function setMdp(?string $mdp): void
    {
        $this->mdp = $mdp;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}