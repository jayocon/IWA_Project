<!doctype html>
<html lang="en">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" type="text/css" href="IWAStyleSheet.css">
		
	<meta charset="utf-8">
		<body>
		<h1>IntraOffice Chat</h1>
		<div id="loading">
				<img src="loadingBar.gif"/>
				<p id="demo" style="color:red">Please wait...</p>
			</div>
		<div class="outerDiv">
			<div class="output">
				
						</div><br>	
					Name: <input type="text" name="username" id="username" ></input>
					Message: <input type="textarea" class="message" id="message"> </input><br><br>   
					<button class="B" onclick="saveData();">Submit</button>	
</div>					
			
			
		
			<script>

function saveData(){
	var username = document.getElementById('username').value;
	var message = document.getElementById('message').value;
  $.post( "TextBoxDBConnection.php", { username: username, message: message })
  .done(function( data ) {
   document.getElementById('username').value = "";
   document.getElementById('message').value = "";

   });
   
 // $('.output').load('.output);
   }	
			$('.outerDiv').hide();
			setInterval(function(){myTimer()},2000);
			
				function myTimer() {
				var d = new Date();
				$('.outerDiv').show();
				$('#loading').hide();
				}
				window.setInterval("refreshDiv()", 2000);  
            function refreshDiv(){   
                document.getElementById('.output').innerHTML = "Testing ";  
				alert("yes");
            }

</script>
   <script>
$(document).ready(function() {
auto_refresh();
});
function auto_refresh(){
$('.output').load('retreive.php').fadeIn("fast");

}
var refreshId = setInterval(auto_refresh, 1000);

   		</script>


		</body> 
</html>
