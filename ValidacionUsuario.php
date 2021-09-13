<?php

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];
    $con = mysqli_connect("localhost", "root", "","usuarios");
    $resultado = mysqli_query($con, "SELECT * FROM users WHERE usu_name = '".$usuario."' and usu_password ='".$clave."'and usu_rol = '".$rol."'");

    if( mysqli_num_rows($resultado ) > 0 )
        echo "1";
    
    else echo "0";

?>