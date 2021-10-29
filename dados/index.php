<?php
$dados = array();
$dados[] = array("nome"=>"Lucas", "cnh"=>83618903401, "cpf"=>92034085094);
$dados[] = array("nome"=>"Marcelo", "cnh"=>74760455782, "cpf"=>49890763036);

?>
<br>
<h1>Cadastro de dados</h1><br>
<form action="" method="GET">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">

    <label for="CNH">CNH:</label>
    <input type="text" name="cnh">

    <label for="CPF">CPF:</label>
    <input type="text" name="cpf">

    <input type="submit" value="Enviar">

</form>

<?php
if($_GET) {
    $nome = $_GET['nome'];
    $cnh = $_GET['cnh'];
    $cpf = $_GET['cpf'];
    $dados[] = array("nome"=>$nome, "cnh"=>$cnh, "cpf"=>$cpf);
}

echo "<table style='border: 1px solid;   width: 50%;'><tr style='border: 1px solid'><th style='border: 1px solid'>Nome</th><th style='border: 1px solid'>CNH</th><th style='border: 1px solid'>CPF</th></tr>";
foreach($dados as $v){
    echo "<tr>";
    foreach($v as $vv){
        echo "<td style='border: 1px solid'>{$vv}</td>";
    }
    echo "<tr>";
}
echo "</table>";
?>