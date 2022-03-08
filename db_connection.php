<?php
$myserver="localhost";
$username="root";
$pass="";
$db_name="db_dit";
// creating connection using object oriented language
$connect=new mysqli("$myserver", "$username", "$pass", $db_name);
// check connection
//if (!$connect){
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtSubject = $_POST['subject'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `contact_us` (`No`, `FirstName`, `Email`, `Subject`, `Message`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage')";

//another input to Enroll Now
$txtname=$_POST['Name'];
$txtemail=$_POST['Email'];
$txtcourse=$_POST['course'];
$txtdate=$_POST_['date'];
//insert data
$sql = "INSERT INTO `enroll_now` (`id`, `Name`, `Email`, `course`,`date`) VALUES ('0', '$txtname', '$txtemail',$txtcourse, '$txtdate')";
