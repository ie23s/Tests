<?php

class test2
{
    function is_power($number,$base) {
        for($n = 1, $b = 0; $number > $b; $n++){
            $b = pow($base,$n);
            if($number == $b)
                return true;
        }
        return false;
    }
    
    function format_number($str){
        $charArray = str_split($str);
        $newStr = "";
        
        foreach($charArray as $char) {
            if(is_numeric($char) || $char == ',' || $char == '.')
                $newStr .= $char;
        }
        return $newStr;
    }
    function sum_digits($int) {
        $num = 0;
        while ($int > 0) {
            $num += $int % 10;
            $int /= 10;
        }
        return $num;
    }
    
}
function println($str = "") {
    echo $str . '<br />';
}

$test2 = new test2();
println($test2->is_power(16, 4) ? 'true' : 'false');
println($test2->is_power(12, 2) ? 'true' : 'false');
println();
println($test2->format_number("$4,000.15A"));
println($test2->format_number("AAAAAFD2S"));
println();
println($test2->sum_digits(16, 4));
println($test2->sum_digits(5555));

