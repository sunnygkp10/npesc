<?php
include_once 'dbConnection.php';
session_start();
if(@$_GET['q']) {
$id=@$_GET['q'];
$result = mysqli_query($con,"SELECT * FROM users WHERE id='$id' ") or die('Error');
while($row = mysqli_fetch_array($result)) {

