<!DOCTYPE html>
<html>
  <head>
    <title>Calculator Output</title>
  </head>
  <body>

    <h1>Gavins Calculator Output</h1>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $arg3 = $output = $retc = "";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg3 = $_POST["arg3"]
         exec("FILE PATH HERE " . $arg1 . " " . $arg2 . " " . $arg3, $output, $retc); 
       }
       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?">
      Number 1: <input type="text" name="arg1"><br>
      Operation(+ - * /):<input type="text" name="arg3"><br>
      Number 2: <input type="text" name="arg2"><br>

      <br>
      <input type="submit" value="Calculate">
    </form>

    <?php
       // only display if return code is numeric - i.e. exec has been called
       if (is_numeric($retc)) {
         echo "<h2>Input:</h2>";
         echo $arg1;
         echo "<br>";
         echo $arg2;
         echo "<br>";
       
         echo "<h2>Output:</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
         }
       
         echo "<h2>Program Return Code:</h2>";
         echo $retc;
       }
    ?>
    
  </body>
</html>
