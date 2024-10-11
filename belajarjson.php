<?php 

$akun = [
    ["username" => "ekaway", "password" => "ekaway123"],
    ["username" => "wahyuni", "password" => "wahyuni123"],
    ["username" => "siti", "password" => "siti123"],
    ["username" => "darmayanti", "password" => "darmayanti123"],
    ];

    $json_data = json_encode($akun, JSON_PRETTY_PRINT);
    file_put_contents('akun.json', $json_data);
    echo "Data JSON Telah Disimpan";

?>