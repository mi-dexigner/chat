<!DOCTYPE html>
<html>
<head>
	<title>Chat Box</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" >
		function submitChat(){
	if(form1.uname.value == "" || form1.msg.value == "" ){
		alert("All fileds are Mandatory !!!!")
	}
	form1.uname.readyOnly = true;
	form1.uname.style.border = 'none';
	$('#imageload').show();
	var uname = form1.uname.value;
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState === 4 && xmlhttp.status == 200){

				document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
				$('#imageload').hide();
		}
	}

	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+ msg,true);
	xmlhttp.send();

}


$(document).ready(function(e){
$.ajaxSetup({cache:false});
setInterval(function(){$('#chatlogs').load('logs.php');}, 2000);

});
	</script>
</head>
<body>


<form name="form1" >

<label>
Enter Your Name: <br>
<input type="text" name="uname" value=""></label>
	<br>
	<label>
Your Message:<br>
	<textarea name="msg"></textarea></label>
	<br>
<a href="#" class="button" onclick="submitChat()" title="">Send</a>

<div id="#imageload" style="display:none;"><img src="" alt=""></div>

<div id="chatlogs">

loading chat logs please wait 

</div>
</form>
</body>
</html>