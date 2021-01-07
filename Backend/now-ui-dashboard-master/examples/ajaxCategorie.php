<?php

include  $_SERVER['DOCUMENT_ROOT']."/Controller/CategorieC.php";

$categoriec= new CategorieC();

if(!isset($_POST['str'])){
    $liste=$categoriec->afficherCategories();
}
else{
    $liste = $categoriec->rechercherTicket($_POST['str']);
}
            foreach($liste as $row){
        ?>

                                        <tr>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td>
                                                <form method="POST" action="ModifierCategorie.php?id=<?PHP echo $row['id']; ?>">
                                                    <input type="submit" class="btn btn-warning" value= "Modifier">
                                                </form>
                                            </td>
                                            <td>
                                               <form method="POST" action="SupprimerCategorie.php">
                                                    <input type="submit" class="btn btn-danger" value= "supprimer">
                                                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                </form>
                                            </td>
                                        </tr>

        <?php
    }
?>