jo


<?php

  $username = $_POST["username"];
  $password = $_POST["password"];
  $pass = sha1($password);
##  echo $pass;
  if($username == "sascha" and $pass ==  "40bd001563085fc35165329ea1ff5c5ecbdbbeef")
  {
    echo "Hey there";
  }
  else
  {
    echo "Nay there";
  }
?>
