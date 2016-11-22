<html>
<head>
<title>Studi Kasus 4_1</title>
</head>
<body>
	<?php
	$x = 70;
	if ($x>=0 && $x<=59){
		echo 'Cukup';
	}
	elseif ($x>59 && $x<85){
		echo 'Baik';
	}
	elseif ($x>=85 && $x<=100){
		echo 'Baik Sekali';
	}
	else{
		echo 'Input Salah';
	}
	?>
</body>
</html>