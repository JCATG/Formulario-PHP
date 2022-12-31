<?php
include_once('conexao.php');
include_once('');
 $nome=$_POST['campoNome'];
 $cidade = $_POST['campoCidade'];
 $idade= $_POST['campoIdade'];
 $telefone = $_POST['campoTelefone'];
 $endereco= $_POST['campoEndereco'];

 $dados = "INSERT INTO dadosusuario(nome,cidade,idade,telefone,endereco) VALUE 
 ('$nome','$cidade','$idade','$telefone','$endereco')";

 
$resultado = mysqli_query($conexaoBanco, $dados);

echo('deu certo');
header('location: index.php');

?>
<script src="./js/custom.js"></script>