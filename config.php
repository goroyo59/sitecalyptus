<?php
try 
{
    $bdd = new PDO('mysql:host = localhost; dbname = lesitecalyptus','root','');
}catch(Exception $e){
die('Erreur'.$e->getMessage());
}