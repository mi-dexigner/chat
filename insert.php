<?php 
$con =mysqli_connect('localhost','root','pjw28sr@','chatbox');


$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

mysqli_query($con,"INSERT into logs (name,msg) VALUES ('$uname','$msg')");

$select = "SELECT * FROM logs ORDER BY id DESC";

$result = mysqli_query($con,$select);


while ($extract = mysqli_fetch_array($result)) {
	echo  "<span class='uname'>" . $extract['name'] . "</span>:<span class='msg'>" . $extract['msg'] . "</span>";
}

 ?>