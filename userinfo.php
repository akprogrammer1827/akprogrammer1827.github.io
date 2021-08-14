<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Database Connection Successful";
}
else {
	echo "Database Connection Failed";
}

mysqli_select_db($con, 'websiteruserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user', '$email','$mobile', '$comment')";

echo "$query";

mysqli_query($con, $query);

header('location: index.php');


?>