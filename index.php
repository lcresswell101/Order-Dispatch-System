<?php

use Build\Couriers\RoyalMail;
use Build\Dispatch\Dispatch;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

$dispatch = new Dispatch(new RoyalMail(), 10);

$dispatch->startBatch();