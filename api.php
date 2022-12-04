<?php

$verify_password = "YOUR_PASSWORD";

$password = $_POST['password'];
$cpu = $_POST['cpu'];
$memused = $_POST['memused'];
$memfull = $_POST['memfull'];
$uprate = $_POST['uprate'];
$downrate = $_POST['downrate'];
$totaldisk = $_POST['totaldisk'];
$devicename = $_POST['devicename'];
$freedisk = $_POST['freedisk'];
$deviceid = $_POST['deviceid'];
if (isset($password) && isset($cpu) && isset($memused) && isset($memfull) && isset($uprate) && isset($downrate) && isset($totaldisk) && isset($devicename) && isset($deviceid)) {
    if($passoword != $verify_password){
        echo "Password do not match";
        exit;
    }else{
        $data = [
            'CPU' => $cpu,
            'MEM' => $memused,
            'DISK' => $totaldisk,
            'UP' => $uprate,
            'DOWN' => $downrate,
            'FDISK' => $freedisk,
            'DEVNAME' => $devicename,
            'FMEM' => $memfull
        ];
        $json = json_encode($data);
        file_put_contents('json/'.$deviceid.'.json', $json);
        echo "success";
        exit;
    }
}else{
    echo "Request failed!";
    exit;
}