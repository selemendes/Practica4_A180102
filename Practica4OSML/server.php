<?php
    require_once "lib/nusoap.php";
    function getNightcore($datos)
    {
        if ($datos == "Nightcore")
        {
            return join(",<br>", array(
                "Believe",
                "Happy Ending",
                "The Sweet Life",
                "Dreamers",
                "We Own The Night",
                "Hit or Miss",
                "Tiger",
                "Drifters",
                "Running Away",
                "Alone"));
        }
        else
        {
            return "No hay Músicas Nightcore";
        }
    }
    $server = new soap_server();//Creamos instancia de SOAP
    $server->register("getNightcore");//Indicamos el metodo o función a devolver
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
    $server->service($HTTP_RAW_POST_DATA);
?>