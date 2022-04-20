<!DOCTYPE html> 

<html>
    <head>
    </head>
    
    <body>
    <?php
        
    session_start();
        
	//establish connection info
    $server = "localhost";// your server
    $userid = ""; // your user id
    $pw = ""; // your pw
    $db= ""; // your database
        
    //Get user's information
    $_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
		
    // Create connection
    $conn = new mysqli($server, $userid, $pw);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";

    //select the database
    $conn->select_db($db);

    //run a query --> check with Clea name of user variables 
    $sql = "SELECT f_name, l_name, email FROM users WHERE email='".$_POST["email"]."'";
       
    //get results
    $result = $conn->query($sql);
    
    //check if user has already existing google ID --> login and update google id
    if(!empty($result->fetch_assoc())){
		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
	}
        
    //add user to data base if they are not already in database 
    else{
		$sql2 = "INSERT INTO users (name, email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}
	$mysqli->query($sql2);
    
    //Checking it worked
    echo "Updated Successful";

    //close the connection	
    $conn->close();

	?>
        
    </body>
</html>