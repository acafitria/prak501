<?php 
require "Koneksi.php"; require "Model.php";  $no = 1; 
$member = new Model(); 
//mengambil data member 
$result = $member->getMember(); 
//mengahapus data member 
if (isset($_GET['id_member'])) {     
    $id = $_GET['id_member'];     
    $member->deleteMember($id);     
    header("Location: Member.php"); 
}  
    if (isset($_GET['id_member'])) {     
        $id = $_GET['id_member'];     
        $member->editMember($id,  $nama,  $nomor,  $alamat, $tgl_terakhir_bayar);     
        header("Location: Member.php"); 
        } 
    ?>  
<!DOCTYPE html> <html lang="en"> <head>     
    <meta charset="UTF-8">     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">     
    <meta  name="viewport"  content="width=device-width,  initial-scale=1.0">     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"    
    <script src="https://kit.fontawesome.com/14edc419b7.js"></script>     
    <title> Member</title>
    </head> 
    <body>   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DAFTAR MEMBER</a>
  </div>
</nav>  
        <div class="container">         
            <div class="row">             
                <div class="col-md-12 py-3">                                  
                    <hr>
                                     
                    <a  class="btn btn-dark  my-1" href='index.php'"><i class="fa fa-home"></i> Beranda</a>   
                    <a  class="btn  btn-success  my-1" href='FormMember.php'"><i  class="fa  fa-user-plus"></i>  Tambah Member</a>                           
                    <table class="table-info table table-striped">             
                    <thead>                 
                    <tr>                     
                    <th>No</th>                     
                    <th>Nama</th>                     
                    <th>Nomor Member</th>                     
                    <th>Alamat</th>                     
                    <th>Tgl. Mendaftar</th>                     
                    <th>Tgl. Terakhir Bayar</th>                     
                    <th>Menu</th>                 
                    </tr>             
                    </thead>             
                    <tbody>                 
                    <?php  
                    while  ($row  = mysqli_fetch_assoc($result)) :
                    
            ?>                     
            <tr>                     
            <td><?= $no++ ?></td>                     
            <td><?= $row['nama_member'] ?></td>                     
            <td><?= $row['nomor_member'] ?></td>                    
            <td><?= $row['alamat'] ?></td>                     
            <td><?= $row['tgl_mendaftar'] ?></td>                     
            <td><?= $row['tgl_terakhir_bayar'] ?></td>                     
            <td>                     
            <a  href="FormMember.php?id_member=<?= $row['id_member'];  ?>"  class='btn btn-outline-info  btn-sm  ml-2'><i class="fa fa-pencil"></i> Edit</a>&nbsp;                     
            <a href="javascript:confirmDelete('Member.php?id_member=<?= $row['id_member'];  ?>')"  class='btn btn-outline-info   btn-sm  ml-2'><i class="fa fa-trash"></i> Hapus</a>  
                                   
            </td>                     
            </tr>                 
                <?php                 
                endwhile;
                ?>             
            </tbody>         
        </table>         
        <script>             
        function confirmDelete(url) {                 
            if  (confirm("Apakah  anda  yakin  ingin  menghapus data ini?")) {                     
                window.location.href = url;                 
                }             
            }             
            </script>             
            </div>         
        </div>     
    </div> 
</body> 
</html>