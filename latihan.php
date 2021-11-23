<?php
if(isset($_POST['proses'])){
    $bil1 = @$_POST['bil1'];
    $bil2 = @$_POST['bil2'];
    $operator = $_POST['operasi'];
    if($operator == "tambah"){
        $hasil = $bil1 + $bil2;
    }
    elseif($operator == "kurang"){
        $hasil = $bil1 - $bil2;
    }
    elseif($operator == "kali"){
        $hasil = $bil1 * $bil2;
    }
    elseif($operator == "bagi"){
        $hasil = $bil1 / $bil2;
    }
    elseif($operator == "modulus"){
        $hasil = $bil1 % $bil2;
    }
    elseif($operator == "pangkat"){
        $hasil = $bil1 ** $bil2;
    }
    else{
        
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <center>
        <table style="margin-top: 100px;">
            <tr>
                <td>Bilangan 1 : </td>
                <td><input type="text" name="bil1"></td>
            </tr>
            <tr>
                <td>Bilangan 2 : </td>
                <td><input type="text" name="bil2"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <select name="operasi" id="">
                    <option value="tambah" name="tambah">Pertambahan</option>
                    <option value="kurang" name="kurang">Pengurangan</option>
                    <option value="kali" name="kali">Perkalian</option>
                    <option value="bagi" name="bagi">Pembagian</option>
                    <option value="modulus" name="modulus">Modulus</option>
                    <option value="pangkat" name="pangkat">Perpangkatan</option>
                </select>
            </td>
            <tr>
                <td></td>
                <td><input type="submit" value="proses" name="proses"></td>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td>
            <?php
                echo $hasil;
            ?>
            </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>