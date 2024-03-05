<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication Table</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Multiplication Table (1 - 5)</h1>
  <table>
    <?php
       echo "<tr>";
      echo '<th> &nbsp </th>';
      for($col = 1; $col <= 12; $col++) :
          echo "<th>$col</th>";
      endfor;
      echo "</tr>";
  
         for($row = 1; $col = 1; $row <= 12; $row++) :
           echo '<tr>';
      
                if ($col == 1) {
                  echo "<th>$row</th>";
                }
          
            while ($col <= 12) :
              echo '<td>' . $row * $col . '</td>';
              $col++; // Increment after using the current value
            endwhile;
          
            echo '</tr>';
      
            // reset the col
            $col = 1;
          endfor;

    ?>
  </table>
</body>
</html>
<!-- // create remaining rows
      //for($row = 1; $col = 1; $row <= 12; $row++ ) :
      //echo '<tr>';

      //if($col == 1){
      //echo "<th>$row</th>";
      //}

      //while($col <= 12):
      //echo '<td>' . $row * $col++ . '</td>';
      //endwhile;
      //echo '</tr>';

      ////reset the col
      //   $col = 1;
      //endfor;
      // -->