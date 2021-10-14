
<?php
error_reporting(0);
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-6746500504163026-100511-b0489f4cf09435dc47d2786f61594226-177309895");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = (float)$input['transaction_amount'];
    $payment->token = $input['token'];
    $payment->description = $input['description'];
    $payment->installments = (int)$input['installments'];
    $payment->payment_method_id = $input['payment_method_id'];
    $payment->issuer_id = (int)$input['issuer_id'];
    
    $payer = new MercadoPago\Payer();
    $payer->email = $input['payer']['email'];
    $payer->identification = array(
        "type" => $input['payer']['identification']['type'],
        "number" => $input['payer']['identification']['number']
    );
    $payment->payer = $payer;
    
    $payment->save();
    
    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id
    );
    echo json_encode($response);

?>
