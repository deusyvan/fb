<?php 

session_start();
require 'src/Facebook/autoload.php';

$fb= new Facebook\Facebook([
    'app_id' => 'seu_id',
    'app_secret' => 'sua_senha',
    'default_graph_version' => 'v2.7'
]);
?>