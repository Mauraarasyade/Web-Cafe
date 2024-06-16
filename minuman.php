<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM minuman");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MINUMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            font-family: 'Times New Roman', Times, serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        #kiri {
            width: 35%;
            background-color: white;
            height: 600px;
        }
        #kanan {
            width: 65%;
            background-color: white;
            color:#193446;
            height: 600px;
            padding: 0;
        }
        .bulat{
            margin-left: 0px;
            width: 545px;
            height: 600px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td id="kiri">
                <img class="bulat" src="https://images.unsplash.com/photo-1566657040726-62fd1e379726?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            </td>
            <td id="kanan">
                <div class="container w-75">
                    <h1 class="my-3" align="center"><strong>DAFTAR MINUMAN</strong></h1>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Rasa</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $minuman) { ?>
                                <tr>
                                    <td><?php echo $minuman["nama"] ?></td>
                                    <td><?php echo $minuman["deskripsi"] ?></td>
                                    <td><?php echo $minuman["rasa"] ?></td>
                                    <td><?php echo $minuman["harga"] ?></td>
                                        <td>
                                            <a class="btn btn-success" href=<?php echo "edit_minuman.php?id=" . $minuman["id"] ?>>Edit</a>|
                                            <a class="btn btn-success" href=<?php echo "hapus_minuman.php?id=" . $minuman["id"] ?>>Hapus</a>
                                        </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="d-grid gap-2"><br><br><br><br>
                        <button type="submit" name="submit" class="btn btn-success" type="button"><a class="btn btn-success" href="./tambah_minuman.php">Tambah Daftar Minuman</a></button>
                        <button type="submit" name="submit" class="btn btn-success" type="button"><a class="btn btn-success" href="./index.php">Kembali ke Menu Utama</a></button>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>