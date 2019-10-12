<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<?php
    
    
    require_once 'check_token.php';
	$value = $_POST['token'];
	if (isset($_POST['msg'])){
		if (token::checkToken($value, $_COOKIE['session_time']))
		{
			echo '
			<div class=outer_div>
			<h1 class=welcome align=center>Cookie Accepted!</h1>
			
			</div>
			';
		}
		else
		{
			echo '<div class=outer_div>
			<h1 class=welcome align=center>Cookie Rejected!</h1>
			
			</div>';
		}
	}
?>