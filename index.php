<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="./style.css" rel="stylesheet"/>
  </head>
<body>
 <h1>Multiplication Table (1 - 5)</h1>
  <table>
    <?php
      for ($i = 1; $i <= 5; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
          $result = $i * $j;
          echo "<td>$i x $j = $result</td>";
        }
        echo "</tr>";
      }
    ?>
  </table>

</body>
</html>
