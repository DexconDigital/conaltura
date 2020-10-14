<?php

function Conect()
{
    try {
        $echo2 = new PDO('mysql:host=localhost;dbname=conaltura_admin', 'root', '');
        $echo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $echo2;
        
    } catch (Exception $e) {

        die('Error:' . $e->getMessage());
    }
    // return $echo2;
    // $echo = mysqli_connect("localhost","root","","dexcondigital_noticias_inmueble");
    // return $echo;
}
