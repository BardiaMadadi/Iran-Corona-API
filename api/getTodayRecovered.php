<?php

require_once "../class/Corona.php";
include_once "../helper/responseJson.php";
$corona = new Corona;

$TodayRecovered = $corona->getTodayRecovered();

if ($TodayRecovered != null) {
    echo response(200, "Done !", $TodayRecovered);
} else {

    echo response(400, " There is problem :( ", $TodayRecovered);

}
