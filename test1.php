<?php

class test1
{
    static function last_word($sentence) {
        $sentence = trim($sentence);
        if(strlen($sentence) == 0)
            return 0;
        $array = explode(' ', $sentence);
        $str = $array[count($array) -1];
        return strlen($str);
    }
    
    static function sql_date_format($dateStr) {
        $unixTime = strtotime($dateStr);
        return date("Y-m-d H:i:s", $unixTime);
    }

    static function extract_string($str) {
        $str = strpbrk($str, '[');
        if($str === FALSE)
            return "";
        $arr = explode(']', $str, 1);
        if(count($arr) == 0)
            return "";
        return $arr[0];
    }
}
function println($str = "") {
    echo $str . '<br />';
}
println(test1::last_word("This is sparta!"));
println(test1::last_word("sparta!"));
println(test1::last_word("This"));
println(test1::last_word(""));
println();

println(test1::sql_date_format("1234"));
println(test1::sql_date_format("now"));
println(test1::sql_date_format("06/13/2019 3:36 AM"));
println();

println(test1::extract_string("dsfsdf [ds]"));
println(test1::extract_string("dsfsdf"));
println(test1::extract_string("dsfsdf []"));
println(test1::extract_string("[]"));
println(test1::extract_string("[e33]"));



