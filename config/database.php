<?php
CONST USER = "MNicoud";
CONST PASSWD = "monster97";
CONST SERVER = "localhost";
CONST BASE = "boutique2";
$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
    $pdo=new PDO($dsn,USER,PASSWD);
}
catch(PDOException $e){
    printf("Échec de la connexion : %s\n", $e->getMessage());
exit();
}
