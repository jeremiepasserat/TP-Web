<?php
/**
 * Created by PhpStorm.
 * User: o2070696
 * Date: 22/01/19
 * Time: 11:46
 */

if (isset($_POST['recherche']))
{
    include_once 'connexion.php';
    if ($result = mysqli_query($mysqli, "SELECT * FROM Film WHERE genre = '{$_POST['recherche']}'")) {

        if($result->num_rows === 0)
            echo "Aucun résultat";

        /* Récupère un tableau associatif */
        while ($row = $result->fetch_row()) {
            printf ("%s\n", $row[1]);
            echo '</br>';
        }

        /* Libère le jeu de résultats */
        $result->close();

    }    echo "on fait une recherche sur le mot : " .  $_POST['recherche'];

}
else{
    echo "erreur";
}