<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>

<body>
    <form action="" method="POST">
        <label for="bilangan">Masukkan Jumlah Tingkat :</label>
        <input type="text" name="bilangan" id="bilangan">
        <label for="submit"></label>
        <input type="submit" name="submit" id="submit" value="Kirim">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $bilangan =$_POST['bilangan'];

        for ($i=$bilangan;  $i>=1; $i--) {
            for($j=1; $j<=$i; $j++){
                echo "($i,$j)";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>