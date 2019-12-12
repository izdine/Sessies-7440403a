<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
      <form method="post">

        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <input type="text" id="Keuze "placeholder="Keuze" name=Keuze>
        <input type="submit" name="button" value="Submit"></input>
    </form>

      <?php
      session_start();
      $_SESSION["Urbansports"] = "Skateboard"."Basketbal"."Skeelers";

  setcookie("COOKIE" , $_POST["Keuze"]);
  if ($_POST["Keuze"] > 3 ) {
    echo $_POST["Keuze"] . "is geen item "  ;
  }
  if (!is_numeric($_POST["Keuze"])) {
    echo $_POST["Keuze"] . " is geen item " ;
  }
  if (isset($_POST["Keuze"])) {
    setcookie("COOKIE", $_POST["Keuze"], time()+3600);
      echo "<h1> Gekozen item: " . $_POST["Keuze"] . "</h1>";
      }

  elseif (isset($_SESSION["Keuze"])) {
    echo "<h1> Gekozen item: " . $_SESSION["COOKIE"] . "</h1>";
    }
       ?>
    </body>
</html>
