<?php
require_once "../../config/conexion.php";

Class ClassProductos
{
    public function __construct()
    {

    }

    public function listarProductos()
    {
        $sql="SELECT * FROM productos";
        return ejecutarConsulta($sql);
    }

    public function listarProductosPorId($id)
    {
        if($id < 1){
            return $this->listarProductos();
        }

        $sql="SELECT * FROM productos where idCategoria = $id";
        return ejecutarConsulta($sql);
    }



}


?>