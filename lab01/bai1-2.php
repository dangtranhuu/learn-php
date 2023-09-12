<?php
// Bài1: Toán tử
$x = (2 == 3); // F
$x = (2 != 3); //T
$x = (2 <> 3); //Al
$x = (2 === 3); //F
$x = (2 !== 3); //T
$x = (2 > 3); //F
$x = (2 < 3); //T
$x = (2 >= 3); //F
$x = (2 <= 3); //T


// Bài 2: Chuỗi

$s = "Hello World <br>";
echo $s;
$s = 'It\'s\n';	// It's
echo $s;
echo "\nHello<br>World";
echo "\u{00C2A9}";
echo "\u{C2A9}";


//Bài 3: Viết chương trình tính tổng 2 số a,b cho trước và xuất ra kết quả

$a = 5;
$b = 9;
$kq = $a + $b;
echo $a . "+" . $b . "=" . $kq;
