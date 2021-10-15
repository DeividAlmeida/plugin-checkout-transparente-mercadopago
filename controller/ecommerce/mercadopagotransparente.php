<?php 
if(isset($_GET['statusmercadopagotransparente'])){
    $status =$_GET['statusmercadopagotransparente'];
    if($status == "true"){
      $callback = "checked";
    }else{ $callback = ""; }
    $query  = DBUpdate('ecommerce_plugins', array('status' => $callback), "nome = 'mercadopagotransparente'");
  }

if(isset($_GET['mercadopagotransparente'])){      
  $query  = DBUpdate('ecommerce_mercadopago_transparente', ['publickey'=>$_GET['publickey'],'accesstoken'=>$_GET['accesstoken']], "id = '1'");
}