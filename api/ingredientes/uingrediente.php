<?php
//iusuario.php - serve para cadastrar um novo usuário
require '../../app/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$json = filter_input(INPUT_GET,'jsn');
$data = json_decode($json,true);
$id = $data['id'];
$nome = strtoupper($data['nome']);
$valor = $data['valor'];
$sql = "update ingredientes set ingnome = ?, ingvalorunitario = ? where ingid = ?;";
$prp = $pdo->prepare($sql);
$prp->execute([$nome,$valor,$id]);
Conexao::desconectar();
//{"nome":"ALFACE","valor":1.99,"id":1}
//http://localhost/Projetos_ETEC_PWEB-III_Div1/api/ingredientes/uingrediente.php?jsn={"nome":"ALFACE","valor":1.99,"id":1}