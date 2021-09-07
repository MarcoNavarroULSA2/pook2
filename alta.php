<?php
require_once("PokemonVO.php");

$nombre = htmlspecialchars($_POST["Nombre"]);
$tipo = htmlspecialchars($_POST["Tipo"]);
$nivel = htmlspecialchars($_POST["Nivel"]);
$imagen = htmlspecialchars($_POST["Foto"]);
$dao = new PokemonDAO();
$vo = new PokemonVO();

$vo-> setNombre($nombre);
$vo -> setTipo($tipo);
$vo -> setNivel($nivel);
$vo -> setImagen($imagen);
$dao -> insertar($vo);

?>