<?php

require_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Model\Medecin.php';
require_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Config.php';
class medecinController
{
    public function afficherMedecins(){
        $db=Config::getConnexion();
        try{
            $query=$db->query('SELECT * FROM Medecin');
            return $query->fetchAll();
        }catch (PDOException $e){
            echo "Error : ".$e->getMessage()." !";
        }
        unset($db);
        Config::endConnexion();
        return null;
    }
    public function ajouterMedecin(Medecin $medecin){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('INSERT INTO Medecin(idMedecin,prenom,nom,email,login,mdp,numCarteCredit,codeCarteCredit,qualification,experience) VALUES (:idMedecin,:prenom,:nom,:email,:login,:mdp,:numCarteCredit,:codeCarteCredit,:qualification,:experience)');
            $firstname = $medecin->getFirstname();
            $lastname= $medecin->getLastname();
            $email=$medecin->getEmail();
            $login=$medecin->getLogin();
            $mdp=$medecin->getMdp();
            $idMedecin=$medecin->getIdMedecin();
            $numCarteCredit=$medecin->getNumCarte();
            $codeCarteCredit=$medecin->getCodeCarte();
            $qualification=$medecin->getQualification();
            $experience=$medecin->getExperience();
            $query->bindParam(':idMedecin',$idMedecin);
            $query->bindParam(':prenom', $firstname);
            $query->bindParam(':nom',$lastname);
            $query->bindParam(':email',$email);
            $query->bindParam(':login',$login);
            $query->bindParam(':mdp',$mdp);
            $query->bindParam(':numCarteCredit',$numCarteCredit);
            $query->bindParam(':codeCarteCredit',$codeCarteCredit);
            $query->bindParam(':qualification',$qualification);
            $query->bindParam(':experience',$experience);
            $query->execute();
        }catch (PDOException $e){
            die("Error : ".$e->getMessage()." !");
        }
        unset($db);
        Config::endConnexion();
    }
    public function modifierMedecin(Medecin $medecin, string $id){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('UPDATE MEDECIN SET prenom=:prenom,nom=:nom,email=:email,login=:login,mdp=:mdp,numCarteCredit=:numCarte,codeCarteCredit=:codeCarte,qualification=:qualification,experience=:experience WHERE idMedecin=:id');
            $firstname = $medecin->getFirstname();
            $lastname= $medecin->getLastname();
            $email=$medecin->getEmail();
            $login=$medecin->getLogin();
            $mdp=$medecin->getMdp();
            $qualification=$medecin->getQualification();
            $experience=$medecin->getExperience();
            $numCarte=$medecin->getNumCarte();
            $codeCarte=$medecin->getCodeCarte();
            $query->bindParam(':prenom', $firstname);
            $query->bindParam(':nom',$lastname);
            $query->bindParam(':email',$email);
            $query->bindParam(':login',$login);
            $query->bindParam(':mdp',$mdp);
            $query->bindParam(':numCarte',$numCarte);
            $query->bindParam(':codeCarte',$codeCarte);
            $query->bindParam(':qualification',$qualification);
            $query->bindParam(':experience',$experience);
            $query->bindParam(':id',$id);
            $query->execute();
        }catch (PDOException $e){
            die("Error : ".$e->getMessage()." !");
        }
        unset($db);
        Config::endConnexion();
    }
    public function supprimerMedecin(string $id){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('DELETE FROM Medecin WHERE idMedecin=:id');
            $query->bindParam(':id',$id);
            $query->execute();
        }catch (PDOException $e){
            die("Error : ".$e->getMessage()." !");
        }
        unset($db);
        Config::endConnexion();
    }
    public function recupererMedecin(string $id){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('SELECT * FROM MEDECIN WHERE idMedecin=:id');
            $query->bindParam(':id',$id);
            $query->execute();
            return $query->fetchAll();
        }catch (PDOException $e){
            die("Error : ".$e->getMessage()." !");
        }
        unset($db);
        Config::endConnexion();
        return null;
    }
    public function connexionMedecin(string $login,string $password){
        $db=Config::getConnexion();
        try{
            $query=$db->query("SELECT * FROM Medecin WHERE login='$login' AND mdp='$password'");
            $query->execute();
            $count=$query->rowCount();
            if($count==0){
                echo "Error no User Found";
            }else{
                return $query->fetchAll();
            }
        }catch (PDOException $e){
            die("Error : ".$e->getMessage());
        }
        unset($db);
        Config::endConnexion();
        return null;
    }
}