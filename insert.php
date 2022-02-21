<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution in login table
// $sql = "INSERT INTO login (user_id, email, name, username,password) VALUES (1, 'rohatiftikhar2000@gmail.com', 'Rohat 18SW01', 'rohat01','one'), 
// (2,'alwazkazi@gmail.com','Alwaz 18SW11', 'alwaz11','two'),
// (3,'fyousif30@gmail.com','Fatima 18SW29', 'fatima29','three'),
// (4,'muntahaha@gmail.com','Muntaha 18SW19', 'muntaha19','four');
// ";

// if(mysqli_query($link, $sql)){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

// Attempt insert query execution in members table
$sql = "INSERT INTO members (mem_id, Name, Gender,Date_of_joining,Contact_No,Fee,Address) VALUES
 (1, 'Rohat 18SW01', 'Female','1-Feb-2022','11223344','50000','abc'), 
(2, 'Alwaz 18S101', 'Female','1-Jan-2022','222334455','50000','abc'),
(3, 'Fatima 18SW29', 'Female','3-Dec-2022','33445566','50000','abc'),
(4, 'Muntaha 18SW19', 'Female','5-Dec-2022','44556677','50000','abc');
";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>