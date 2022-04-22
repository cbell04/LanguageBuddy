<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<title>Find your Language Buddy</title>
<style>
.header {
    text-align: center;
    font-weight: bold;
    
    
}
table {
    border: solid 1px;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
th {
}
td {
  text-align: center;
}
 </style>
<div class= "header">
    <h1>Congrats! You're Registered. Now, Find a Buddy!</h1>
</div>
</head>
<body>
<?php 
// add user to database
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$spoken_lang = $_REQUEST["spoken_lang"];
$new_lang = $_REQUEST["new_lang"];
// echo $email;
// echo $spoken_lang;
// echo $new_lang;
 ?>
 <table cellpadding="3">
     <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Language Spoken</th>
       <th>Language Learning</th>
     </tr>
<?php 
//create table of matches
//establish connection info
    $server = "localhost";// your server
    $userid = "ub32w6yhglqy4"; // your user id
    $pw = "ilzubcxxbq2v"; // your pw
    $db= "db0io1fjdknxqw"; // your database
    
    // Create connection
    $conn = new mysqli($server, $userid, $pw);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    //select the database
    $conn->select_db($db);
    

// ask what the variable names for spoken and new language are
$sql = "SELECT * FROM users WHERE spoken_lang = '$new_lang' AND new_lang = '$spoken_lang'";
$result = $conn->query($sql);

//get results
if ($result->num_rows > 0) 
{   

while($row = $result->fetch_assoc()) 
{  
    echo "<tr><td>".$row["name"]."</td><td><a href='mailto:".$row["email"]."'>".$row["email"]."</a></td><td>".$row["spoken_lang"]."</td>".
    "<td>".$row["new_lang"]."</td></tr>";
}
}
 ?>
</table>
</body>
</html>