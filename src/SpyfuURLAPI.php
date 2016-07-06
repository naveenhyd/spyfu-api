<?php

include_once "Spyfu.php";

class SpyfuURLAPI extends Spyfu {

    public function Get($method, $domain, $resultsCount = 10, $term = '', $position = '', $monthlyClicks = '', $seoDifficulty = '') {
        $postArray = array(
            "q" => $domain,
            "r" => $resultsCount,
            "t" => $term,
            "p" => $position,
            "mc" => $monthlyClicks,
            "sd" => $seoDifficulty
        );

        #   remove empty values
//        print_r($postArray);
        $postArray = array_filter($postArray);
//        print_r($postArray);

        return $this->doCurl("/url_api/$method", $postArray);
    }

}

$obj = new SpyfuURLAPI();
$response = $obj->Get("organic_kws", "nationalanalysiscenter.com");
print_r($response);

