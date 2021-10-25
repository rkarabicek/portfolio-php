<?php
require_once "database.php";


function getAllContact()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM contact");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Contacts" );
    return $result;

}