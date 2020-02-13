


<html>

<?php

/* QUESTÃO 8º soma de valores pela URL
	
$peg = $_GET["peg"];
$soma = 0;
$cont = 0;


for($cont=0 ;$cont <= $peg; $cont ++) {
	$soma += $cont;
	
}

echo "O Total da soma: ".$soma;




/* 9º QUESTÃO

while($pare<>37){
	
	$pare= mt_rand(0,50);
	echo "$pare </br>";

}

*/




/* 10º QUESTÃO

for($soma=0; $soma<=1000; ){
	
	$x= mt_rand(0,100);
	$soma= $soma+$x;
	echo "$soma </br>";
	
}

*/



/* 11º QUESTÃO 
echo "<table border=1>";
for($linha = 1; $linha <= 10; $linha++){
	echo "<tr>";
	for($coluna = 1; $coluna <= 5; $coluna++){
		echo "<td>linha ".$linha." - coluna ".$coluna."</td>";
	}
	echo "</tr>";
}
echo "</table>";

*/



/* 12º QUESTÃO multiplos de 3

for($num=1; $num<=100; $num++ ){
	
	if($num%3==0){
		echo "o numero $num é multiplo de 3<br>"; 
	}

}
*/



/* 13º QUESTÃO soma multiplo de 7

$soma=0;

for($num=1; $num<=10000; $num++){
	
	if($num%7==0){
		$soma= $soma+$num;
		
	}

}

echo " a soma de todos os multiplos de 7, de 0 até 10000, será: $soma";

*/



/* 14º QUESTÃO ordem descrecente



for($num=500; $num>=10; $num--){
	
	echo " $num <br>";

}
*/


/* 15º QUESTÃO linhas e colunas passadas pela url

echo "<table border=1>";
for($lin = 1; $linha <= $_GET["linhas"]; $lin++){
	
	echo "<tr>";
	
	for($col = 1; $col <= $_GET["colunas"]; $col++){
		echo "<td>linha ".$lin." - coluna ".$col."</td>";
	}
	echo "</tr>";
}
echo "</table>";
*/




/* 16º QUESTÃO tabela de multiplicação

$multiplic = $_GET["tabela"];

for( $x=0 ;$x<=10; $x++){
	
	$y= $multiplic*$x;
	echo "$y <br>";
	
}

*/





?>




</html>