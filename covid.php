<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='1'>";

  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }
for($i=0;$i<100;$i++){
          echo "<tr>";
          echo "<td>คอลัมน์1</td>";
          echo "<td>คอลัมน์2</td>";
          echo "<td>คอลัมน์3</td>";
          echo "<td>คอลัมน์4</td>";
          echo "<td>คอลัมน์5</td>";
          echo "<td>คอลัมน์6</td>";
          
          echo "</tr>";
  echo "</table>";
?>
