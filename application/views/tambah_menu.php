<!DOCTYPE html>
<html>

<head>
    <title>Tambah Menu</title>
    <style type="text/css">
    body {
        background-color: #F5F5DC;
    }

    * {
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    h1 {
        text-transform: uppercase;
        color: black;
    }

    label {
        margin-top: 10px;
        float: left;
        text-align: left;
        width: 100%;
    }

    .base {
        width: 400px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        background-color: #ededed;
    }

    input {
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        background-color: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: blue;

    }

    button {
        text-align: center;
        background-color: blue;
        color: white;
        padding: 10px;
        font-size: 15px;
        border: 0;
        margin-top: 20px;
        cursor: pointer;
    }

    .text-danger {
        color: crimson;
        font-size: 15px;
    }
    </style>
</head>

<body>
    <center>
        <h1>Tambah Menu</h1>
    </center>
    <section class="base">
        <form method='post' action="<?= base_url('welcome/tambah_menu') ?>">
            <div>
                <label>Kode Menu</label>
                <input type="text" name="kd_menu" />
                <?= form_error('kd_menu', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
                <label>Nama Menu</label>
                <input type="text" name="nm_menu" />
                <?= form_error('nm_menu', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
                <label>Harga</label>
                <input type="text" name="harga" />
                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
                <label>Gambar Menu</label>
                <input type="file" name="gambar" />
            </div>
            </br>
            <div>
                <center><button type="submit">Simpan Menu</button></center>
            </div>
        </form>
    </section>

</body>

</html>