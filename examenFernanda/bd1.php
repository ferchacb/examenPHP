<?php 


    try{
        $conexion = new PDO("mysql:host=localhost;dbname=examenfernanda","root","");
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        die();  
    }

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $imgsubida = "img/" . $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $imgsubida);

        $cedula = $_POST["cedula"];
        $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
        $apellidos = filter_var($_POST["apellidos"], FILTER_SANITIZE_STRING);
        $direccion = filter_var($_POST["direccion"], FILTER_SANITIZE_STRING);
        $instrumento = filter_var($_POST["instrumento"], FILTER_SANITIZE_STRING);
        $generomusi = filter_var($_POST["generomusi"], FILTER_SANITIZE_STRING);
        $correo = filter_var($_POST["correo"], FILTER_SANITIZE_STRING);
        $passw = filter_var($_POST["passw"], FILTER_SANITIZE_STRING);
        $img =$_FILES["img"]["name"];


        $sql = "INSERT INTO musico VALUES(null, '$cedula', '$nombre','$apellidos','$direccion','$instrumento','$generomusi','$correo','$passw','$img')";
        $conexion->query($sql);
        
        echo "Se guardo!";
    }
    require "vistas/index.php";
?>