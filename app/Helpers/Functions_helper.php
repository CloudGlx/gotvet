<?php
function modifyPhoneNumber($phone) {
    // Check if the phone number starts with a plus sign
    if (substr($phone, 0, 1) == "+") {
        $phone = str_replace("+", "", $phone); // Remove the plus sign
    }

    // Check if the phone number starts with a '0'
    if (substr($phone, 0, 1) == "0") {
        $phone = preg_replace("/^0/", "254", $phone); // Replace leading '0' with '254'
    }

    // Check if the phone number starts with a '7'
    if (substr($phone, 0, 1) == "7") {
        $phone = "254{$phone}"; // Prepend '254'
    }

    return $phone; // Return the modified phone number
}

?>