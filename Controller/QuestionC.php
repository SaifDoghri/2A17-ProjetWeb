<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/Config.php";
class QuestionC{

    public function afficher($Question){
        $id=$Question->getid();
        $question1=$Question->getQuestion1();
        $question2=$Question->getQuestion2();
        $question3=$Question->getQuestion3();
        $question4=$Question->getQuestion4();
        $question5=$Question->getQuestion5();

}    
    
    function rechercherTicket($str){
        $sql="select * from Question where question1 like '%".$str."%' or question2 like '%".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

public function afficherQuestions(){
    $sql="SELECT * From Question";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}


    function recupererQuestion($id){
        $sql="SELECT * from Question where id=$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierQuestion($Question,$id){
        $sql="UPDATE Question SET question1=:question1,question2=:question2,question3=:question3,question4=:question4,question5=:question5 WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->squestiontribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $question1=$Question->getQuestion1();
        $question2=$Question->getQuestion2();
        $question3=$Question->getQuestion3();
        $question4=$Question->getQuestion4();
        $question5=$Question->getQuestion5();
        $datas = array(':id'=>$id,':question1'=>$question1, ':question2'=>$question2,':question3'=>$question3,':question4'=>$question4,':question5'=>$question5);
        $req->bindValue(':id',$id);
        $req->bindValue(':question1',$question1);
        $req->bindValue(':question2',$question2);
        $req->bindValue(':question3',$question3);
        $req->bindValue(':question4',$question4);
        $req->bindValue(':question5',$question5);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

public function ajouterQuestion($Question){
    $sql="insert into Question(question1,question2,question3,question4,question5) values(:question1,:question2,:question3,:question4,:question5)";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
        $question1=$Question->getQuestion1();
        $question2=$Question->getQuestion2();
        $question3=$Question->getQuestion3();
        $question4=$Question->getQuestion4();
        $question5=$Question->getQuestion5();
        $req->bindValue(':question1',$question1);
        $req->bindValue(':question2',$question2);
        $req->bindValue(':question3',$question3);
        $req->bindValue(':question4',$question4);
        $req->bindValue(':question5',$question5);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function supprimerQuestion($id){
    $sql="DELETE FROM Question where id=:id";
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