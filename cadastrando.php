﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sistema de cadastro</title>
</head>
<body>
<?php
$host = "localhost";
$user = "usuariodobanco";
$pass = "senha";
$banco = "nomedobanco";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$plano=$_POST['plano'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysql_query("INSERT into usuarios(nome, sobrenome, pais, cidade, estado, plano, email, senha)
values('$nome','$sobrenome', '$pais', '$cidade', '$estado', '$plano', '$email','$senha')");
echo "cadastro efetuado com sucesso";
?>
</body>
</html>
