<?php 

require 'fb.php';

$helper = $fb->getRedirectLoginHelper();

try {
    $_SESSION['fb_access_token'] = (string) $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo "ERRO: ".$e->getMessage();
} catch (Facebook\Exceptions\FacebookSDKException $e){
    echo "ERRO SDK: ".$e->getMessage();
    exit;
}

header("Location: index.php");
?>