<?php
namespace App\Lib;

class Service
{

    public static final function find($metodo, $url, $data = false, $apiKey = null)
    {
        $curl = curl_init();

        switch ($metodo)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        if(!empty($apiKey)){

            curl_setopt($curl, CURLOPT_HTTPHEADER,
                array($apiKey['key'].":". $apiKey['chave']));
        }

        $response = curl_exec($curl);

        $result = json_decode($response);

        if(isset($result->results)){
            
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            curl_close($curl);
    
            return array('status' => $httpCode, 'response' => $result->results);
        }else{

            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            curl_close($curl);

            return array('status' => $httpCode, 'response' => $result);
        }

        
    }

}