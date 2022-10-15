<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/Practica4OSML/server.php");
$error = $cliente->getError();
if ($error)
{
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre";
}
$result = $cliente->call("getNightcore", array("datos" => "Nightcore"));
if ($cliente->fault)//Chekeamos una falla al momento de llamar al metodo
{
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else //No hay error al llamar el metodo
{ 
    $error = $cliente->getError();
    if ($error)
    {
        echo "<h2>Error</h2><pre>" . $error . "</pre";
    }
    else
    {
        echo "<h2>Músicas Nightcore</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}
?>