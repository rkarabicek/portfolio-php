<?php
require_once "database.php";


function getAllProjects()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM project");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Project" );
    return $result;

}