<?php

class Conexion{

    private $con;

    public function __Construct(){
     $this->con = new mysqli('localhost','root','','mvc1');
    }
    
    public function getUser(){
        $query = $this->con->query('Select * from persona');

        $retorno = [];

        $i=0;

        while($row = $query->fetch_assoc()){
            $retorno[$i] = $row;
            $i++;
        }

        return $retorno;
    }

}

?>