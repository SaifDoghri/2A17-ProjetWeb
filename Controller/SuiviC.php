<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/Config.php";
class SuiviC{

    public function afficher($Suivi){
        $id=$Suivi->getid();
        $nom=$Suivi->getNom();
        $prenom=$Suivi->getPrenom();
        $question1=$Suivi->getQuestion1();
        $question2=$Suivi->getQuestion2();
        $question3=$Suivi->getQuestion3();
        $question4=$Suivi->getQuestion4();
        $question5=$Suivi->getQuestion5();

}    
    
    function rechercherTicket($str){
        $sql="select * from suivi where etat!=0 and nom like '%".$str."%' or prenom like '%".$str."%' and etat!=0";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

public function afficherSuivis(){
    $sql="SELECT * From Suivi where etat=1 or etat=2 ";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}


    function recupererSuivi($id){
        $sql="SELECT * from Suivi where id=$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererSuiviUtilisateur($id_utilisateur){
        $sql="SELECT * from Suivi where id_utilisateur=$id_utilisateur";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierSuivi($Suivi,$etat,$id){
        $sql="UPDATE Suivi SET commentaire1=:commentaire1,commentaire2=:commentaire2,commentaire3=:commentaire3,commentaire4=:commentaire4,commentaire5=:commentaire5,etat=:etat WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->squestiontribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $commentaire1=$Suivi->getCommentaire1();
        $commentaire2=$Suivi->getCommentaire2();
        $commentaire3=$Suivi->getCommentaire3();
        $commentaire4=$Suivi->getCommentaire4();
        $commentaire5=$Suivi->getCommentaire5();
        $datas = array(':id'=>$id,':commentaire1'=>$commentaire1, ':commentaire2'=>$commentaire2,':commentaire3'=>$commentaire3,':commentaire4'=>$commentaire4,':commentaire5'=>$commentaire5);
        $req->bindValue(':id',$id);
        $req->bindValue(':commentaire1',$commentaire1);
        $req->bindValue(':commentaire2',$commentaire2);
        $req->bindValue(':commentaire3',$commentaire3);
        $req->bindValue(':commentaire4',$commentaire4);
        $req->bindValue(':commentaire5',$commentaire5);
        $req->bindValue(':etat',$etat);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
	
	function modifierSuiviUtilisateur($Suivi,$etat,$id){
        $sql="UPDATE Suivi SET reponse1=:reponse1,reponse2=:reponse2,reponse3=:reponse3,reponse4=:reponse4,reponse5=:reponse5,etat=:etat WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->squestiontribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $reponse1=$Suivi->getReponse1();
        $reponse2=$Suivi->getReponse2();
        $reponse3=$Suivi->getReponse3();
        $reponse4=$Suivi->getReponse4();
        $reponse5=$Suivi->getReponse5();
        $datas = array(':id'=>$id,':reponse1'=>$reponse1, ':reponse2'=>$reponse2,':reponse3'=>$reponse3,':reponse4'=>$reponse4,':reponse5'=>$reponse5);
        $req->bindValue(':id',$id);
        $req->bindValue(':reponse1',$reponse1);
        $req->bindValue(':reponse2',$reponse2);
        $req->bindValue(':reponse3',$reponse3);
        $req->bindValue(':reponse4',$reponse4);
        $req->bindValue(':reponse5',$reponse5);
        $req->bindValue(':etat',$etat);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }


public function ajouterSuiviAdmin($Suivi,$etat){
    $sql="insert into Suivi(nom,prenom,id_utilisateur,question1,question2,question3,question4,question5,etat) values(:nom,:prenom,:id_utilisateur,:question1,:question2,:question3,:question4,:question5,:etat)";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
        $nom=$Suivi->getNom();
        $prenom=$Suivi->getPrenom();
        $id_utilisateur=$Suivi->getId_Utilisateur();
        $question1=$Suivi->getQuestion1();
        $question2=$Suivi->getQuestion2();
        $question3=$Suivi->getQuestion3();
        $question4=$Suivi->getQuestion4();
        $question5=$Suivi->getQuestion5();

        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':id_utilisateur',$id_utilisateur);
        $req->bindValue(':question1',$question1);
        $req->bindValue(':question2',$question2);
        $req->bindValue(':question3',$question3);
        $req->bindValue(':question4',$question4);
        $req->bindValue(':question5',$question5);
        $req->bindValue(':etat',$etat);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function ajouterSuivi($Suivi,$etat){
    $sql="insert into Suivi(nom,prenom,id_utilisateur,question1,question2,question3,question4,question5,reponse1,reponse2,reponse3,reponse4,reponse5,etat) values(:nom,:prenom,:id_utilisateur,:question1,:question2,:question3,:question4,:question5,:reponse1,:reponse2,:reponse3,:reponse4,:reponse5,:etat)";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
        $nom=$Suivi->getNom();
        $prenom=$Suivi->getPrenom();
        $id_utilisateur=$Suivi->getId_Utilisateur();
        $question1=$Suivi->getQuestion1();
        $question2=$Suivi->getQuestion2();
        $question3=$Suivi->getQuestion3();
        $question4=$Suivi->getQuestion4();
        $question5=$Suivi->getQuestion5();
        $reponse1=$Suivi->getReponse1();
        $reponse2=$Suivi->getReponse2();
        $reponse3=$Suivi->getReponse3();
        $reponse4=$Suivi->getReponse4();
        $reponse5=$Suivi->getReponse5();

        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':id_utilisateur',$id_utilisateur);
        $req->bindValue(':question1',$question1);
        $req->bindValue(':question2',$question2);
        $req->bindValue(':question3',$question3);
        $req->bindValue(':question4',$question4);
        $req->bindValue(':question5',$question5);
        $req->bindValue(':reponse1',$reponse1);
        $req->bindValue(':reponse2',$reponse2);
        $req->bindValue(':reponse3',$reponse3);
        $req->bindValue(':reponse4',$reponse4);
        $req->bindValue(':reponse5',$reponse5);
        $req->bindValue(':etat',$etat);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function supprimerSuivi($id){
    $sql="DELETE FROM Suivi where id=:id";
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