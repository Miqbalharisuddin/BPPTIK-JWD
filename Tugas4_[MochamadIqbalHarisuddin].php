

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initiale-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="kalkulator">
    <form action="Tugas4_[MochamadIqbalHarisuddin].php" method="POST">
        <h2 class="judul" >Kalkuklator</h2>
    
        <label for="plat"></label>
        <input type="text" name="bil1" placeholder="Masukkan Angka" id="bil1" class="bil"><br><br>

        <label for="plat"></label>
        <input type="text" name="bil2" placeholder="Masukkan Angka" id="bil2" class="bil">
        <label for="submit"></label>

        <input type="submit" name="Hitung" id="Hitung" value="Hitung" class="tombol">
    </form>
    <?php

     if(isset($_POST['Hitung'])){ //Cek apakah ada operasi submit dari user
        $bil1=$_POST['bil1'];//mengambil nilai dari bilangan 1
        $bil2=$_POST['bil2'];//mengambil nilai dari bilangan 2


        function penjumlahan($bil1,$bil2){//fungsi penjumlahan
            $jumlah=$bil1 + $bil2;//operasi dengan operator aritmatika
            return $jumlah;//mengembalikan nilai ke var. jumlah
        }

        function pengurangan($bil1,$bil2){//fungsi pengurangan
            $kurang=$bil1 - $bil2;//operasi dengan operator aritmatika
            return $kurang;//mengembalikan nilai ke var. kurang
        }
 

        function perkalian($bil1,$bil2){//fungsi perkalian
            $kali=$bil1 * $bil2;//operasi dengan operator aritmatika
            return $kali;//mengembalikan nilai ke var. kali
        }

        function pembagian($bil1,$bil2){//fungsi pembagian
            $bagi=$bil1 / $bil2;//operasi dengan operator aritmatika
            return $bagi;//mengembalikan nilai ke var. bagi
        }


        function Modulo($bil1,$bil2){//fungsi modulo
            $SisaBagi=$bil1 % $bil2;//operasi dengan operator aritmatika
            return $SisaBagi;//mengembalikan nilai ke var. SisaBagi
        }

        function perpangkatan($bil1,$bil2){//fungsi perpangkatan
            $pangkat=$bil1 ** $bil2;//operasi dengan operator aritmatika
            return $pangkat;//mengembalikan nilai ke var. pangkat
        }
        echo "<div class= 'hasil'>";
        echo "Bilangan Masukan ke-1 : $bil1 <br>"; //mencetak inputan bilangan 1
        echo "Bilangan Masukan ke-2 : $bil2 <br>"; //mencetak inputan bilangan 1
        echo "<hr>";
        echo "<br>Hasil penjumlahan adalah ".penjumlahan($bil1,$bil2)."<br>"; //mencetak hasil penjumlahan dari fungsinya
        echo "Hasil pengurangan adalah ".pengurangan($bil1,$bil2)."<br>"; //mencetak hasil pengurangan dari fungsinya
        echo "Hasil perkalian adalah ".perkalian($bil1,$bil2)."<br>"; //mencetak hasil perkalian dari fungsinya
        echo "Hasil pembagian adalah ".pembagian($bil1,$bil2)."<br>"; //mencetak hasil pembagian dari fungsinya
        echo "Hasil Modulo adalah ".Modulo($bil1,$bil2)."<br>"; //mencetak hasil modulo dari fungsinya
        echo "Hasil perpangkatan adalah ".perpangkatan($bil1,$bil2)."<br>";//mencetak hasil perpangakatan dari fungsinya
        echo "</div>";
     }
    ?>
</body>
</html>