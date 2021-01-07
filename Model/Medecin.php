<?php
require_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Model\User.php';

class Medecin extends User
{
    private ?string $idMedecin=null;
    private ?string $qualification=null;
    private ?int $experience=null;
    private ?string $numCarte=null;
    private ?string $codeCarte=null;
    public function __construct(?string $firstname, ?string $lastname, ?string $email, ?string $login, ?string $passwd,?string $numCarte,?string $codeCarte,?string $qualification,?int $experience)
    {
        parent::__construct($firstname, $lastname, $email, $login, $passwd);
        $this->qualification=$qualification;
        $this->experience=$experience;
        $this->numCarte=$numCarte;
        $this->codeCarte=$codeCarte;
        $this->idMedecin=hash('md5',$this->getFirstname().$this->getLastname().$this->getQualification().$this->getExperience());
    }

    /**
     * @return string|null
     */
    public function getIdMedecin(): ?string
    {
        return $this->idMedecin;
    }

    /**
     * @return int|null
     */
    public function getExperience(): ?int
    {
        return $this->experience;
    }

    /**
     * @return string|null
     */
    public function getQualification(): ?string
    {
        return $this->qualification;
    }

    /**
     * @param int|null $experience
     */
    public function setExperience(?int $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @param string|null $qualification
     */
    public function setQualification(?string $qualification): void
    {
        $this->qualification = $qualification;
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
}