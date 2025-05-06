<?php

ini_set('display_errors', 1);
require_once(__DIR__ . '/vendor/autoload.php');
\Cashfree\Cashfree::$XClientId = "13764729ed596674a0f96e06f3746731";
\Cashfree\Cashfree::$XClientSecret = "1f4ee1fd095fcd3cfa702f0c91389c8adca03b5a";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;

$x_api_version = "2022-09-01";
?>