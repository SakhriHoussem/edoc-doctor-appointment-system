<?php

    $database= new mysqli("localhost","root","","edoc");
    // this is docker config
    //    $database= new mysqli("edoc_db","root","root","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>