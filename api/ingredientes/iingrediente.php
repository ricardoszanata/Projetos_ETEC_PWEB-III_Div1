<?php
//iusuario.php - serve para cadastrar um novo usuário
require '../../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET,'jsn');
$data = json_decode($json,true);
$nome = strtoupper($data['nome']);
$valor = $data['valor'];
$sql = "insert into ingredientes (ingnome, ingvalorunitario) values (?,?);";
$prp = $pdo->prepare($sql);
$prp->execute([$nome,$valor]);
Conexao::desconectar();
//{"nome":"valor"}
//http://localhost/Projetos_ETEC_PWEB-III_Div1/api/ingredientes/iingrediente.php?jsn={"nome":"ALFACE","valor":2.50}