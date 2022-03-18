<?php

function response(int $code, string $message, $return)
{
    header('Content-Type: application/json');
    $responseArr["code"] = $code;
    $responseArr["message"] = $message;
    if ($return != null) {
        $responseArr["data"] = $return;
    }

    return json_encode($responseArr);
}
