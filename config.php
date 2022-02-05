<?php
try 
{
    $bdd = new PDO('mysql:host = localhost; dbname = sitecalyptus','root','');
}catch(Exception $e){
die('Erreur'.$e->getMessage());
}