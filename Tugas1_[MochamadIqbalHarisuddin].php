<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initiale-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <form action="" method="POST">
        <label for="plat">Nomor Polisi :</label>
        <input type="text" name="plat" id="plat">
        <label for="submit"></label><br>
        <input type="submit" name="submit" id="submit" value="cek">
    </form>
    <?php
    $tanggal= date('d');
    echo "Tanggal hari ini : $tanggal";

    if(isset($_POST['submit'])){
        $plat=$_POST['plat'];
        $no = filter_var($plat, FILTER_SANITIZE_NUMBER_INT);
        $platgenap = ($no%2 == 0);
        $tanggalgenap = ($tanggal%2 == 0);
        
            if($platgenap== $tanggalgenap){
                echo "<br> [ Hasil : kendaraan $plat diizinkan lewat ] <br>"; 
            }
            else{ 
                echo "<br> [ Hasil : kendaraan $plat dilakukan penilangan ] <br>";
            }
    }
    ?>
</body>
</html>