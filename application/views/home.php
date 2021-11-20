<!DOCTYPE html>
<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        body{
            background-color: #00334E;
        }
        .card-header{
            background-color: #5588A3;
        }
        .nav-link{
            color: white;
        }
        .img{
            width: 70px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" onclick="document.location.href='#'">Data Mahasiswa</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" onclick="document.location.href='<?php echo base_url('index.php/Welcome/formInput') ?>'">Form Mahasiswa</button> 
                </li>
             </ul>
        </div>

        <div class="card-body">
            <h1 class="card-title text-center">Data Mahasiswa</h1>

            <table class="table table-striped">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Email</th>                        
                        <th scope="col">Pass Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $count = 0;
                        foreach($data_mhs as $row){
                            $count = $count + 1;
                    ?>
                    <tr>
                        <th><?php echo $count ?></th>
                        <td><?php echo $row->nim ?></td>
                        <td><?php echo $row->namamhs ?></td>
                        <td><?php echo $row->jk ?></td>
                        <td><?php echo $row->alamat ?></td>
                        <td><?php echo $row->kota ?></td>
                        <td><?php echo $row->email ?></td>
                        <td><img src="img/<?php echo $row->foto ?>" class="img"></td>
                        <td>
                            <button onclick="document.location.href='<?php echo base_url('index.php/Welcome/formEdit/'). $row->id ?>'" class="btn btn-warning" name="edit">Edit</button>
                            <button onclick="document.location.href='<?php echo base_url('index.php/Welcome/AksiDelete/'). $row->id ?>'" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>