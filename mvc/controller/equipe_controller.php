<?php 
//liaison entre le model et la view 
require_once 'model/equipe_model.php';
function indexAction()
{
    $equipes = liste_equipe();
    require_once 'views/liste_equipe.php';

}
function createAction()
{
    require_once 'views/create.php';
}
function storeAction()
{
   $isCreated = create();
   if ($isCreated) {
        echo'nouvelle equipe est ajoute';
   }
   header('location:index.php');
}
function editAction()
{

}
function deleteAction()
{

} 