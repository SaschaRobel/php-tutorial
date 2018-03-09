<!DOCTYPE html>

<! this is just some kind of bullshitting around with php >

<html>
  <body>
    <p> these are just some php tutorials </p>
    <p> yes, this is the right  </p>     
    <?php
      echo "Hello world <br />";
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== FALSE) 
      {
        echo "You are using the firefox browser.<br />";
      }else
        echo "I have no Idea what I am doing!<br />";
      echo $_SERVER['HTTP_USER_AGENT'];
      echo  "<br />" ;
      echo FALSE !== strpos($_SERVER['HTTP_USER_AGENT'], 'sascha');
      ?>



  
     <form action="Tutorial1.php" method="post">
        Number 1 <input value="0" type="submit" name="Button1" /><br />
     </form>  
      <?php


      echo "A variable is initialized by th $ sign and does not have a type<br />";

      $foo = "Hello";
      $bar = "World";
      echo "$foo $bar <br /> was printed just by variables <br />"; 
      echo "in addition to strings, you can calculate with variable! (yay) <br />";
      $foo1 = 4; $bar1 = 3;

      echo "addition with $foo1 and $bar1 is ".($foo1+$bar1)."<br />";
      echo "at last obviously there is the %, \"mod\", * and / <br />";
       
      echo "$foo1 / $bar1 is ".($foo1/$bar1)."<br />";
      echo "$foo1 % $bar1 is ".($foo1 % $bar1)."<br />";
      echo "$foo1 ** $bar1 (or pow(a,b)) is ".($foo1**$bar1)." or ".(pow($foo1,$bar1))."<br />";
      ?> 
      <form action="index.php" method="post">
        Number 1 <input value="0" type="text" name="num1" /><br />
        Number 2 <input value="0" type="text" name="num2" /><br />
      <input type="Submit" value="Absenden" />
      </form>     
      <?php
        $num1 = 0;
        $num2 = 0;
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "$num1 + $num2 =".($num1+$num2)."<br />";
      ?> 
      <?php
  /*    // Fibunacci folge 
      $numOld = 0;
      $num = 0;
      for($i = 1; $i < 100; $i++)
      {
        $temp = $num;
        $num += $numOld;
        $numOld = $temp; 
        if($num == 0)
        {
          $num = 1;
        }
        echo "Number $i is $num <br />";
      }
    */  ?>



  </body>
</html> 

