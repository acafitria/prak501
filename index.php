<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>PERUSTAKAAN</title>
    <style>
        table, td, th {
            margin-left:auto;
            margin-right:auto;
            border:2px solid black;
            border-collapse: collapse;
            padding: 10px;
            width : 1000px
        }
        th {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-center" href="#" style="width: 100%;">PERPUSTAKAAN ONLINE</a>
  </div>
</nav>



    <br>
    <table style=" btn btn-outline-primary margin-left:auto;margin-right:auto;border:2px black;">
        <tr>
            <td><a href="Buku.php"><button type="submit" class="btn btn-outline-info" name="submit" value="Simpan">Buku</button></a></td>
            <td><a href="Member.php"><button type="submit" class="btn btn-outline-info" name="submit" value="Simpan">Member</button></a></td>
            <td><a href="Peminjaman.php"><button type="submit" class="btn btn-outline-info" name="submit" value="Simpan">Peminjaman</button></a></td>
        </tr>
    </table>
</body>
</html>