<?php

        if(isset($_POST['submit'])) {
            
            date_default_timezone_set('Asia/Kolkata');
		    include("config.php");
    		$name = $_POST['name'];
    		$ccode = $_POST['ccode'];
    		$phone = $_POST['phone'];
    		$email = $_POST['email'];
            $out = $_POST['output'];
    		$date = date("Y-m-d H:i:s");
    
    		$sql = "INSERT INTO tour (name, ccode, phone, email, output, date) VALUES ('$name', '$ccode', '$phone', '$email', '$out', '$date');";
    
    		if ($db->query($sql) === TRUE) {
    		    header("location: success.php");
    		    exit;
    		}
		    echo "Error: " . $sql . "<br>" . $db->error;
    
		}
		else{
		    header("location: index.html");
		    exit;
		}
?>