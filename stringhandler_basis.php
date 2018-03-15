<!DOCTYPE html>
<html lang="nl">
     <head>
        <meta charset="utf-8">
        <meta name="description" content="Opdracht 1">
        <meta name="author" content="T">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/overlay.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Opdracht 1 Jelle Buurman gd1b</title>
    </head>
     <body>
         <?php
         if ( !empty($_GET)) {
                 $input1 =  $_GET['input1']; // input uit html
                 $input2 =  $_GET['input2']; // input uit html
             }
            else{
                 $input1 = ""; //lege string
                 $input2 = ""; //lege string
             }
             ?>
             <div class="wrapper">
            <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset id="one">
                 <legend>Inputs Jelle Buurman gd1b</legend>
                 <input type="text" name="input1" placeholder=" Input 1"><br>
                 <input type="text" name="input2" placeholder=" Input 2"><br>
                 <input type="submit" id="submit" name="submit" value="submit">
             </fieldset>
            </form>
      <br>
            <fieldset id="two">
        <legend>Information</legend>

<ul>
    <li>Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
    <li>Ingevoerde string 2:  <?php  echo $input2;  ?> </li>
    <li>String 1 getrimd trim():  <?php  echo $input1 = trim($input1); ?> </li>
    <li>String 2 getrimd trim():  <?php  echo $input2 = trim($input2); ?> </li>
    <li>String 3 is de concatenation van string 1 en string 2:  <?php  echo $string3 = $input1 . $input2; ?> </li>
    <li>De lengte van string 3 is: <?php echo strlen($string3); ?> </li>
    <li>Zoeken naar spaties. Er zit een spatie op positie <?php echo strpos($string3, " "); ?> </li>
    <li>Zoeken naar @. Er zit een @ op positie <?php echo strpos($string3, "@"); ?> </li>
    <li>Zoeken naar "." . Er zit een  "."  op positie <?php echo strpos($string3, "."); ?> </li>
    <li>Zoek naar woord "html" vervang dit door "PHP" <?php echo str_replace("html", "PHP", $string3); ?> </li>
    <li>Wijzig de eerste letter van string 3 naar hoofdletter: <?php echo ucfirst($string3); ?> </li>
    <li>Alles in hoofdletters: <?php echo strtoupper($string3); ?> </li>
</ul>
</fieldset>
</body>
</html>
