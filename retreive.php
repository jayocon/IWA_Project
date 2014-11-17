<?php
	include('db.php');

		$sql = 'select * from `iwa`.`textbox`;';	
		foreach ($DBH->query($sql) as $row) {                     
		echo '&lt'.$row['username'].'&gt &nbsp &nbsp'. date('H:ia',strtotime($row['time'])).'&nbsp &nbsp &nbsp'. $row['message']. "<br>";                    
    }		
?>