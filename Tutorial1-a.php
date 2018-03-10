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


<?php 
    $seite = $_GET["seite"];
    if(empty($seite))
    {
      echo "<a href=\"?seite=tutorial-a\">Zur Indexseite</a><br /> startseite";
      
    }else
    {
      if($seite == "tutorial-a")
      {
        echo "<br />This is the page on which we study for tutorial a";

      }else
      {
        echo "I have no idea where we are";
      } 
    }   
?>
