<?php
if(isset($_POST['uname'],$_POST['psw']))
{
	$uname = $_POST['uname'];
	$pwd = $_POST['psw'];
	if($uname == 'admin' && $pwd == 'password')
	{
		echo '<h3>Successfully logged in</h3>';
		
    }
	
	else
	{
		echo '<script> alert("Invalid Credentials")</script>';
		header('Location: login_syn.php'); 
	}
}
?>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 
  <script>
$(document).ready(function() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("hidden_token").setAttribute('value', this.responseText);
        }
    };
    xhttp.open("GET", "token_generator.php", true);
    xhttp.send();
});
</script>
	
<!DOCTYPE html>
<html>
<head>
<link href="style_syn.css" rel="stylesheet" id="css">
</head>
<body>
	<div class="outer_div">
            <h1 class=welcome align=center>Welcome</h1>
            <h2 class=welcome align=center>CSRF prevention - Synchronizer Token Pattern</h3>
            <form class="form_" action="verify.php" method="post">
                <div class=inner_div>
                    <label class=welcome >Please Enter your Message Below:</label><br><br><input type="text" class=input_text id="uname" placeholder = "Enter Message" name="uname" ><br><br><br>
                    
                    <div id=div_hidden>
                        <input type="hidden" name="token" value="" id="hidden_token"/>
                    </div>

                    <label><button type="submit">Send Message</button></label>
                </div>
            </form>
        </div>
		
</body> 
</html>
