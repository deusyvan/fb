<?php 
require 'fb.php';

if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])){
    //echo "Tá logado";
    $res = $fb->get('/me?fields=email,name,id', $_SESSION['fb_access_token']);
    
    $r = json_decode($res->getBody());
    
    //print_r($r);
    
    echo "Meu nome: ".$r->name;
    
    echo "<br/><a href='sair.php'>Sair</a>";
    
} else {
    header("Location: login.php");
}
?>