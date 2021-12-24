<?php
require_once __DIR__ . "/vendor/autoload.php";
$config = require_once "config.php";

require_once "functions/url.php";
require_once "functions/database.php";
require_once "functions/validation.php";
require_once "functions/templates.php";
require_once "functions/misc.php";

$con = makeConnection($config["db"]);
