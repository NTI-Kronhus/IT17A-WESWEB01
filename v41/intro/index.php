<?php
$namn = "Joakim";
if($namn == "Joakim"){
	echo "Hej Joakim!";
}

$siffra = 5;

if($siffra >= 3){
	echo "Siffran är större än eller lika med 3";
}
else{
	echo "Siffran är mindre än 3";
}

$boolean1 = true;
$boolean2 = false;

echo "<br>";
for($i = 1 ; $i <= 60 ; $i++ ){
?>
	<div style="margin:5px;float:left;text-align:center;width:100px;height:200px; border:solid black 2px;border-radius:5px;">
	<img src="http://www.pngmart.com/files/6/Hat-PNG-Transparent-Image.png" style="width:100px;height:100px;"/>
	<h1> Hatt </h1>
	<p> 500:- </p></div>
<?php	
}
?>