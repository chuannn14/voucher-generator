<?php

function generateCode($length = 10)
{
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $max = strlen($chars) - 1;

    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $chars[random_int(0, $max)];
    }

    return $code;
}

function generateVouchers($count)
{
    $generated = [];

    $file = fopen("vouchers.csv", "w");

    while (count($generated) < $count) {

        $code = generateCode();

        if (!isset($generated[$code])) {

            $generated[$code] = true;

            fputcsv($file, [$code]);
        }
    }

    fclose($file);
}