<!DOCTYPE html>
<html>
  <head>
    <title>GAVINS CALCULATOR</title>
  </head>


  <body>

    <h1>GAVINS FINAL PI PROJECT CALCULATOR</h1>
    <p>Instructions: Type 2 values you would like to calculate in the first 2 boxes. Then in the third box type 1 to choose addition, 2 to choose subt$

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $arg3 = $output = $retc = "";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg3 = test_input($_POST["arg3"]);
         exec("/usr/lib/cgi-bin/sp1b/calc " . $arg1 . " " . $arg2 . " " . $arg3, $output, $retc); 
       }
       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Arg1: <input type="text" name="arg1"><br>
      Arg2: <input type="text" name="arg2"><br>
      Operator: <input type="text" name="arg3"><br>
      <br>
      <input type="submit" value="calculate">
    </form>

    <?php
       // only display if return code is numeric - i.e. exec has been called
       if (is_numeric($retc)) {
         echo "<h2>Input:</h2>";
         echo $arg1;
         echo "<br>";
         echo $arg2;
         echo "<br>";
       
         echo "<h2>Answer:</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
         }
       
         //echo "<h2>Program Return Code:</h2>";
         //echo $retc;
       }
    ?>
    
  </body>
</html>
