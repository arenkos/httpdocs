<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://apigwtest.denizbank.com/api//Accounts/GetAccountDetail');
$url = $request->getUrl();

$headers = array(
                                        // Request headers
                                        'Content-Type' => 'application/json',
                                        'SubscriptionKey' => '21f8c09d-45a2-4394-9581-04bd5b9c0a93',
);

$request->setHeader($headers);

$parameters = array(
                                        // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("{body}");

try
{
                                        $response = $request->send();
                                        echo $response->getBody();
}
catch (HttpException $ex)
{
                                        echo $ex;
}

?>
