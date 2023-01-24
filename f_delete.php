<?php 
include 'connect.php';
$getId=$_GET['id'];

QB::query("DELETE FROM `foundation_member` WHERE id='$getId'")->get();

header("location:foundation_member.php");

 ?>