<center>
<body>
<form method="post"><br><br>
	Enter the item Names : <input type="text" name="items" /><br><br>
	Enter the item price : <input type="text" name="prices" /><br><br>
	<input type="reset" value="Reset" />
	<input type="submit" name="submit" value="Submit" />
</form>
</body>

<?php
    if (isset($_POST['submit'])){
      
       $data = $_POST['items'];
       $array1 = explode(',',$data);
       $price = $_POST['prices'];
       $array2 = explode(',',$price);
       $final = array_combine($array1, $array2);
       echo   '<table border="1">';
       echo    "<tr><th>".'Item Name'.
               "</th><td>".'Item Price'."</th></tr>";
        foreach( $final as  $name => $value){
          echo "<tr><th>".htmlspecialchars($name).
               "</th><td>".htmlspecialchars($value)."</th></tr>";
        }
        echo '</table>';
    }
    $maxIndex = array_search(max($final), $final); 
    echo '<br> Coastliest item is :<strong>'.$maxIndex.'</strong><br>';
    $minIndex = array_search(min($final), $final); 
    echo 'Cheapest item is : <strong>'.$minIndex.'</strong><br>' ;
?>
</center>
