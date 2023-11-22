<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>window.location.href = 'page_quote.php';</script>
</head>
<body>
<?php
    include "db_quote.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id=$_POST['id'];
        $kategori =$_POST['kategori'];
        $author =$_POST['author'];
        $tanggal =$_POST['tanggal'];
        $quote =$_POST['addquote'];
       
        // edit
        if(isset($_POST ['submit-btn2'])){
            $query=mysqli_query($konek,"UPDATE daftar_quote SET kategori='$kategori',author='$author',tanggal='$tanggal', 
            quote='$quote' where id='$id'") or die(mysqli_error($konek));
        }
        // input
        else if(isset($_POST ['submit-btn'])){
            $query=mysqli_query($konek,"INSERT INTO daftar_quote 
            VALUES('','$kategori','$author','$tanggal','$quote')"
            ) or die(mysqli_error($konek));  
        }
    }
    
    // delete
    else if (isset($_GET['id'])){
        $id =$_GET['id'];
        $query=mysqli_query($konek,"DELETE FROM daftar_quote where 
        id=$id");
    }
?>
</body>
</html>


