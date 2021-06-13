<body>
    <form method="post">
    <input type="number" name="number" placeholder="enter  a num">
    <input type="submit" name="submit">
    </form>
</body>

<?php
if($_POST)
{
    $number =$_POST['number'];
    $a= $number;
    $sum= 0;
    while ($a != 0)
    {
        $rem =$a % 10;
        $sum = $sum + ($rem *$rem*$rem);
        $a = $a/10;
    }
    if($number== $sum)
    {
        echo "Yes $number an armstrong number";
    }else{
        echo "$number is not an armstrong number";
    }
}
?>

