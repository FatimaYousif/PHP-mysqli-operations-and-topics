<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//new LOGIN table 
$sql = "CREATE TABLE login(
    user_id int(11) NOT NULL,
    email varchar(100) NOT NULL,
    name varchar(100) NOT NULL,
    username varchar(100) NOT NULL,
    password varchar(100) NOT NULL
)"; 


if(mysqli_query($link, $sql)){
    echo "LOGIN Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
//members table

$sql2 = "CREATE TABLE members(
    mem_id int(11) NOT NULL,
    Name varchar(100) NOT NULL,
    Gender varchar(100) NOT NULL,
    Date_of_joining varchar(100) NOT NULL,
    Contact_No varchar(100) NOT NULL,
    Fee int(11) NOT NULL,
    Address varchar(200) NOT NULL
  )";


  if(mysqli_query($link, $sql2)){
    echo "MEMBERS table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 


// Close connection
mysqli_close($link);
?>