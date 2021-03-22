<?php

 

$curl = curl_init();

 

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"personalizations\": \n\t[{\"to\": \n\t\t[{\"email\": \"ashishguptajiit@gmail.com\"}]}],\n\t\"from\": {\"email\": \"info@antino.io\"},\"subject\": \"Hello, World!\",\"content\": [{\"type\": \"text/plain\", \"value\": \"Heya!\"}]}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer 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",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 07a6cb48-8845-e739-baf8-54ed6b66b66c"
  ),
));

 

$response = curl_exec($curl);
$err = curl_error($curl);

 

curl_close($curl);

 

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}