<?php
require_once "../class/Corona.php";
include_once "../helper/responseJson.php";

if (isset($_GET['days'])) {

    $corona = new Corona;
    $infoArray = $corona->GetAll($_GET['days']);

    if($infoArray != false){

        echo response(200,"Done !",$infoArray);


    }else{
        echo response(400,"There is a Error",null);
    }

}else{
    echo response(400,"days is not set in url",null);
}
