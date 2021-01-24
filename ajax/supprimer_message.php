<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=anatomia;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$idMessage=$_POST['idMessage'];
$prepare = $bdd->prepare("DELETE FROM message where idMessage=?;");
$prepare-> execute(array($idMessage));


?>