<?php
require_once('vendor/autoload.php');
$client = new \GuzzleHttp\Client();
$response = $client->request('POST', 'https://api.gupshup.io/sm/api/v1/msg', [
  'form_params' => [
    'channel' => 'whatsapp',
    'source' => '918130741809',
    'destination' => '918299125651',
    'message' => '{"type":"text","text":"Discover Your Dream Home at DLF Capital Greens
Ready To Move In Homes at Moti Nagar, New Delhi
Book Now 2, 3, 4 BHK Apartments Starts From 2.5 Cr*
Gated Community with trail of modern Amenities."}',
    'src.name' => 'HoneyMoneyAssociatesLTD',
    'template' => '88377dd8-010c-4f7b-a027-6e7aa087bb28'
  ],
    'headers' => [
        'Cache-Control' => 'no-cache',
        'Content-Type' => 'application/x-www-form-urlencoded',
        'accept' => 'application/json',
        'apikey' => 'god9m4yfru3zpaf41w6pfnugumaefj65',
    ],
]);
echo $response->getBody();
?>