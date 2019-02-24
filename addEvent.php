<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.googleapis.com/calendar/v3/calendars/kareem50329%40gmail.com/events/quickAdd?text=dkff&sendUpdates=none",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer ya29.Glu5Bhx2eLTbO30C6SIjNZ7gLY22vlg6_htV38QTHS5OUPVXCYO9eaJW2Rq-AXh7YCWrlOwcQG6BZqsxcbtE43tCb3v7FnveoeOI_OXkJmXW4KaI8J5Ec_59OOSH",
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
}
?>
