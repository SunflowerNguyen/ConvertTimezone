<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DuyVuSeldat\ConvertTimeZone\ConvertTimeZone;


echo ConvertTimeZone::convert('02-10-2018 18:19:00' , 'Asia/Bangkok' , 'UTC');