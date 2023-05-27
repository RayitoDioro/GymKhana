<?php

require 'conexion.php';

function usuarios($conexion){
    echo "<br>";
    $query="SELECT * FROM usuario";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->nombre." ";
                echo $obj->apellidop." ";
                echo $obj->apellidom." / ";
                echo $obj->codigo." / ";
                echo $obj->edad." / ";
                echo $obj->sexo." / ";
                echo $obj->telefono." / ";
                echo $obj->residencia." / ";
                echo $obj->carrera." / ";
                echo $obj->cu." / ";
                echo $obj->peso." / ";
                echo $obj->altura." / ";
                echo $obj->rutina." / ";
                echo $obj->entrenador." / ";
                echo $obj->horario." / ";
                echo "<br>";
                echo "<br>";
            }
        }
    }
}

function entrenadores($conexion){
    echo "<br>";
    $query="SELECT * FROM entrenador";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->apodo." /// contraseña: ";
                echo $obj->pass."";
                echo "<br>";
                echo "<br>";
            }
        }
    }
}

function empleados($conexion){
    echo "<br>";
    $query="SELECT * FROM empleado";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->usuario." /// contraseña: ";
                echo $obj->pass."";
                echo "<br>";
                echo "<br>";
            }
        }
    }
}

?>