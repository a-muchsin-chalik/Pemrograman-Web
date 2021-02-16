<?php 
	$family = array('Nana Budiono', 'Alucard Wicaksono', 'Zilong Hanafi', 'Goerge Riandi', 'Brams Tornado');

	
	for($x=0;$x<count($family);$x++){
		
		//Menghitung Jumlah Kata pada php
		$panjang = str_word_count($family[$x]);

		//Menghitung Jumlah Karakter pada php
		$karakter = strlen($family[$x]);

		//Menampilkan kebalikan string pada php
		$kebalikan = strrev($family[$x]);

		//Menghitung Jumlah vokal dan konsonan pada string php
		$converArray = str_split($family[$x]);
		$vokal = 0;
		$konsonan = 0;
		$spasi = 0;

		foreach ($converArray as $row) {
		 if(preg_match('/^[aiueo]/', $row[0]))
		  {
		  	$vokal++;
		  }
		 else if(preg_match('/^[ ]/', $row[0]))
		  {
		  	$spasi++;
		  } 
		  else
		  {
		  	$konsonan++;
		 }
		}

		
		echo $family[$x]."<br>";
		echo "Panjang kata dari nama ".$family[$x]. " adalah ". $panjang."<br>";
		echo "Panjang karakter dari nama ". $family[$x]. " adalah ". $karakter."<br>";
		echo "kebalikan dari nama ". $family[$x]. " adalah ". $kebalikan."<br>";
		echo "Jumlah huruf vokal pada nama ". $family[$x]. " adalah ". $vokal."<br>";
		echo "Jumlah huruf vokal pada nama ". $family[$x]. " adalah ". $konsonan."<br>";

		echo "<br>";
	}

?>