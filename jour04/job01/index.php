<?php 
var_dump($_GET);
foreach($_GET as $value){
}
?>

<form action="../job01/index.php" method="get">
<label for="f_name">First name : </label>
<input type="text" id="f_name" name="f_name"> <br> <br>
<label for="f_name">Last name : </label>
<input type="text" id="l_name" name="l_name"> <br> <br>
<input type="submit" value="submit">
</form>
