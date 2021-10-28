<?php
/* 
Nome: Leonardo Bernardes de Oliveira
RA: 834280  
*/

// Declarando variaveis de login de exemplo.
$usuario = 'teste';
$senha = '1234';

if (empty($_POST['usuario'] || empty($_POST['senha']))) {
    header('Location: index.php');
    exit();
}



?>