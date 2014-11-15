<?php
				ini_set('display_errors',1);
				ini_set('display_startup_errors',1);
				error_reporting(-1);
				require("db.php");
				
				$username = $_POST['username'];
				$message = $_POST['message'];
				echo '<b>'. $username . '</b>' . $message ;
				$msg = 1;

				try{
				
					$sql = "INSERT INTO `iwa`.`textbox` (`id`, `username`, `time`, `message`) VALUES (NULL, :username, CURRENT_TIMESTAMP, :message);";
					$items = $DBH->prepare("$sql");

					$items->bindParam(':username', $username, PDO::PARAM_STR);
					$items->bindParam(':message', $message, PDO::PARAM_STR);

					$items->execute();
					
				}catch(PDOException $e){

					$DBH->rollback();

					$msg = 2;
				}
				
				//header("Location: TextBox.php?msg=$msg");
				
			?>