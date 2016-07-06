<?php

include_once "Spyfu.php";

class SpyfuLeadsAPI extends Spyfu {

    public function GetContactCard($domain) {
        $postArray = array(
            "domain" => $domain
        );
        $postArray = array_filter($postArray);
        return $this->doCurl("/leads_api/get_contact_card", $postArray);
    }

    public function GetGrid($query, $results = 20) {
        $postArray = array(
            "q" => $query,
            "r" => $results
        );
        $postArray = array_filter($postArray);
        return $this->doCurl("/leads_api/get_contact_card", $postArray);
    }

}

##  method-1
/**
  $obj = new SpyfuLeadsAPI();
  $response = $obj->GetContactCard("pizzahut.com");
  print_r($response);
 * 
 */
##  method-2
/**
$obj = new SpyfuLeadsAPI();
$response = $obj->GetGrid("new york");
print_r($response);
 * 
 */

