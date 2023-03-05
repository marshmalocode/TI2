<?php

require_once "../config.php";

/*on va commencé avec une connexion de la db avec un try catch*/
try {
    //créons une variable avec les données de connexion
    $connectDB = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    //var_dump($connectDB);
    //faut definir le format de caractere
    mysqli_set_charset($connectDB, DB_CHARSET);
    //
} catch (Exception $e) {
    // la ou recupere l'erreur et on la renvoie au format adéquat au lettre du la langue ici en utf8
    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}





/*faut créer une variable qui recupère toutes les données dans la DB suivie de  */
// commençons par créés la variable SQL qui recupère tous depuis la DB
$requetDB = "SELECT `firstname`,`lastname`,`usermail`,`message`,`datemessage` FROM livreor ORDER BY datemessage DESC;";
//recuperons tous sa dans des variable et testons la connexion a la DB et renvoyons un code d'erreur
$recupDB = mysqli_query($connectDB, $requetDB) or die("réessaye y a un soucis dans la récupération de la DB");
// j'ai copier coller de W3C parce que je savais plus sa faisait quoi et j'ai bloquer (La fonction mysqli_num_rows() renvoie le nombre de lignes dans un jeu de résultats)
$nbUser = mysqli_num_rows($recupDB);
//et metons le resultat dans un tableau associatif
$resultRecupDB = mysqli_fetch_all($recupDonneesDB, MYSQLI_ASSOC);
//var_dump($connectDB, $requetDB, $resultRecupDB, $recupDB);

/* maintenant va faloir faire une imense condition pour traité c'est donnée pour le formulaire avec un test de conexion  */





include "../view/indexView.php";
