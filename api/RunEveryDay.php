<?php
require_once "../db/config.php";
require_once "../class/Corona.php";
include_once "../helper/responseJson.php";

$Database = new _Database();
$corona = new Corona();
$death = $corona->getTodayDeath();
$case = $corona->getTodayCases();
$recovered = $corona->getTodayRecovered();


if ($case != null && $death != null && $recovered != null) {
    if($Database->addrow($case,$death,$recovered)){

        echo (response(200, "Done!",null));
    }else{
        echo (response(400, "Fail To add row",null));

    }

} else {
    echo (response(400, "Fail To get datas",null));
}
