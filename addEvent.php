<?php
session_start();
$mail=$_SESSION["mail"];
$token=$_SESSION["access_token"];
$city=$_POST["city"];
$_SESSION["city"]=$city;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.googleapis.com/calendar/v3/calendars/".$mail."/events/quickAdd?text=Travelling%20to%20".$city."&sendUpdates=none",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer ".$token,
    "Postman-Token: ee13e296-5769-4f9e-a5c8-d93d49b51ff3",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
  $json = json_decode($response, true);
  $_SESSION["id"]=$json['id'];;
  header("location:index2.php");
}
?>
