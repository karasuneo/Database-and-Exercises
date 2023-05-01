<?php
session_start();

$_SESSION["name"] = "田中";
$_SESSION["age"] = "14";
$_SESSION["address"] = "地球";

print $_SESSION["name"];
?>