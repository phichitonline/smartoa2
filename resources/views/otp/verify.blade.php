<?php

$key = "1710528533633852";
$secret = "ebc24c7b3fd561aaf8ce86dd10a0a609";
$token = "Y20gKeNoyrQq57rcnIMJ6x8ZXVPwmnG1";
$pin = "470202"; // OTP

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://otp.thaibulksms.com/v1/otp/verify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "key=".$key."&secret=".$secret."&token=".$token."&pin=".$pin."",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/x-www-form-urlencoded"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
