<!doctype html>
<html lang="en">
<!--<script type="text/javascript" src="C:\Users\Jason\Documents\JavaScript\js\jquery.js"></script>
--><script src="http://code.jquery.com/jquery-1.10.2.js"></script> 
		
	<meta charset="utf-8">
		<body>
			
			<div id="inputFields">
				
				
					Name: <input type="text" name="username" id="username" ></input>
					Message: <input type="textarea" name="message" id="message"> </input><br>    
					<button onclick="saveData();">Send</button>	
				
			</div>
		
			<script>

function saveData(){
	var username = document.getElementById('username').value;
	var message = document.getElementById('message').value;
  $.post( "TextBoxDBConnection.php", { username: username, message: message })
  .done(function( data ) {
   alert(data);
   });
   }

</script

<?php
	include('db.php');

		$sql = 'select * from `iwa`.`textbox`;';    
		foreach ($DBH->query($sql) as $row) {                     
		echo $row['username'] . "\t". $row['message'] . "<br>";                    
    }			
?>
		</body> 
</html>
