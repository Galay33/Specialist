function drawTable ($rows, $cols) {

  echo '<table border="1" width="200">';
    for ($i=1; $i <= $rows; $i++) { 
      echo '<tr>';
        for ($a=1; $a <= $cols; $a++) { 
          echo '<td>'. $i * $a . '</td>';
        }
      echo '</tr>';
    }
    echo '</table>';

}
 function drawMenu($menu, $vertical = true) {
    $style = "";
    if (!$vertical) {
        $style = " style='display:inline; margin-right:15px;'";
      }  
    echo '<ul>';
      foreach ($menu as $value) {
     echo  "<li$style><a href= $value[href]> $value[link]</a></li>";
      }
    echo '</ul>';

    }