<html>
    <head>
        <meta charset="utf-8">
    </head>
<table border="1">
<?php
$db=mysqli_connect('localhost','root',"",'jour08');
$query=mysqli_query($db,'SELECT nom, capacite from salles order by id');
$resultassoc=mysqli_fetch_assoc($query);
$resultall=mysqli_fetch_all($query);
foreach($resultassoc as $key=>$values){
    echo "<th>$key</th>";
}
    echo "<tr>";
foreach($resultassoc as $key=>$values){
    echo "<td>$values</td>";
}
    echo "</tr>";

foreach($resultall as $key=>$values){
        echo "<tr>";
    foreach ($values as $key=>$values) {
        echo "<td>$values</td>";
    }
        echo "</tr>";
    }
?>
</table>
</html>