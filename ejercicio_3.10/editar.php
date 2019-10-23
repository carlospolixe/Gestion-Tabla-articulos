<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $key = $_GET['indice'];

   
    
    $formid = $key;
    $formtitulo = $_POST['formtitulo'];
    $formautor = $_POST['formautor'];
    $formcategoria = $_POST['formcategoria'];
    $formeditorial = $_POST['formeditorial'];
    $formprecio = $_POST['formprecio'];
  

    $registro =[
        "Id" =>$formid ,
        "Titulo" => $formtitulo,
        "Autor" => $formautor,
        "Editorial" => $formeditorial,
        "Género" => $formcategoria,
        "Precio" => $formprecio
    ];
    $tabla = actualizar($tabla,$registro,$key);

    require_once("./template/libros.php");
?>
