<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>Héhéhéhéhé</p>
<?php


    //include_once 'connexion.php';

$host = "dbhost";
$user = "o2070696";
$password = "o2070696";
$database = "bd_o2070696";

    $mysqli = mysqli_connect($host, $user, $password, $database);

if (!$mysqli) {
    echo mysqli_connect_errno() . '</br>';
    die('Erreur de connexion : ' . mysqli_connect_error());
}

   //// $resultat = mysqli_query($mysqli, "SELECT * FROM Film");
   // echo $resultat->num_rows;
if ($result = mysqli_query($mysqli, "SELECT * FROM Film")) {

    //echo $result->num_rows;

    /* Récupère un tableau associatif */
    while ($row = $result->fetch_row()) {
        printf ("%s\n", $row[1]);
        echo '</br>';
    }

    /* Libère le jeu de résultats */
    $result->close();

}


?>
    <br>
    <form action="recherche.php" method="post">
        Rechercher
        <input type="search" name="recherche">
       <!-- <button type="submit" name="rechercher"> -->
    </form>


   <!-- if ($resultat = mysqli_query($mysqli, "SELECT * FROM Film")){
        printf("Select a retourné %d lignes.\n", $result->num_rows);
    }
    else
        {
        echo 'requete plantée';
    }*/
-->


</body>
</html>





