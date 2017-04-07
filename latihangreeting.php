<html>
<head>
	<title>Istaqo Mahmudah Harits</title>
</head>
<body>
<?php
echo "Fungsi Greeting<br>Istaqo Mahmudah Harits<br>MI 2C<br>1431143021<br>===================<br>";
date_default_timezone_set("Asia/Jakarta");
$a = date("D/M/j \ H:i:s");
echo $a;
$gret = date("G");
echo "<br>===================<br>";
if ($gret>=0 && $gret<10){
		echo "Selamat Pagi ! :)";
	}
elseif ($gret>=10 && $gret<12){
		echo "Selamat Siang ! :) ";
	}
elseif ($gret>=12 && $gret<18){
		echo "Selamat Sore ! :) ";
	}
else{
		echo "Selamat Malam ! :)";
	}
?>
</body>
</html>
