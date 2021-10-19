
<?php
    header('Access-Control-Allow-Origin: *');
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
    $payer->first_name = $input['first_name'];
    $payer->last_name = $input['last_name'];

    $payer->identification = array(
        "type" => $input['payer']['identification']['type'],
        "number" => $input['payer']['identification']['number']

    );
    $payer->address = array(
        "zip_code" => $input['payer']['address']['zip_code'],
        "street_name" => $input['payer']['address']['street_name'],
        "street_number" => $input['payer']['address']['street_number'],
        "neighborhood" => $input['payer']['address']['neighborhood'],
        "city" => $input['payer']['address']['city'],
        "federal_unit" => $input['payer']['address']['federal_unit']
    );
    $payment->payer = $payer;
    
    $payment->save();
    
    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'boleto'=>$payment->transaction_details->external_resource_url,
        'more'=>$payment->point_of_interaction,
        'qr_code'=>$payment->point_of_interaction->transaction_data->qr_code,
        'img'=>$payment->point_of_interaction->transaction_data->qr_code_base64,
        'id' => $payment->id
    );



    echo json_encode($response);

?>
