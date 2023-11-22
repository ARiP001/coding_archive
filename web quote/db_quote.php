<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost"; //hostname
        $username = "root"; //username untuk login ke mysql
        $password = ""; //password untuk login ke mysql
        $database = "quote"; //nama database
        $konek=new mysqli($hostname,$username,$password, $database);
        if ($konek->connect_error) 
        {
        // jika terjadi error, matikan proses dengan die() atau exit();
        die('Maaf koneksi gagal: '. $connect->connect_error);
        } 
    ?>
    
</body>
</html>