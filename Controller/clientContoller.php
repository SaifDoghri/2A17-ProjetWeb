<?php
require_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Config.php';
include_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Model\Client.php';

class clientContoller
{
    public function afficherClients(){
        $db=Config::getConnexion();
        try{
            $query=$db->query('SELECT * FROM CLIENT');
            return $query->fetchAll();
        }catch (PDOException $e){
            echo "Error : ".$e->getMessage()." !";
        }
        unset($db);
        Config::endConnexion();
        return null;
    }

    public function ajouterClient(Client $client){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('INSERT INTO CLIENT(idClient,prenom,nom,email,login,mdp,numCarteCredit,codeCarteCredit) VALUES (:idClient,:prenom,:nom,:email,:login,:mdp,:numCarteCredit,:codeCarteCredit)');
            $firstname = $client->getFirstname();
            $lastname= $client->getLastname();
            $email=$client->getEmail();
            $login=$client->getLogin();
            $mdp=$client->getMdp();
            $idClient=$client->getIdClient();
            $numCarteCredit=$client->getNumCarte();
            $codeCarteCredit=$client->getCodeCarte();
            $query->bindParam(':idClient',$idClient);
            $query->bindParam(':prenom', $firstname);
            $query->bindParam(':nom',$lastname);
            $query->bindParam(':email',$email);
            $query->bindParam(':login',$login);
            $query->bindParam(':mdp',$mdp);
            $query->bindParam(':numCarteCredit',$numCarteCredit);
            $query->bindParam(':codeCarteCredit',$codeCarteCredit);
            $query->execute();
        }catch (PDOException $e){
            die("Error : ".$e->getMessage()." !");
        }
        unset($db);
        Config::endConnexion();
    }
    public function modifierClient(Client $client, string $id){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('UPDATE CLIENT SET prenom=:prenom,nom=:nom,email=:email,login=:login,mdp=:mdp,numCarteCredit=:numCarte,codeCarteCredit=:codeCarte WHERE idClient=:id');
            $firstname = $client->getFirstname();
            $lastname= $client->getLastname();
            $email=$client->getEmail();
            $login=$client->getLogin();
            $mdp=$client->getMdp();
            $carteCredit=$client->getNumCarte();
            $codeCredit=$client->getCodeCarte();
            $query->bindParam(':prenom', $firstname);
            $query->bindParam(':nom',$lastname);
            $query->bindParam(':email',$email);
            $query->bindParam(':login',$login);
            $query->bindParam(':mdp',$mdp);
            $query->bindParam(':numCarte',$carteCredit);
            $query->bindParam(':codeCarte',$codeCredit);
            $query->bindParam(':id',$id);
            $query->execute();
        }catch (PDOException $e){
            die("Error : ".$e->getMessage()." !");
        }
        unset($db);
        Config::endConnexion();
    }
    public function supprimerClient(string $id){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('DELETE FROM CLIENT WHERE idClient=:id');
            $query->bindParam(':id',$id);
            $query->execute();
        }catch (PDOException $e){
            die("Error : ".$e->getMessage()." !");
        }
        unset($db);
        Config::endConnexion();
    }

    public function recupererClient(string $id){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('SELECT * FROM CLIENT WHERE idClient=:id');
            $query->bindParam(':id',$id);
            $query->execute();
            return $query->fetchAll();
        }catch (PDOException $e){
            echo "Erroe : ".$e->getMessage()." !";
        }
        unset($db);
        Config::endConnexion();
        return null;
    }
    public function connexionClient(string $login,string $password){
        $db=Config::getConnexion();
        try{
            $query=$db->query("SELECT * FROM CLIENT WHERE login='$login' AND mdp='$password'");
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