<?php
 const host = '127.0.0.1';
 const dbname = 'lanchonete';
 const user = 'root';
 const pass = '';

 try{
    $pdo = new PDO("mysql:host=".host.",dbname=".dbname,user,pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
 }catch(PDOException $erro){
    die("Erro na conexão ".$erro->getMessage());
 }
