<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math Function</title>
  <style>
    #heading{
      text-align:center;
    }
    .title{
      text-align:center
;    }
      div{
        margin :auto;
        border:solid 2px orange;
        padding:10px;
        height:100%;
        width:22%;
      }
  </style>
</head>
<body>
<h1 id="heading">Sparkout Tech Solutions</h1>
<h2 class="title">Math Functions</h2>
<div>
<?php

      echo "Power of 3,2 : ".pow(3,2)."<br>";
      echo "Square Root : ".sqrt(4)."<br>";
      echo "Round value for 3.6546 : ".round(3.6546)."<br>";
      echo "Floor value for 3.6546 : ".floor(3.6546)."<br>";
      echo "pie value : ".pi()."<br>";
      echo "decimal to binary for 33 : ".decbin(33)."<br>";
      echo "binary to decimal for 33 : ".bindec(33)."<br>";
      echo "hexadecimal to decimal for 33 : ".hexdec(33)."<br>";
      echo "decimal to hexadecimal for 33 : ".dechex(33)."<br>";
      echo "octal to decimal for 33 : ".octdec(33)."<br>";
      echo "minimum for (81,99,80,21,34,67) : ".min(81,99,80,21,34,67)."<br>";
      echo "maximum for (81,99,80,21,34,67) : ".max(81,99,80,21,34,67)."<br>";
      echo "sin for (3) : ".sin(3)."<br>";
      echo "tan for (6) : ".tan(6)."<br>";
      echo "cos for (9) : ".cos(9)."<br>";


?>
  </div>
</body>
</html>