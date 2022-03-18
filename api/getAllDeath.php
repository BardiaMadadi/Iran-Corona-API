<?php

require_once "../class/Corona.php";
include_once "../helper/responseJson.php";
$corona = new Corona;

$allDeath = $corona->getAllDeath();

if ($allDeath != null) {
    echo response(200, "Done !", $allDeath);
} else {

    echo response(400, " There is problem :( ", $allDeath);

}
