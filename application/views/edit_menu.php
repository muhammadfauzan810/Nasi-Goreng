<!DOCTYPE html>
<html>

<head>
    <title>Edit Menu</title>
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

    .kmbl {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .kmbl>a {
        padding: 10px;
        border: none;
        text-decoration: none;
    }

    .kmbl>a:nth-child(1) {
        background-color: #000000;
        color: #FF8C00;
    }
    </style>
</head>

<body>
    <center>
        <h1>Edit Menu</h1>
    </center>
    <section class="base">
        <form method='post' action="<?= base_url("welcome/edit_menu/{$id}") ?>">
            <div>
                <label>Kode Menu</label>
                <input value="<?= $kode_menu ?>" type="text" name="kd_menu" />
                <?= form_error('kd_menu', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
                <label>Nama Menu</label>
                <input value="<?= $nama_menu ?>" type="text" name="nm_menu" />
                <?= form_error('nm_menu', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
                <label>Harga</label>
                <input value="<?= $harga ?>" type="text" name="harga" />
                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
                <label>Gambar Menu</label>
                <input type="file" name="gambar" required="" />
            </div>
            </br>
            <div>
                <center><button type="submit">Simpan Edit</button></center>
            </div>

    </section>

    </form>

    <div class="kmbl">
        <a href="<?php echo base_url("welcome") ?>">Kembali</a>
    </div>

</body>

</html>