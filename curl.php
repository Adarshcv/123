<html>
  <head></head>
    <body>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://price-api.datayuge.com/api/v1/compare/search?api_key=V4n6ZWxBN9vDyU1GDy0n2gXxwiGqmUO8vbV&product=Iphone13&filter=brand%3Aapple&price_start=40000&price_end=70000&page=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
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
<script>
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://price-api.datayuge.com/api/v1/compare/search?api_key=V4n6ZWxBN9vDyU1GDy0n2gXxwiGqmUO8vbV&product=Iphone&filter=brand%3Aapple&price_start=20000&price_end=30000&page=1",
  "method": "GET",
  "headers": {
    "content-type": "application/json"
  }
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
  </script>
</body>
</html>