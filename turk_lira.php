<?php

/*
	@date		: 10/11/2019
	@package	: NumberToTurkishLira
	@author 	: Ferdi Tarakci
	@website	: https://www.ferditarakci.com
	@contact	: bilgi@ferditarakci.com
*/

function NumberToTurkishLira($number = 0) {
	$negative = "";
	if ($number < 0) $negative = "Eksi ";

	$birler = array("", "Bir", "İki", "Üç", "Dört", "Beş", "Altı", "Yedi", "Sekiz", "Dokuz");
	$onlar  = array("", "On", "Yirmi", "Otuz", "Kırk", "Elli", "Altmış", "Yetmiş", "Seksen", "Doksan");
	$yuzler = array("", "Yüz", "İki Yüz", "Üç Yüz", "Dört Yüz", "Beş Yüz", "Altı Yüz", "Yedi Yüz", "Sekiz Yüz", "Dokuz Yüz");
	$katlar = array("Lira", "Bin", "Milyon", "Milyar", "Trilyon", "Katrilyon");

	$number = (string)number_format(abs($number), 2, ",", ".");

	$number = explode(",", $number);
	$arr = explode(".", $number[0]);
	$number[0] = (int)str_replace(".", "", $number[0]);
	$total = count($arr) - 1;

	$strTL = "";
	for ($i = 0; $i <= $total; $i++) {
		$strTL .= $yuzler[($arr[$i] / 100) % 10] . " ";

		$strTL .= $onlar[($arr[$i] / 10) % 10] . " ";

		if (!($number[0] >= 1000 AND $number[0] < 2000) OR $arr[$i] > 1)
			$strTL .= $birler[$arr[$i] % 10] . " ";

		if (($number[0] >= 1000 AND $number[0] < 2000) OR !($arr[$i] == 0)) {
			$strTL .= $katlar[$total - $i] . " ";
		}
	}

	$strTL = trim($strTL);

	if ($number[1] > 0) {
		if (strlen($number[1]) == 1) $number[1] = $number[1] . "0";
		if ($strTL != "") $strTL .= ", ";
		$strTL .= $onlar[($number[1] / 10) % 10] . " ";
		$strTL .= $birler[$number[1] % 10] . " ";
		$strTL = $negative . $strTL . "Kuruş";
	}

	return trim($strTL);
}



// ####################################################




$num = 1000;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 11111111111.11;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = -13.11;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = -9999999999.99;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 11111111111.11;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 500;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 444444444444.44;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 9.92;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 0.9;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 12.12;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 59421.45;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 1985;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 40001.32;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 9000001;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 9458761;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 2147483647.99;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 2250458761.455;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 7343457483664.82;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 650011257345.45;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";

$num = 95001125453345.80;
echo number_format($num, 2, ",", ".");
echo "<br>";
echo NumberToTurkishLira($num);
echo "<br><br>";



