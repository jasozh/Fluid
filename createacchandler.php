<?php
include 'conn.php';

$fluiduser=$_POST['userid'];
$fluidpass=$_POST['pass'];
$fluiddob=$_POST['dob'];
$fluidemail=$_POST['email'];
$fluidfirstname=$_POST['firstname'];
$fluidlastname=$_POST['lastname'];
$fluidemail=$_POST['email'];
$fluidphone=$_POST['phonenum'];

// $sql="INSERT INTO fluid.user
// (userid,
// password,
// dob,
// firstname,
// lastname,
// email,
// phonenum,
// datejoin,
// subend)
// VALUES
// ('$fluiduser',
// '$fluidpass',
// '$fluiddob',
// '$fluidfirstname',
// '$fluidlastname',
// '$fluidemail',
// '$fluidphone',
// curdate(),
// curdate()+30);
// ";
// echo $sql;
// $con->query($sql);
// echo $con;
?>