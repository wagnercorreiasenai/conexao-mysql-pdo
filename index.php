<?php

//Dependências
require './Classes/Usuario.php';

use Classes\Usuario;

$usuario = new Usuario();
$listaDeUsuario = $usuario->listar();

foreach ($listaDeUsuario as $u) {
    echo $u ['nome'];
}

?>