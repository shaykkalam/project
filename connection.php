<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sdc";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if ($conn){
    echo"connection sucessfully";

  }
  else{
    echo"connected failed";
  }
  echo"<br>";
  ?>