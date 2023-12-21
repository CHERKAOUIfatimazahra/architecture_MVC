<?php
//model pour selection du la base de donne
//fonction
//connection to database 
function database_connection()
{
    $pdo = new PDO("mysql:dbname=architecture_mvc;host=localhost", "root", "");
    return $pdo;
}
//donne du database
function liste_equipe()
{
    $pdo = database_connection();
    $equipes = $pdo->query("SELECT * FROM equipe")->fetchAll(PDO::FETCH_OBJ);
    return $equipes;
}
function create()
{
    $nom = $_POST["name"];
    $description = $_POST["description"];
    $pdo = database_connection();
    $sqlState = $pdo->prepare(query:"INSERT INTO equipe VALUES(null,?,?)");
    return $sqlState->execute([$nom, $description]);
}
function edit()
{

}
function delete()
{

} 