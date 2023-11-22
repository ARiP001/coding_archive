<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quote - QOTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="chat-right-quote.svg">
    <?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:index.php?pesan=belum_login");
        }
?>
    <style> 
        .container-fluid{
        margin: 0 10% 0 10%;
        }
        .card{
            margin: 2% 25% 4% 25%;
        }
        .btn{
            background-color: #9eb384 !important;
            color: black;
            border: #9eb384;
        }
        .bg-dark{
            background-color: #9eb384 !important;
        }
        body{
            background-color: #faf1e4;
        }
        .card-header{
            background-color: #b3c99c;
        }
        .card-body{
            background-color: #E8F3D6;
        }
    </style>
</head>
<body>
   
<?php
    include 'db_quote.php';

    $id=$_GET['id'];
    $query=mysqli_query($konek,"SELECT * from daftar_quote where id=$id");
    $data =mysqli_fetch_array($query);
    ?>
 <div class="card">
        <h5 class="card-header">Edit Quote</h5>
        <div class="card-body">

          <form action="sqlcode.php" method="POST">
            
          <input type="hidden" name="id" 
            value="<?php echo $data['id']; ?>">

            <div class="form-group row p-2 g-col-6">
              <label for="inputquote" class="col-sm-2 col-form-label">Quote</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="addquote" rows="3" value="<?php echo $data['quote']; ?>"><?php echo $data['quote']; ?></textarea>
              </div>
            </div>
            <div class="form-group row p-2 g-col-6">
              <label for="inputauthor" class="col-sm-2 col-form-label">Author</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputauthor" name="author" value="<?php echo $data['author']; ?>">
              </div>
            </div>
            <div class="form-group row p-2 g-col-6">
              <label for="inputselect" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
                <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                    <option selected><?php echo $data['kategori']; ?></option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Romance">Romance</option>
                    <option value="Life">Life</option>
                    <option value="Friendship">Friendship</option>
                    <option value="Religi">Religi</option>
                  </select>
              </div>
            </div>
            <div class="form-group row p-2 g-col-6">
                <label for="inputtanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                </div>
              </div>
            <div class="form-group">
              <div class="col-sm-12 d-flex flex-row-reverse bd-highlight">
                <button type="submit" value="submit" name="submit-btn2" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div> 
</body>
</html>