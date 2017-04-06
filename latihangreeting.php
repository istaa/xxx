<html>
<head>
	<title>Istaqo Mahmudah Harits</title>
</head>
<body>
<?php

echo "Fungsi Greeting";
echo "<br>";
echo "Istaqo Mahmudah Harits";
echo "<br>";
echo "MI 2C";
echo "<br>";
echo "1431143021";
echo "<br>";
echo "===================";
echo "<br>";
date_default_timezone_set("Asia/Jakarta");
echo "<br>";
$a = date("D/M/j \ H:i:s");
	echo $a;
echo "<br>";

$gret = date("G");

echo "<br>";
echo "===================";
echo "<br>";

if ($gret>=0 && $gret<10)
	{
		echo "Selamat Pagi ! :)";
	}
elseif ($gret>=10 && $gret<12)
	{
		echo "Selamat Siang ! :) ";
	}
elseif ($gret>=12 && $gret<18)
	{
		echo "Selamat Sore ! :) ";
	}
else
	{
		echo "Selamat Malam ! :)";
	}

?>
</body>
</html>