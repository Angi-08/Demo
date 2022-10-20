<?php

    include_once('Includes/db.php');
    
    $objeto = new DB();
    $con = $objeto->connect();
    //Mostrar los datos





    public function numFacturas(){
        $query = $this->connect()->prepare('SELECT COUNT(*) FROM facturas');
    }

?>
