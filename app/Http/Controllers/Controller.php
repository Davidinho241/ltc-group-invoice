<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const BASE_URL = "https://api-checkout.cinetpay.com/v2/payment";

    public function paymentLink($transaction, $customer)
    {
        $data = [
            "apikey"=> "19307168035e47e4a0a20d24.32798184",
            "site_id"=> "948395",
            "transaction_id"=>  $transaction->billing_number, //
            "amount"=> $transaction->amount,
            "currency"=> "XAF",
            "alternative_currency"=> "XOF",
            "description"=> " TEST INTEGRATION ",
            "customer_id"=> rand(),
            "customer_name"=> $customer->name,
            "customer_surname"=> $customer->name,
            "customer_email"=> $customer->email,
            "customer_phone_number"=> $customer->email,
            "customer_address"=> "Antananarivo",
            "customer_city"=> "Antananarivo",
            "customer_country"=> "CM",
            "customer_state"=> "CM",
            "customer_zip_code"=> "065100",
            "notify_url"=> "https://webhook.site/d1dbbb89-52c7-49af-a689-b3c412df820d",
            "return_url"=> "https://webhook.site/d1dbbb89-52c7-49af-a689-b3c412df820d",
            "channels"=> "CREDIT_CARD",
            "metadata"=> "user1",
            "lang"=> "FR"
        ];

        $response = json_decode($this->callCinetpayWsMethod($data, self::BASE_URL));

        if($response->code == 201){
            return $response->data->payment_url;
        }

        return $response;
    }

    private function callCinetpayWsMethod($params, $url, $method = 'POST')
    {
        if (function_exists('curl_version')) {
            try {
                $curl = curl_init();
                if ($method == 'POST') {
                    $postfield = '';
                    foreach ($params as $index => $value) {
                        $postfield .= $index . '=' . $value . "&";
                    }
                    $postfield = substr($postfield, 0, -1);
                } else {
                    $postfield = null;
                }
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 45,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => $method,
                    CURLOPT_POSTFIELDS => $postfield,
                    CURLOPT_HTTPHEADER => array(
                        "cache-control: no-cache",
                        "content-type: application/x-www-form-urlencoded",
                    ),
                ));
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                if ($err) {
                    throw new \Exception("Error :" . $err);
                } else {
                    return $response;
                }
            } catch (\Exception $e) {
                throw new \Exception($e);
            }
        } elseif (ini_get('allow_url_fopen')) {
            try {
                // Build Http query using params
                $query = http_build_query($params);
                // Create Http context details
                $options = array(
                    'http' => array(
                        'header' => "Content-Type: application/x-www-form-urlencoded\r\n" .
                            "Content-Length: " . strlen($query) . "\r\n" .
                            "User-Agent:MyAgent/1.0\r\n",
                        'method' => "POST",
                        'content' => $query,
                    ),
                );
                // Create context resource for our request
                $context = stream_context_create($options);
                // Read page rendered as result of your POST request
                $result = file_get_contents(
                    $url, // page url
                    false,
                    $context
                );
                return trim($result);
            } catch (\Exception $e) {
                throw new \Exception($e);
            }
        } else {
            throw new \Exception("Vous devez activer curl ou allow_url_fopen pour utiliser CinetPay");
        }
    }

}
