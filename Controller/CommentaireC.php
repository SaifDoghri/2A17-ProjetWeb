<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/Config.php";
class CommentaireC{

    public function afficher($Commentaire){
        $id=$Commentaire->getid();
        $id_forum=$Commentaire->getId_forum();
        $id_utilisateur=$Commentaire->getid_utilisateur();
        $com=$Commentaire->getCom();
        $description=$Commentaire->getdescription();
        $etat=$Commentaire->getetat();
        $date=$Commentaire->getDate();

}    
    
    function rechercherTicket($str){
        $sql="select * from Commentaire where id_forum like '%".$str."%' or com like '%".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

public function afficherCommentaires($id_forum){
    $sql="SELECT * From Commentaire where id_forum=$id_forum";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

public function afficherCommentaireCom($id){
    $sql="SELECT * From Commentaire where id=$id";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}
public function afficherCommentaireid_forum($id_forum){
    $sql="SELECT * From Commentaire where id_forum=$id_forum and etat=1";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}
public function afficherCommentairesForum($id_forum){
    $sql="SELECT * From Commentaire where id_forum=$id_forum ";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}
public function afficherCommentairesid_forum(){
    $sql="SELECT DISTINCT id_forum From Commentaire where etat=1";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

public function afficherCommentairesClient(){
    $sql="SELECT * From Commentaire where etat=1";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

    function recupererCommentaire($id){
        $sql="SELECT * from Commentaire where id=$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierCommentaire($com,$id){
        $sql="UPDATE Commentaire SET com=:com WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->sCommentairetribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        $req->bindValue(':com',$com);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
        function Approuver($id){
        $sql="UPDATE Commentaire SET etat=1 WHERE id=$id";
        
        $db = config::getConnexion();
        //$db->sCommentairetribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
        function NonApprouver($id){
        $sql="UPDATE Commentaire SET etat=0 WHERE id=$id";
        
        $db = config::getConnexion();
        //$db->sCommentairetribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
public function ajouterCommentaire($Commentaire){
    $sql="insert into Commentaire(id_forum,id_utilisateur,com,etat,date) values(:id_forum,:id_utilisateur,:com,:etat,now())";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
        $id_forum=$Commentaire->getId_forum();
        $id_utilisateur=$Commentaire->getId_utilisateur();
        $com=$Commentaire->getCom();
        $etat=$Commentaire->getEtat();

        $req->bindValue(':id_forum',$id_forum);
        $req->bindValue(':id_utilisateur',$id_utilisateur);
        $req->bindValue(':com',$com);
        $req->bindValue(':etat',$etat);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function supprimerCommentaire($id){
    $sql="DELETE FROM Commentaire where id=:id";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
}
?>