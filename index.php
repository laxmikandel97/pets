<?php
//error reporting turned on
ini_set("display_errors",1);
error_reporting(E_ALL);

//require vendor/autoload.php

require ("vendor/autoload.php");

//instantiate Fat-free

$f3 = Base:: instance();

//default route

$f3->route('GET /', function ()
{
   echo "Pet Home";
});

//run fat free

$f3-> run();