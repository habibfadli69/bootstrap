<!DOCTYPE html>
<html>
<head>
	<title> Belajar PHP </title>
</head>
<body>
	Halo Semuanya !
	<?php // Deklarasi file php
		// Video 1
		echo "Hello World"; // echo digunakan untuk menampilkan kalimat/kata

		// Video 2
		// sintak html bisa dimasukkan ke dalam sintak php dan sebaliknya
		echo "<h1> Selamat belajar PHP </h1>"; // h1 digunakan untuk membuat kalimat/kata. tag ini memiliki sifat display block
		print "<h1> Selamat belajar PHP </h1>"; // print digunakan untuk menampilkan kalimat/kata
		echo "Hallo <br>"; // br (break) digunakan untuk menambahkan baris baru
		echo 'Member'."<br> <br>"; // titik (.) digunakan untuk penghubung antar fungsi

		// Video 3
		//	Komentar pada 1 baris
		/* 
			Komentar pada beberapa baris
		*/
		$nama = "Habib Fadli Akbar"; // Value memiliki tipe string yang disimpan dalam variable nama 
		$nama2 = 'PHP'; // Value memiliki tipe karakter yang disimpan dalam variabel nama2
		$_123 = "Ini adalah teks <br>"; // angka tidak boleh di depan dalam penamaan variabel

		echo "<h1> My name is $nama </h1>";
		echo "<h1> Saya sedang belajar $nama2 </h1>";
		echo "Hallo ".$nama."<br>";
		echo $_123;
		echo "$_123 <br> <br>";

		// Video 4
		$nama3 = "Habib Fadli Akbar"; // Value memakai double quote ("")
		$nama4 = 'HFA'; // Value memakai single quote ('')

		echo $nama3."<br>";
		echo $nama4."<br>";
		echo $nama3." adalah ".$nama4."<br>";
		echo "Selamat datang \$nama3"; //  \$nama3 digunakan untuk menampilkan nama varibel nama3 bukan nilainya
		echo "<br> <br>";

		// Video 5
		$angka = 1000; // bilangan integer
		$angka2 = 500;
		$angka3 = '1000'; // bilangan sebaiknya tak memakai quote ('')
		$angka4 = '500';
		$angka5 = 50.75; // bilangan float
		$angka6 = 50.600; // angka 0 tak akan ditampilkan

		echo "Angkanya adalah ".$angka."<br>";
		echo $angka+$angka2."<br>"; 
		echo $angka3." ".$angka4."<br>";
		echo $angka2+$angka3."<br>";
		echo $angka3+$angka5."<br>";
		echo $angka+$angka5."<br>";
		echo $angka+$angka6."<br> <br>";

		// Video 6
		$angka7 = 1000;
		$angka8 = 100;
		$angka9 = 10;

		echo $angka7*$angka8."<br>";
		echo $angka7/$angka9."<br>";
		echo $angka8+$angka7."<br>";
		echo $angka8-$angka9."<br>";
		echo $angka9%$angka7."<br>";
		echo $angka9%$angka8."<br>";
		echo $angka7+$angka8*$angka9."<br>"; // Dalam matematika dasar, operasi perkalian didahulukan

		$angka7--; // $angka7 = $angka7 - 1
		echo $angka7."<br>";
		$angka7++; // $angka7 = $angka7 + 1
		echo $angka7."<br>";
		$test = $angka7+$angka8+100;
		echo $test."<br>";
		$angka7 = $angka7+$angka8;
		echo $angka7."<br>";
		$angka7 += $angka8; // $angka7 = $angka7 + $angka8
		echo $angka7."<br>";
		$angka7 *= $angka8; // $angka7 = $angka7 * $angka8
		echo $angka7."<br> <br>";

		// Video 7
		$angka10 = 100;
		$angka11 = 10;
		$angka12 = 5.5;
		$angka13 = 5.4;

		echo round($angka12)."<br>"; // round digunakan untuk membulatkan angka
		echo round($angka13)."<br>";
		echo " Angka hari ini adalah ".rand(5,10)."<br>"; // rand(min,maks) digunakan untuk menampilkan bilangan acak yang berposisi min<=x<=maks
		echo " Angka hari ini adalah ".max(5,10,6,9,7,8)."<br>"; // maks(parameter lebih dari 1) digunakan untuk menampilkan bilangan maks
		echo " Angka hari ini adalah ".max($angka10,$angka12,$angka11,$angka13)."<br>";
		echo " Angka hari ini adalah ".min(5,10,6,9,7,8)."<br>"; // min(parameter lebih dari 1) digunakan untuk menampilkan bilangan min
		echo " Angka hari ini adalah ".min($angka10,$angka12,$angka11,$angka13)."<br> <br>";

		// Video 8
		$nama5 = "Hai Semuanya";
		$nama6 = "Hai semuanya yang ada disini";
		$nama7 = 'Hai';

		echo strlen($nama5)."<br>"; // strlen digunakan untuk menghitung banyaknya huruf + spasi
		echo strlen("Hai Semuanya")."<br>";
		echo str_word_count($nama5)."<br>"; // str_word_count digunakan untuk menghitung jumlah kata
		echo str_replace('Hai', 'Hallo', $nama6)."<br>";
		// str_replace(kata yang ingin diganti, kata diganti dengan kata apa?, kalimat lengkap) digunakan untuk mengganti kata
		echo str_repeat($nama5."<br>", 3); // str_repeat(kata/kalimat,kata ingin diulang berapa kali?) digunakan untuk perulangan kalimat/kata
		echo str_repeat('Hai'."<br>", 3);
		echo str_repeat(str_replace('Hai', 'Hallo', $nama6)."<br>",3); // Menggabungkan 2 fungsi sekaligus
		echo "<br>";

		// Video 9
		$kotak = array('Anjing', 'Kucing', 'Harimau');
		$kotak2 = array(1, 2, 3);
		$kotak3 = array("Anjing Liar", "Kucing Ganas", "Harimau Buas");
		$nama8 = ['Hilman','Andy','Tika'];

		echo $kotak."<br>";
		print $kotak."<br>";
		echo $kotak2."<br>";
		echo $kotak3."<br>";
		print_r($kotak);
		echo "<br>";
		print_r($kotak2);
		echo "<br>";
		print_r($kotak3);
		echo "<br>";
		echo $kotak[0]."<br>";
		echo $nama8[2]."<br>";
		echo $kotak3[0]."<br>";

	?>
</body>
</html>

