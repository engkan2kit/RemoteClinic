<?php
// DATABASE CONNECTION //
@session_start();
include('settings_conn.php');
$con = mysqli_connect($CLINIC_DB_HOST, $CLINIC_DB_USER, $CLINIC_DB_PASS, $CLINIC_DB_NAME);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
