<?php

// cantidad de productos como parametro

function obtenerPro($cantidad = 1) {
    include 'conexion.php';
    try {
        $sql = "SELECT *  FROM productos LIMIT $cantidad "; 
        $resultado = $db->query($sql);  
    } catch(Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}

// id del producto para mostrar

function obtenerProd($id_producto) {
    include 'conexion.php';
    try {
        $sql = " SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id = $id_producto";
        $resultado = $db->query($sql);
    } catch(Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}