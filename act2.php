<!DOCTYPE html>
<html>
<head>
	<title>ITMM103Activity02</title>
</head>
<body>
<h1>Activity #2</h1>
<?php
echo "Pattern 1";
echo "<br>";
for($i=1;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		echo"*";
	}
	echo "<br>";
}
echo "Pattern 2";
echo "<br>";
for($i=1;$i<=5;$i++){
	for($j=0;$j<=5-$i;$j++){
		echo"*";
	}
	echo "<br>";
}
echo "Pattern 3";
echo "<br>";
echo'<p align="right">';
for($i=1;$i<=5;$i++){
	echo str_repeat('*', $i);
	echo "<br>";
}
echo "Pattern 4";
echo "<br>";
for($i=1;$i<=5;$i++){
	for($j=0;$j<=5-$i;$j++){
		echo"*";
	}
	echo "<br>";
}
?>
</body>
</html>