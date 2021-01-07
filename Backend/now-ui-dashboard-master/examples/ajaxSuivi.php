<?php

include  $_SERVER['DOCUMENT_ROOT']."/Controller/SuiviC.php";

$suivic= new SuiviC();

if(!isset($_POST['str'])){
    $liste=$suivic->afficherSuivis();
}
else{
    $liste = $suivic->rechercherTicket($_POST['str']);
}

                                        foreach($liste as $row){
        ?>

                                        <tr>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['prenom']; ?></td>
                                            <?php
                                    if($row['commentaire1']!="" && $row['commentaire2']!="" && $row['commentaire3']!="" && $row['commentaire4']!="" && $row['commentaire5']!="" )
                                            {
                                                ?>
                                            <td>
                                                <form method="POST" action="RepondreSuivi.php?id=<?PHP echo $row['id']; ?>">
                                                    <input type="submit" class="btn btn-success" value= "Répondu">
                                                </form>
                                            </td>

                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                            <td>
                                                <form method="POST" action="RepondreSuivi.php?id=<?PHP echo $row['id']; ?>">
                                                    <input type="submit" class="btn btn-warning" value= "Repondre">
                                                </form>
                                            </td>

                                                <?php
                                            }
                                            ?>
                                            <td>
                                               <form method="POST" action="SupprimerSuivi.php">
                                                    <input type="submit" class="btn btn-danger" value= "supprimer">
                                                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                </form>
                                            </td>
                                            <td>
                                               <form method="POST" action="AjouterSuivi.php?id_utilisateur=<?PHP echo $row['id_utilisateur']; ?>&nom=<?PHP echo $row['nom']; ?>&prenom=<?PHP echo $row['prenom']; ?>">
                                                <?php 
                                        if($row['commentaire1']!="" && $row['commentaire2']!="" && $row['commentaire3']!="" && $row['commentaire4']!="" && $row['commentaire5']!="" )
                                                {
                                                    ?>
                                                    <input type="submit" class="btn btn-success" value= "Ajouter Suivi">
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <input type="submit" class="btn btn-warning" value="Ajouter Suivi" disabled="">
                                                    <?php
                                                }
                                                 ?>
                                                    <input type="hidden" value="<?PHP echo $row['id_utilisateur']; ?>" name="id_utilisateur">
                                                </form>
                                            </td>
                                        </tr>

        <?php
    }
?>