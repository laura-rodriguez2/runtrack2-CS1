<table border=1>  
<?php
$str = "bdgvzptkfs aeziouy";
    $index=0;
$dic = [
    "key" => ('a','z'),
    "key2" => "a, e, i, o, u, y"
];
?>
<thead>
    <td>Voyelles</td>
    <td>Consonnes</td>
</thead>
<tbody>
    <td><?php 
    while(isset ($str[$index])){
    if($str[$index]==$dic['key']){
        echo ($str[$index]); 
    }
    else{
        echo '';
    }
$index++; 
}
?></td>
</tbody>
</table>