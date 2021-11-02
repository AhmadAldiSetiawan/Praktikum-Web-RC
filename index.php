<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css.css.css">
    <title>Tugas Praktikum Minggu-4</title>
</head>
<body>
    <div class="head">
        <table>
            <tr>
                <th> 
                    <img class="logo" src="Logo_ITERA.png" width="100">
                </th>
                <th>
                    <h1 class="text">INSTITUT TEKNOLOGI SUMATERA</h1>
                    <h1> FORM DATA MAHASISWA </h1>
                </th>
            </tr>
        </table>
    </div>
    <nav>
        <ul>
            <li><a href="javascript:void()" onclick="create()">Create Data</a> </li>
            <li><a href="javascript:void()" onclick="showData()" >Tampil Data</a> </li>
        </ul>
    </nav>
    <div id="content"></div>
    
    <script>
        function create(){
            $.get("form.php", function(data) {
                $("#content").html(data);
            });
        }
        function showData(){
            $.get("data.php", function(data) {
                $("#content").html(data);
            });
        }
    </script>
</body>
</html>