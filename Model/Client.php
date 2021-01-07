<?php

require_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Model\User.php';
class Client extends User
{
    private ?string $idClient=null;
    private ?string $numCarte=null;
    private ?string $codeCarte=null;
    public function __construct(?string $firstname, ?string $lastname, ?string $email, ?string $login, ?string $passwd,?string $numCarte,?string $codeCarte)
    {
        parent::__construct($firstname, $lastname, $email, $login, $passwd);
        $this->numCarte=$numCarte;
        $this->codeCarte=$codeCarte;
        $this->idClient=hash('md5',$this->getFirstname().$this->getLastname());
    }

    /**
     * @return string|null
     */
    public function getIdClient(): ?string
    {
        return $this->idClient;
    }

    /**
     * @return string|null
     */
    public function getNumCarte(): ?string
    {
        return $this->numCarte;
    }

    /**
     * @return string|null
     */
    public function getCodeCarte(): ?string
    {
        return $this->codeCarte;
    }

    /**
     * @param string|null $numCarte
     */
    public function setNumCarte(?string $numCarte): void
    {
        $this->numCarte = $numCarte;
    }

    /**
     * @param null
     */
    public function setIdClient(): void
    {
        $this->idClient = hash('md5',$this->getFirstname().$this->getLastname());
    }
}