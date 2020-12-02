<?php
include("db.php");
session_start();

function error($msg = "Error :<")
{
    return '<div class="col-12 alert alert-danger" role="alert">' . $msg . '</div>';
}
function success($msg = "success")
{
    return '<div class="col-12 alert alert-success" role="alert">' . $msg . '</div>';
}



// encrypt and decrypt credits to https://gist.github.com/nim4n136/7fa38467181130f5a2270c39d495101e#file-encryption_openssl_salt-php-L3
function encrypt($data, $password)
{
    $iv = substr(sha1(mt_rand()), 0, 16);
    $password = sha1($password);

    $salt = sha1(mt_rand());
    $saltWithPassword = hash('sha256', $password . $salt);

    $encrypted = openssl_encrypt(
        "$data",
        'aes-256-cbc',
        "$saltWithPassword",
        null,
        $iv
    );
    $msg_encrypted_bundle = "$iv:$salt:$encrypted";
    return $msg_encrypted_bundle;
}


function decrypt($msg_encrypted_bundle, $password)
{
    $password = sha1($password);

    $components = explode(':', $msg_encrypted_bundle);
    $iv            = $components[0];
    $salt          = hash('sha256', $password . $components[1]);
    $encrypted_msg = $components[2];

    $decrypted_msg = openssl_decrypt(
        $encrypted_msg,
        'aes-256-cbc',
        $salt,
        null,
        $iv
    );

    if ($decrypted_msg === false)
        return false;

    $msg = substr($decrypted_msg, 41);
    return $decrypted_msg;
}
