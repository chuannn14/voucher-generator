<?php

require 'generator.php';

if ($_SERVER['REQUEST_URI'] === '/generate') {

    $count = 3000000;

    generateVouchers($count);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="vouchers.csv"');

    readfile('vouchers.csv');

}