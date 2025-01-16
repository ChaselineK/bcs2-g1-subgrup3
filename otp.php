<?php
function generateOTP($length = 10) {
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= rand(0, 9);
    }
    return $otp;
}
$otp = generateOTP();
echo $otp; // Example: 123456
?>