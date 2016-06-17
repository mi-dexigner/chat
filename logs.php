<?php 
$con =mysqli_connect('localhost','root','pjw28sr@','chatbox');

$select = "SELECT * FROM logs ORDER BY id DESC";

$result = mysqli_query($con,$select);


while ($extract = mysqli_fetch_array($result)) {
	echo  "<span class='uname'>" . $extract['name'] . "</span>:<span class='msg'>" . $extract['msg'] . "</span>";
}

 ?>