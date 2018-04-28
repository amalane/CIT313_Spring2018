<?php

// Display errors in production mode
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE);

// let's get started
require 'application/router.php';
