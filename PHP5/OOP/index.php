<?php
include_once "index2.php";
include_once "productModel.php";
$db = new Database();
$db->connect("localhost", "root", "", "oop");
$productModel = new productModel();
