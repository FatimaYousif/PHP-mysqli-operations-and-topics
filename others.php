<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//unqiue, primary key +foreign key

// 1. add column CNIC

// $add=  'ALTER TABLE login 
// ADD COLUMN cnic int(13)';

// 2. make it unqiue
// $unqiue= 'ALTER TABLE login
// ADD UNIQUE KEY (cnic)';

//3. make user_id + mem_id primary key

$sql='ALTER TABLE login
  ADD PRIMARY KEY (id)';

// //4. make a foreign key
// $sql2= 'ALTER TABLE members
//   ADD FOREIGN KEY (id)';

$sql2= 'ALTER TABLE members
ADD FOREIGN KEY (id) REFERENCES login(id)';

// if(mysqli_query($link, $add)){
//     echo "column cnic created successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }


// if(mysqli_query($link, $unqiue)){
//     echo "made cnic unique successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }


if(mysqli_query($link, $sql)){
    echo "made id PK successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if(mysqli_query($link, $sql2)){
    echo "made id FK successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}





// Close connection
mysqli_close($link);
?>