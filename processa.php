<?php
include 'conexao.php';

$nome = isset($_POST['nome'])?$_POST['nome']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$telefone = isset($_POST['telefone'])?$_POST['telefone']:"";
$mensagem = isset($_POST['mensagem'])?$_POST['mensagem']:"";

$sql = "INSERT INTO `contato`( `nome`, `email`, `telefone`, `mensagem`) VALUES ('$nome','$email','$telefone','$mensagem');";

$qur = mysqli_query($link,$sql);

header("Location: contato.php");