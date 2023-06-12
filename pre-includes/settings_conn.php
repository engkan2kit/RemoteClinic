<?php
require_once('/var/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('/srv/conf/', 'conf.env');
$dotenv->safeLoad();
$dotenv->required(['CLINIC_DB_HOST', 'CLINIC_DB_USER', 'CLINIC_DB_PASS', 'CLINIC_DB_NAME']);

$CLINIC_DB_HOST = $_ENV['CLINIC_DB_HOST'];
$CLINIC_DB_USER = $_ENV['CLINIC_DB_USER'];
$CLINIC_DB_PASS = $_ENV['CLINIC_DB_PASS'];
$CLINIC_DB_NAME = $_ENV['CLINIC_DB_NAME'];
