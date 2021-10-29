<?php
$dados = array();
$dados[] = array("nome"=>"NOME", "cnh"=>"CNH");

$dados[] = array("nome"=>"Lucas", "cnh"=>"CNH");
$dados[] = array("nome"=>"Marcelo", "cnh"=>"CNH");

?>

<form action="" method="GET">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">

    <label for="CNH">CNH:</label>
    <input type="text" name="cnh">

    <input type="submit" value="Enviar">

</form>

<?php
/*echo $dados[0]["nome"];
echo $dados[0]["cnh"];

echo $dados[1]["nome"];

*/
if($_GET) {
    $nome = $_GET['nome'];
    $cnh = $_GET['cnh'];
    $dados[1] = array("nome"=>$nome, "cnh"=>$cnh);
    echo $dados[0]["nome"];
    echo " ";
    echo $dados[0]["cnh"];
    echo "<br>";
    echo $dados[1]["nome"];
    echo $dados[1]["cnh"];
}
?>