
<body> 
<center>
<h4>1. Reversing the string </h4>
<h4>2. finding the length of the string</h4>
<h4>3. Sub string operation</h4>
<h4>4. convert to uppercase</h4>
<h4>5. convert to lowercase</h4>
<h4>6. counting no of words</h4>


<form method="post">
Enter the string:<input type="text" name="string" value="" /> <br/> <br/>
Enter your Choice:<input type="text" name="option" value="" /> <br/> <br/>
<input type="submit" name="submit" value="submit" /> <br/> <br/>
</form>    

<?php
if (isset($_POST['submit'])){
    $a = $_POST['string'];
    $ch = $_POST['option'];
    switch($ch){
        case 1: 
        echo "reverse of string is: ".strrev($a);
        break;

        case 2: 
        echo "length of string is: ".strlen($a);
        break;

        case 3: 
        echo "substring is: ".substr($a,3);
        break;

        case 4: 
        echo "uppercase: ".strtoupper($a);
        break;

         case 5: 
        echo "lower case: ".strtolower($a);
        break;

         case 6: 
        echo "count: ".str_word_count($a);
        break;

        default : echo ("Invalid option");
    }
    return 0;
}
 ?>
 </center>
</body>
