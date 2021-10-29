<?php
// Integrantes: Leonardo Bernardes de Oliveira; Sara Ferreira Fernandes.

// Declarando variaveis de login de exemplo.
$email = 'teste@gmail.com';
$senha = '1234';

if (empty($_POST['email'] || empty($_POST['senha']))) {
    header('Location: index.php');
    exit();
}else {
    if ($_POST['email'] == $email && $_POST['senha'] == $senha) {
        header('Location: main.php');
    }else {
        header('Location: index.php');
        exit();
    }
}
?>