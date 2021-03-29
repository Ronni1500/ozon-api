<?php
//$method = '/v1/warehouse/list'; //метод запроса
/*
#////тело запроса///#
$data = '{
  "stocks": [
    {
      "product_id": 120000,
      "offer_id": "PRD-1",
      "stock": 20
    },
    {
      "product_id": 124100,
      "offer_id": "PRD-2",
      "stock": 20
    }
  ]
}';
#////////#

$result = post($clientId, $apiKey, $method, $data); //вывод результата
echo $result;

//фунция для с работы с API
function post($clientId, $apiKey, $method, $data){
  $url = 'http://cb-api.ozonru.me'.$method;
  $headers = array(
    'Content-Type: application/json',
    'Client-Id: '.$clientId,
    'Api-Key: '.$apiKey
  ) ;
  $ch = curl_init();
  $options = array(
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => $headers
  );
  curl_setopt_array($ch, $options);
  $html = curl_exec($ch);
  curl_close($ch);
  return $html;
};



// $sender = RequestApi::getterApi('https://cb-api.ozonru.me/v1/warehouse/list', $header, 'POST');
