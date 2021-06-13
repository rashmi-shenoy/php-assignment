<?php
    $input = 121;
    $sum=0;
    $rem=0;
    $n=$input;
    echo '</br>'.'Input number:'.$input;
    $rev =strrev($input);
    while($n!=0)
    {
        $rem=$n%10;
        $sum=$sum+$rem;
$n=$n/10;
    }
    echo '</br>'.'Reverse is:'.$rev;

    if($input== $rev){
        echo '</br>'.$input.' Is a palindrome' ;
        echo  '</br> sum is'.$sum ;
    }else{
        echo '</br>'.$input.' Is not a palindrome';
    }
    ?>
