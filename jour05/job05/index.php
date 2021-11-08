<?php
function occurrences($char, $str){
$a = 0;
    for ($i = 0; isset ($str[$i]); $i++){
    if ($char == $str [$i] ){
    $a++;
}
}
return $a;
}
echo occurrences("a","oulala")
?>