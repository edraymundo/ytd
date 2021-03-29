<?php

$start = 193.75;
//$start = 194.64;

$curl = curl_init();

curl_setopt_array($curl, [
        CURLOPT_URL => "https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=vti",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: apidojo-yahoo-finance-v1.p.rapidapi.com",
                "x-rapidapi-key: <token retracted>"
        ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$obj = json_decode($response);

$market = $obj->quoteResponse->result[0]->regularMarketPrice;

$ytd = number_format((($market-$start)/$market)*100,2);

echo '<body style="background-color:black;"><center><font color=white style="font-family:sans-serif;font-size:60px"><b>YTD: '.$ytd.'%</b></font></center></body>';
