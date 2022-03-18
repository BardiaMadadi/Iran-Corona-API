<?php

require_once "../class/Corona.php";
include_once "../helper/responseJson.php";
$corona = new Corona;

$TodayDeath = $corona->getTodayDeath();

if ($TodayDeath != null) {
    echo response(200, "Done !", $TodayDeath);
} else {

    echo response(400, " There is problem :( ", $TodayDeath);

}
