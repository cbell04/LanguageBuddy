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
 </style>
<div class= "header">
    <h1>Congrats! You're Registered. Now, Find a Buddy!</h1>
</div>
</head>
<body>
<?php 
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$spoken_lang = $_REQUEST["spoken_lang"];
$new_lang = $_REQUEST["new_lang"];
echo $email;
echo $spoken_lang;
echo $new_lang;
 ?>
 <table border="0" cellpadding="3">
     <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Language Spoken</th>
       <th>Language Learning</th>
     </tr>
</table>