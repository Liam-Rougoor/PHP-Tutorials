<?php

$email = "~~jifeafjiejfafi@hotmail.nl    efawfewaga";
$getal = "123567e-10";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Je email is helemaal toppie, ga maar verder";
} else {
    echo "Email slaat nergens op, vul opnieuw in";
}
echo filter_var($getal, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC);
?>