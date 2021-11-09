<?php
    session_start();
        if (isset($_POST['reset'])){
            $_SESSION['prenom']="";
        }
        if (isset($_POST['prenom'])){
            $_SESSION['prenom'] = $_SESSION['prenom']. 
            "<br/>". $_POST['prenom']; 
        } 
        echo $_SESSION['prenom'];
?>
    <form action="index.php" method="post">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom">
        <label for="valider"></label>
        <input type="submit" name="envoyer">
        <input type="submit" name="reset" value="reset">
    </form>