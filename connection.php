<?php

$dbhost = "sql109.epizy.com";
$dbuser = "epiz_31911215";
$dbpass = "0vmVFnn1CT";
$dbname = "epiz_31911215_Bagis";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
