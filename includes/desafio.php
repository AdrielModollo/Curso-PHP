<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Adriel Modollo', 24, 'adriel_modollo');
echo $usuario->apresentar();
unset($usuario);