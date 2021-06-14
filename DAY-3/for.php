<?php
echo "<table border=1px bgcolor='pink'>";
for($i=1; $i <= 5000;$i++){
    echo "<tr>";
    if($i%2==0){
        echo "<td bgcolor='skyblue'> $i </td>";
    }else{
        echo "<td bgcolor='yellow'> $i </td>";
    }
    
    echo "</tr>";
}
echo "</table>";
?>