<?php

$user_id = $_GE['id'];
$token = $_GET['token'];
require 'bd.php';
$req = $pdo->prepare('SELECT confirmation_token FROM users WHERE id = ?');
$req->execute([$user_id]);
$user = $req->fetch();

if($user && $user->confirmation_token == $token){
  die('ok');
}else{
  die('pas ok');
}
