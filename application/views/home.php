<html>

<head>
    <title>Nasi Goreng Delivery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #F5F5DC;
        }

        * {
            font-family: 'Roboto', sans-serif;
        }



        h1 {
            text-transform: uppercase;
            color: black;
        }

        .btn_menu {
            background-color: #285430;
            padding: 15px;
            border: none;
            color: white;
            text-shadow: 0.5px 0.5px 0.5px #fff;
            cursor: pointer;

        }

        table {
            border: 1px solid #deee;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }

        table thead th {
            background-color: #333;
            border: 5px solid #333;
            color: white;
            text-align: center;
        }

        table tbody td {
            border: 5px solid #ddeeee;
            color: #333;
            padding: 10px;
            text-align: center;
        }

        .table__image {
            object-fit: contain;
            height: 80px;
        }

        .table__tools {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .table__tools>a {
            padding: 10px;
            border: none;
            text-decoration: none;
        }

        .table__tools>a:nth-child(1) {
            background-color: #63a8ff;
            color: white;
        }

        .table__tools>form>button {
            padding: 8px 12px;
            background-color: crimson;
            color: white;
            cursor: pointer;
        }

        .container {
            background-color: dark;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h1>NASI GORENG DELIVERY</h1>
    </center>

    <center><button class="btn_menu"
            onclick="document.location.href='<?php echo base_url('welcome/tambah_menu') ?>' ">Tambah Menu</button>
    </center>

    <table>
        <thead>
            <tr>
                <th><b>No.</b></th>
                <th><b>Kode Menu</b></th>
                <th><b>Nama Menu</b></th>
                <th><b>Harga</b></th>
                <th><b>Gambar</b></th>
                <th><b>Action</b></th>
            </tr>
        </thead>


        <tbody>
            <?php
            $count = 0;
            foreach ($menu as $row) {
                $count = $count + 1;
                ?>
                <tr>
                    <td>
                        <?php echo $count ?>
                    </td>
                    <td>
                        <?php echo $row->kd_menu ?>
                    </td>
                    <td>
                        <?php echo $row->nm_menu ?>
                    </td>
                    <td>
                        Rp.
                        <?php echo $row->harga ?>
                    </td>
                    <td><img src="<?= base_url("assets/image/{$row->gambar}") ?>" class="table__image"></td>
                    <td>
                        <div class="table__tools">

                            <a href="<?php echo base_url("welcome/edit_menu/{$row->id}") ?>">Edit</a>
                            <form action="<?php echo base_url("welcome/Delete/{$row->id}") ?>" method="post">
                                <button type="submit">Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>