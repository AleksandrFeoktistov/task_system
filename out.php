<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
  	table {
  	border: solid 1px blue;
  	border-collapse: collapse;}
  	td {border: solid 1px blue;}
  	th {border: solid 1px blue;}
  	</style>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
<?php session_start();
session_destroy(); ?>
<?php header ('location: reg22.php')?>
