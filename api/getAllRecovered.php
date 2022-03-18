<?php

require_once "../class/Corona.php";
include_once "../helper/responseJson.php";
$corona = new Corona;

$AllRecovered = $corona->getAllRecovered();

if ($AllRecovered != null) {
    echo response(200, "Done !", $AllRecovered);
} else {

    echo response(400, " There is problem :( ", $AllRecovered);

}
