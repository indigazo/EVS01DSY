<?php

include_once 'conexion.php';
include_once '../MODELO/usuario.php';

class DaoUsuario {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //CRUD
    public function Crear($usuario) {
        try {
            $sql = "insert into usuario values('@correo','@rut','@nombre_completo','@fec_nacimiento',@telefono,
                     @region_idregion, @ciudad_idciudad, '@tipo_vivienda')";
            $sql = str_replace("@correo", $usuario->getCorreo(), $sql);
            $sql = str_replace("@rut", $usuario->getRun(), $sql);
            $sql = str_replace("@nombre_completo", $usuario->getNombre(), $sql);
            $sql = str_replace("@fec_nacimiento", $usuario->getFecnac(), $sql);
            $sql = str_replace("@telefono", $usuario->getTelefono(), $sql);
            $sql = str_replace("@region_idregion", $usuario->getRegion(), $sql);
            $sql = str_replace("@ciudad_idciudad", $usuario->getCiudad(), $sql);
            $sql = str_replace("@tipo_vivienda", $usuario->getVivienda(), $sql);
            $filas_afectadas = $this->cone->SqlOperacion($sql);
            return $filas_afectadas;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    /*
    public function Modificar($producto) {
        try {
            $sql = "update producto set descripcion='@desc', marca='@mar',"
                    . "precio=@pre,stock=@stock where idproducto=@id";
            $sql = str_replace("@id", $producto->getId(), $sql);
            $sql = str_replace("@desc", $producto->getDescripcion(), $sql);
            $sql = str_replace("@mar", $producto->getMarca(), $sql);
            $sql = str_replace("@pre", $producto->getPrecio(), $sql);
            $sql = str_replace("@stock", $producto->getStock(), $sql);
            $filas_afectadas = $this->cone->SqlOperacion($sql);
            return $filas_afectadas;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function Eliminar($id) {
        try {
            $sql = "delete from producto where idproducto=$id";
            $filas_afectadas = $this->cone->SqlOperacion($sql);
            return $filas_afectadas;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ListarTodo() {
        try {
            $sql = "select * from producto";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Buscar($id) {
        try {
            $sql = "select * from producto where idproducto=$id";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    */

}
