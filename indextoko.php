<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Tugas Praktikum Minggu-6</title>
</head>
<body>
    
    <marquee scrollamount="0" style="background-color: #75a4f0">
        <h1>TOKO BUAH - INSTITUT TEKNOLOGI SUMATERA</h1>
    </marquee>

    <br><br><br><br><br><br>
    
        <center>

        <table>
            <tr>
                <td rowspan="4"></td>
                <td><b>Nomor</td> 
                <td><b>Nama Buah</td>
                <td><b>Harga 1 Kilo</td>
                <td rowspan="4"></td>
            </tr>

            <tr>
                <td><b>1</td>
                <td><b>Mangga</td>
                <td><b>Rp 15.000,00 -</td>
            </tr>
            <tr>
                <td><b>2</td>
                <td><b>Jambu</td>
                <td><b>Rp 13.000,00 -</td>
            </tr>
            <tr>
                <td><b>3</td>
                <td><b>Salak</td>
                <td><b>Rp 10.000,00 -</td>
            </tr>
        </table>
    </center>
    <br><br>
    <center>
    <form method="POST" onsubmit="totalBelanja()">
    
            <label for="mangga" class=""><b>MANGGA</label>
            <input type="number" name="mangga" id="mangga" class="form-control" required>
            <br>
            
            <label for="jambu" class="">JAMBU</label>
            <input type="number" name="jambu" id="jambu"  class="form-control" required>
            <br>
            
            <label for="salak" class="">SALAK</label>
            <input type="number" name="salak" id="salak" class="form-control" required>
            <br><br><br>
            
            <input type="submit" name="submit" value="Click Untuk Melihat Total Belanja">
    
    </form>  
    </center>
    

    <div id="hasil"></div>
    <script type="text/javascript">
        <?php

            class mangga{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 15000;
                }

                public function banyakMangga()
                {
                    return $this->banyak;
                }

                public function biayaMangga()
                {
                    return $this->biaya;
                }
            }

            class jambu{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 13000;
                }

                public function banyakJambu()
                {
                    return $this->banyak;
                }

                public function biayaJambu()
                {
                    return $this->biaya;
                }
            }

            class salak{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 10000;
                }

                public function banyakSalak()
                {
                    return $this->banyak;
                }

                public function biayaSalak()
                {
                    return $this->biaya;
                }
            }

        ?>

        function totalBelanja(){
            event.preventDefault()

            var jumlahMangga = document.getElementById('mangga').value;
            var jumlahJambu  = document.getElementById('jambu').value;
            var jumlahSalak  = document.getElementById('salak').value;

            var biayaMangga = 15000;
            var biayaJambu  = 13000;
            var biayaSalak  = 10000;

            var total = jumlahMangga*biayaMangga + jumlahJambu*biayaJambu + jumlahSalak*biayaSalak;

            output = document.getElementById('hasil');
            output.innerHTML = "TOTAL BELANJA: Rp. "+total;
        }
</script>
</body>
</html>