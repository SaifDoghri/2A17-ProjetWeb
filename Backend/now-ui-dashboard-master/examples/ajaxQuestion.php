<?php

include  $_SERVER['DOCUMENT_ROOT']."/Controller/QuestionC.php";

$questionc= new QuestionC();

if(!isset($_POST['str'])){
    $liste=$questionc->afficherQuestions();
}
else{
    $liste = $questionc->rechercherTicket($_POST['str']);
}

                                        foreach($liste as $row){
        ?>

                                        <tr>
                                            <td><?php echo $row['question1']; ?></td>
                                            <td><?php echo $row['question2']; ?></td>
                                            <td><?php echo $row['question3']; ?></td>
                                            <td><?php echo $row['question4']; ?></td>
                                            <td><?php echo $row['question5']; ?></td>
                                            <td>
                                                <form method="POST" action="ModifierQuestion.php?id=<?PHP echo $row['id']; ?>">
                                                    <input type="submit" class="btn btn-warning" value= "Modifier">
                                                </form>
                                            </td>
                                            <td>
                                               <form method="POST" action="SupprimerQuestion.php">
                                                    <input type="submit" class="btn btn-danger" value= "supprimer">
                                                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                </form>
                                            </td>
                                        </tr>

        <?php
    }
?>