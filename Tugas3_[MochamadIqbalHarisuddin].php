<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initiale-scale=1.0">
    <title>Tugas 3</title>
</head>

<body>
    <form action="" method="POST">
        <label for="plat">Masukkan bilangan ke-1 :</label>
        <input type="text" name="bil1" id="bil1"><br><br>

        <label for="plat">Masukkan bilangan ke-2 :</label>
        <input type="text" name="bil2" id="bil2">
        <label for="submit"></label>

        <input type="submit" name="submit" id="submit" value="kirim">
        <hr>
        <hr>
    </form>
    <?php


     if(isset($_POST['submit'])){
        $bil1=$_POST['bil1'];
        $bil2=$_POST['bil2'];

        echo "Bilangan Masukan ke-1 : $bil1 <br>";
        echo "Bilangan Masukan ke-2 : $bil2 <br>";

        //Fungsi untuk penjumlahan bilangan1 dan bilangan2
        function penjumlahan($bil1,$bil2){
            $jumlah=$bil1 + $bil2;
            return $jumlah;
        }
        //menampilkan hasil penjumlahan
        echo "<br>Hasil penjumlahan adalah ".penjumlahan($bil1,$bil2)."<br>";

        //Fungsi untuk pengurangan bilangan1 dan bilangan2
        function pengurangan($bil1,$bil2){
            $kurang=$bil1 - $bil2;
            return $kurang;
        }
        //menampilkan hasil pengurangan
        echo "Hasil pengurangan adalah ".pengurangan($bil1,$bil2)."<br>";

        //Fungsi untuk perkalian bilangan1 dan bilangan2
        function perkalian($bil1,$bil2){
            $kali=$bil1 * $bil2;
            return $kali;
        }
        //menampilkan hasil perkalian
        echo "Hasil perkalian adalah ".perkalian($bil1,$bil2)."<br>";

        //Fungsi untuk pembagian bilangan1 dan bilangan2
        function pembagian($bil1,$bil2){
            $bagi=$bil1 / $bil2;
            return $bagi;
        }
        //menampilkan hasil pembagian
        echo "Hasil pembagian adalah ".pembagian($bil1,$bil2)."<br>";

        //Fungsi untuk hasil sisa bagi bilangan1 dan bilangan2
        function Modulo($bil1,$bil2){
            $SisaBagi=$bil1 % $bil2;
            return $SisaBagi;
        }
        //menampilkan hasil modulo
        echo "Hasil Modulo adalah ".Modulo($bil1,$bil2)."<br>";

        //Fungsi untuk perpangkatan bilangan1 dan bilangan2
        function perpangkatan($bil1,$bil2){
            $pangkat=$bil1 ** $bil2;
            return $pangkat;
        }
        //menampilkan hasil perpangkatan
        echo "Hasil perpangkatan adalah ".perpangkatan($bil1,$bil2)."<br>";
     }
    ?>
</body>
</html>