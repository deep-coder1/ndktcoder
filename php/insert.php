<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff

        $servername = "localhost";
        $username = "username";
        $password = "";
        $dbname = "my_dummy_db";
		$conn = mysqli_connect("localhost", "root", "", "my_dummy_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 4 values from the form data(input)
		$full_name = $_REQUEST['full_name'];
		$email_id = $_REQUEST['email_id'];
		$mobile_no = $_REQUEST['mobile_no'];
		$message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO data6 VALUES ('','$full_name',
			'$email_id','$mobile_no','$message',current_timestamp())";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Thanks for contact us."
				. " Please wait some time "
				. " I'll replay on your email or mobile no</h3> <script>
                alert('Your Message has updated sucessfully');
              </script>";

			echo nl2br("\n$full_name\n $email_id\n "
				. "$mobile_no\n $message\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
