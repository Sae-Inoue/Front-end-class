<?php

//condition ? do when true : do when false

$errorCode = 502;

$errorMessage = 404 === $errorCode ? "Not Found" : "OK";



switch ($errorCode){
    case 200:
    case 333:
        $errorMessage = "OK";
        break;
    case 404: $errorMessage = "Not Found";
    break;
    case 402: $errorMessage = "Payment required";
    break;
    case 502: $errorMessage = "Bad gateway";
    break;
    default:
        $errorMessage = "Unknown error!!";

}

echo "<p>{$errorCode} : {$errorMessage}</p>";