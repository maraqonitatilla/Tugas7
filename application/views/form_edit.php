<!DOCTYPE html>
<head>
    <title>FORM EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #9E7777;
        }
        .card-header{
            background-color: #DEBA9D;
        }
        .nav-link{
            color: #433D3C;
        }
        .card-body{
            background-color: #F5E8C7;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link" aria-current="page" href="form_input.php" onclick="document.location.href='<?php echo base_url('#') ?>'">Data Mahasiswa</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link active" href="home.php" onclick="document.location.href='<?php echo base_url('index.php/Welcome/formInput') ?>'">Form Mahasiswa</button>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <h1 class="card-title text-center">Form Mahasiswa</h1>
            <?php foreach ($tbl_mhs as $u){ ?>
            <form action="<?php echo base_url('index.php/Welcome/AksiEdit') ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $u->id ?>">
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM Anda" value="<?php echo $u->nim ?>">
                </div>
                <br>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="namamhs" class="form-control" placeholder="Masukkan Nama Anda" value="<?php echo $u->namamhs ?>">
                </div>
                <br>
                <div class="form-froup">
                    <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="L">
                            <label class="form-check-label" for="L">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="P">
                            <label class="form-check-label" for="P">Perempuan</label>
                        </div>
                </div>
                <br>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah Anda" value="<?php echo $u->alamat ?>"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Kota</label>
                    <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota Rumah Anda" value="<?php echo $u->kota ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email Anda" value="<?php echo $u->email ?>">
                </div>
                <br>
                <div class="form-gorup">
                    <label for="foto" class="form-label">Pass Foto</label>
                    <input class="form-control" type="file" name="foto" value="<?php echo $u->foto ?>">
                </div>
                <br>
                <div class="col">
                <button type="submit" name="submit" value="add" class="btn btn-success btn-sm">Simpan</button>
                <button type="submit" name="submit" value="add" class="btn btn-danger btn-sm" onclick="document.location.href='<?php echo base_url('#') ?>'">Batal</button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>