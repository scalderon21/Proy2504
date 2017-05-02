<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $miconn=new mysqli("localhost", "root", "avaras08", "datospersonales");
         
         if ($miconn->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
            }
            
            $nom=$_POST['Nombre'];
            $ape=$_POST['Apellido'];
            
            $sql="INSERT INTO persona(nombre,apellido)";
            $sql=$sql. "values ('$nom','$ape')";
            
            $resultado = $miconn->query($sql);
            
            
            
         
            $resultado->close();
        ?>
    </body>
</html>
