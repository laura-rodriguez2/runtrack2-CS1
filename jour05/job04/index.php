<?php 
echo(calcule(2,"+",3));

function calcule($a, $operation, $b){
	if ($operation == "+") 
	{
		$resultats = $a + $b;
        
	}
	else if ($operation == "-") 
	{
		$resultats = $a - $b;
	}
	else if ($operation== "/") 
	{
		$resultats = $a / $b;   
	}
	else if ($operation== "*") 
	{
		$resultats = $a * $b;   
	}
    else if ($operation=="%"){
        $resultats = $a % $b;
    }
	return($resultats);
}



// echo (calcule());
// function calcule($a, $operation, $b){
// $a= 2;
// $operation= '+';
// $b= 3;
// if ($a+$operation+$b==5) {
//     return(5);
// }
// }

// echo (calcule());
// function calcule(){
//     $a= 2;
//     $operation= '+';
//     $b= 3;
//     $resultat= $a + $operation + $b;
//     if($resultat==5)
//         return(5);
//     else
//         return(false);
// }
?>