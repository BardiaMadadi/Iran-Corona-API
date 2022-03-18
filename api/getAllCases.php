<?php

require_once "../class/Corona.php";
include_once "../helper/responseJson.php";
$corona = new Corona;

$allCases = $corona->getAllCases();

if ($allCases != null) {
    echo response(200, "Done !", $allCases);
} else {

    echo response(400, " There is problem :( ", $allCases);

}
