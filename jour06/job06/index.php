<html>
    <head>
        <link rel="stylesheet" href="../job06/style1.css">
        <link rel="stylesheet" href="../job06/style2.css">
        <link rel="stylesheet" href="../job06/style3.css">
    </head>
<form action="" method="get" id="form">
<select id="styles">
    <option value="style1">Style 1</option>
    <option value="style2">Style 2</option>
    <option value="style3">Style 3</option>
</select>
<?php
switch ($_GET = $value[""]) {
    case ($value = "style1"):
        echo ("../job06/style1.css");
        break;
    case ($value = "style2"):
        echo ("../job06/style2.css");
        break;
    case ($value = "style3"):
        echo ("../job06/style3.css");
        break;
    default : null;
}
?>
</form>
</html>  