<?php

/**
 * Spyfu API base class
 * 
 * @author Naveen
 */
class Spyfu {

    protected $API_KEY = "######-####-#####";
    protected $SECRET_KEY = "#####################";
    protected $API_ENDPOINT = "http://www.spyfu.com/apis";

    function doCurl($endPoint, $params) {

        #   query string
        if (count($params) == 0) {
            throw new Exception("Invalid Paramas");
        }
        $queryString = $endPoint . '?' . http_build_query($params);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->API_ENDPOINT . $queryString,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "apikey: $this->API_KEY",
                "authentication: $this->API_KEY:$this->SECRET_KEY",
                "cache-control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
//        $info = curl_getinfo($curl);
//        print_r($info);


        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            exit;
        } else {
            return $response;
        }
    }

}
