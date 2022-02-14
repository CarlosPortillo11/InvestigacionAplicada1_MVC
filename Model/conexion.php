<?php
    class Conexion{
        private $con;

        public function __construct(){
            $this->con = new mysqli('localhost', 'root', '', 'ferreteriafc');
        }
        
        public function getVendedores(){
            $query = $this->con->query('SELECT vendedores FROM planilla');

            $retorno = [];

            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i]  = $fila;
                $i++;
            }

            return $retorno;
        }

        public function getPuestos(){
            $query = $this->con->query('SELECT puesto FROM planilla');

            $retorno = [];

            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i]  = $fila;
                $i++;
            }

            return $retorno;
        }

        public function getProductos(){
            $query = $this->con->query('SELECT producto FROM planilla');

            $retorno = [];

            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i]  = $fila;
                $i++;
            }

            return $retorno;
        }
    }
?>