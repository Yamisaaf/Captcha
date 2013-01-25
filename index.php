<?php
session_start();
if(isset($_POST['captcha']) && isset($_SESSION['rand']))
{

  if($_POST['captcha'] ==$_SESSION['rand'])
	{


		echo "le captcha est correct";
	}else{


		echo "Captcha incorrect";
	}
}

?>
<!doctype>

<html>
<head><title>Captcha</title></head>
<body>
<br>
<label>Veuillez saisir le forumulaire</label></br>

<form method="POST" action="">
<input type="text" name="captcha" id="captcha"></br>
<span><img src="image.php"></span></br>
<input type="submit" name="submit" value="Valider"></br>
</form>
<script src="jquery.js"></script>

<script type="text/javascript">

$(document).ready(function(){


$('form').submit(function(){

var captcha = $('#captcha').val();

if(captcha.length==0)
{

	$('#captcha').css('border-color','#f82c49');
	return false;

}else{

	return true ;
}
});

});


</script>
</body>


</html>
