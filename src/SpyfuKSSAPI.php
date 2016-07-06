<?php

include_once "Spyfu.php";

class SpyfuKSSAPI extends Spyfu {

    function Get($query, $resultsCount = 10) {
        $postArray = array(
            "q" => $query
        );
        $postArray = array_filter($postArray);
        return $this->doCurl("/kss_api/kss_kws", $postArray);
    }

}

$obj = new SpyfuKSSAPI();
$response = $obj->Get("flights", 20);
print_r($response);

