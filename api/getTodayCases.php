<?php

require_once "../class/Corona.php";
include_once "../helper/responseJson.php";
$corona = new Corona;

$TodayCases = $corona->getTodayCases();

if ($TodayCases != null) {
    echo response(200, "Done !", $TodayCases);
} else {

    echo response(400, " There is problem :( ", $TodayCases);

}
