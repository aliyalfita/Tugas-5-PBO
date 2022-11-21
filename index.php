<?php
include 'connection.php';

$query = "SELECT * FROM tb_mhs";
$sql = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--Bootstrap --> 
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="font awesome/css/font-awesome.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #B9E0FF;">
        <div class="container-md">
          <a class="navbar-brand" href="#">CRUD PBO <cite title="Source Title">(Create, Read, Update, Delete)</cite></a>
        </div>
      </nav>

      <!--Judul-->
      <figure class="text-right mt-5 container">
        <blockquote class="blockquote">
          <p>Data Mahasiswa Unesa</p>
        </blockquote>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3 mt-1">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
      </figure>
      <div class="table-responsive">
        <table class="table align-middle container table-bordered table table-hover">
          <thead>
            <tr>
              
              <th><center>ID</center></th>
              <th><center>NIM</center></th>
              <th><center>Nama</center></th>
              <th><center>Jenis Kelamin</center></th>
              <th><center>Alamat</center></th>
              <th><center>Program Studi</center></th>
              <th><center>Email</center></th>
              <th><center>Foto</center></th>
              <th><center>Aksi</center></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            while($data = mysqli_fetch_assoc($sql)){

            ?>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $data['nim'] ?></td>
              <td><?php echo $data['nama_mhs'] ?></td>
              <td><?php echo $data['jk_mhs'] ?></td>
              <td><?php echo $data['alamat_mhs'] ?></td>
              <td><?php echo $data['prodi_mhs'] ?></td>
              <td><?php echo $data['email_mhs'] ?></td>
              <td>
                <center>
                <img src="img/img1.png" alt="" style="width: 150px;"> 
            </td>
              <td>
                  <a href="update_page_mhs.php?id_mhs=<?php echo $data['id_mhs']; ?>" class="btn btn-primary">Update</a>
                  <a href="delete_mhs.php?id_mhs=<?php echo $data['id_mhs']; ?>" class="btn btn-danger">Delete</a>
                </button>
              </center>
              </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
     </div>   
</body>
</html>
