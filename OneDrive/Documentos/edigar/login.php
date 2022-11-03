<?php
require_once 'post.php';
require_once 'user.php';
$user = new user;
$post = new post;

$post -> get('pass');
switch ($post -> get('User')&&$post ->get('pass')){
case 'cauan@email.com'&&'1234':
    $user -> setEmail($post->get('email'));
    $user -> setPassword($post->get('pass'));
    echo 'bem vindo cauan';
    include_once 'pagina1.html';
    break;
case 'kleitao@email.com'&&'531':
    $user -> setEmail($post->get('email'));
    $user -> setPassword($post->get('pass'));
    echo 'bem vindo Clyton';
    break;
case 'sammymara@email.com'&&'321':
    $user -> setEmail($post->get('email'));
    $user -> setPassword($post->get('pass'));
    echo 'bem vindo sammy';
    break;
case 'sarammy@email.com'&&'321':
    $user -> setEmail($post->get('email'));
    $user -> setPassword($post->get('pass'));
    echo 'bem vindo sah';
    break;
case 'joselindo@email.com'&&'321':
    $user -> setEmail($post->get('email'));
    $user -> setPassword($post->get('pass'));
    echo 'bem vindo jose';
    break;
}







