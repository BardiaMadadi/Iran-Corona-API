<?php

class Corona
{

    // private int $todayCases;
    // private int $todayDeath;
    // private int $todayRecovered;
    // private int $allCases;
    // private int $allDeath;
    // private int $allRecovered;

    public function getTodayCases()
    {
        include_once "../helper/curl.php";
        $response =
        json_decode(
            makeAPICall("https://disease.sh/v3/covid-19/countries/Iran"),
            true
        );
        if($response != null){
            return $response["todayCases"];
        }else{
            return null;
        }
    }

    public function getAllCases()
    {
        include_once "../helper/curl.php";
        $response =
        json_decode(
            makeAPICall("https://disease.sh/v3/covid-19/countries/Iran"),
            true
        );
        if($response != null){
            return $response["cases"];
        }else{
            return null;
        }
    }
    public function getAllDeath()
    {
        include_once "../helper/curl.php";
        $response =
        json_decode(
            makeAPICall("https://disease.sh/v3/covid-19/countries/Iran"),
            true
        );
        if($response != null){
            return $response["deaths"];
        }else{
            return null;
        }
    }

    public function getTodayDeath()
    {
        include_once "../helper/curl.php";
        $response =
        json_decode(
            makeAPICall("https://disease.sh/v3/covid-19/countries/Iran"),
            true
        );
        if($response != null){
            return $response["todayDeaths"];
        }else{
            return null;
        }
    }
    public function getTodayRecovered()
    {
        include_once "../helper/curl.php";
        $response =
        json_decode(
            makeAPICall("https://disease.sh/v3/covid-19/countries/Iran"),
            true
        );
        if($response != null){
            return $response["todayRecovered"];
        }else{
            return null;
        }
    }

    public function getAllRecovered()
    {
        include_once "../helper/curl.php";
        $response =
        json_decode(
            makeAPICall("https://disease.sh/v3/covid-19/countries/Iran"),
            true
        );
        if($response != null){
            return $response["recovered"];
        }else{
            return null;
        }
    }

    public function GetAll(int $days){
        require_once "../db/config.php";
        $Database = new _Database;
        $rows = $Database->getRows($days);
        if($rows != null){

            return $rows;

        }else{
            return false;
        }

    }
}
