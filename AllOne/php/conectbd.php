<?php

function connect()
{
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db = "tweb6";
  
  return mysqli_connect($servername, $username, $password, $db);
}

?>