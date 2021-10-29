<?php
$dados = array();
$dados[] = array("nome"=>"Lucas", "cnh"=>83618903401, "cpf"=>92034085094);
$dados[] = array("nome"=>"Marcelo", "cnh"=>74760455782, "cpf"=>49890763036);

?>

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

echo "<table><tr><th>Nome</th><th>CNH</th><th>CPF</th></tr>";
foreach($dados as $v){
    echo "<tr>";
    foreach($v as $vv){
        echo "<td>{$vv}</td>";
    }
    echo "<tr>";
}
echo "</table>";
?>