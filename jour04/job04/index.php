<form method="POST" action="../job04/index.php">

<label>Nom</label>
<input type="text"  name="l_name">

<label>Prenom</label>
<input type="text"  name="f_name">

<input type="submit" value="Envoyer" >
</form>

<table border=1>
	<thead>
		<th>Arguments</th>
		<th>Valeurs</th>
	</thead>
	<?php

	foreach($_POST as $arg => $value) 
{
	echo
	"<tr>
		<td>".$arg."</td>
		<td>".$value."</td>
	</tr>";

}
?>
