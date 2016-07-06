<?php

include_once "Spyfu.php";

class SpyfuCoreAPI extends Spyfu {

    public function GetDomainMetrics($method, $domain) {
        $postArray = array(
            "domain" => $domain
        );
        $postArray = array_filter($postArray);
        return $this->doCurl("/leads_api/$method", $postArray);
    }

    public function GetDomainBudget($country, $domain) {

        $method = array(
            "US" => "get_domain_budget_history_us",
            "UK" => "get_domain_budget_history_uk",
        );

        $postArray = array(
            "domain" => $domain
        );
        $postArray = array_filter($postArray);
        return $this->doCurl("/core_api/" . $method[$country], $postArray);
    }

}

##  method-1
/**
$obj = new SpyfuCoreAPI();
$response = $obj->GetDomainBudget("US", "pizzahut.com");
$response = $obj->GetDomainBudget("UK", "pizzahut.com");
print_r($response);
 * 
 */


