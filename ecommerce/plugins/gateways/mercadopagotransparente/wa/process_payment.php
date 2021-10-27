
<?php
header('Access-Control-Allow-Origin: *');
error_reporting(0);
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mercadopago.com/v1/payments',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
      "transaction_amount": '.(float)$input['transaction_amount'].',
      "token": "'.$input['token'].'",
      "description": "'.$input['description'].'",
      "installments": '.(int)$input['installments'].',
      "payment_method_id": '.$input['payment_method_id'].',
      "issuer_id": "'.(int)$input['issuer_id'].'",
      "payer": {
        "email": "'.$input['payer']['email'].'",
        "first_name": "'.$input['first_name'].'",
        "last_name": "'.$input['last_name'].'",
        "identification": {
            "type": "'.$input['payer']['identification']['type'].'",
            "number": "'.$input['payer']['identification']['number'].'"
        },
        "address": {
            "zip_code": "'.$input['payer']['address']['zip_code'].'",
            "street_name": "'.$input['payer']['address']['street_name'].'",
            "street_number": "'.$input['payer']['address']['street_number'].'",
            "neighborhood": "'.$input['payer']['address']['neighborhood'].'",
            "city": "'.$input['payer']['address']['city'].'",
            "federal_unit": "'.$input['payer']['address']['federal_unit'].'"
        }
      }
    }',
  CURLOPT_HTTPHEADER => array(
    'accept: application/json',
    'content-type: application/json',
    'Authorization: Bearer  '.$input['access']
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
