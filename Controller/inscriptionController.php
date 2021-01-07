<?php

require_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Config.php';

class inscriptionController
{
    public function ajouterInscription(?string $idMedecin,?string $idClient){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('INSERT INTO INSCRIPTION(idClient,idMedecin,date_inscription,prix) VALUES (:idClient,:idMedecin,:date_inscription,:prix) ');
            $query->bindParam(':idClient',$idClient);
            $query->bindParam(':idMedecin',$idMedecin);
            $date = date('y-m-d');
            $query->bindParam(':date_inscription', $date);
            $null = null;
            $query->bindParam(':prix', $null);
            $query->execute();
        }catch (PDOException $e){
            die('Error : '.$e->getMessage().' !');
        }
        unset($db);
        Config::endConnexion();
    }
    public function checkInscription(?string $idClient,?string $idMedecin){
        $db=Config::getConnexion();
        try{
            $query=$db->prepare('Select * from Inscription where idClient=:idClient and idMedecin=:idMedecin');
            $query->bindParam(':idClient',$idClient);
            $query->bindParam(':idMedecin',$idMedecin);
            $query->execute();
            return $query->rowCount();
        }catch (PDOException $e){
            die('Error : '.$e->getMessage().' !');
        }
        unset($db);
        Config::endConnexion();
        return null;
    }
}