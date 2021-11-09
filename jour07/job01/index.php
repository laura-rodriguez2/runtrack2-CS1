<?php
session_start();
if(isset($_SESSION['nbvisite'])){
    $_SESSION['nbvisite']++;

}
if(isset($_POST['reset'])){
    $_SESSION['nbvisite']=0;
}
echo($_SESSION['nbvisite']);

?>

<form method="post" action="index.php">
    <input type="submit" name="reset" class="button" value="reset" >
</form>