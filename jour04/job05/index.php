<form method="POST" action="../job05/index.php">
<label>Username</label>
<input type="text"  name="username">
<label>Password</label>
<input type="text"  name="password">
<input type="submit" value="Envoyer" >
</form>

	<?php
    $p1="C'est pas ma guerre";
    $p2="Votre pire cauchemar";

    if ($_POST==true) {
    if ($_POST["username"]=="John" && $_POST["password"]=="Rambo"){
        echo $p1;
    }
    else{ 
        echo $p2;
    }   
}
?>