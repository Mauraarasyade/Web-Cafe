<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM minuman WHERE id=$id");
    $minuman= mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $deskripsi = $_POST["deskripsi"];
        $rasa = $_POST["rasa"];
        $harga = $_POST["harga"];

        $query = mysqli_query($db, "UPDATE minuman SET nama='$nama',
        deskripsi='$deskripsi', rasa='$rasa', harga='$harga' WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT MINUMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Edit Data Minuman</h1>

        <!-- REQUEST: GET, POST, PUT, PATCH -->
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input required value="<?php echo $minuman ['nama']?>" type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input required value="<?php echo $minuman ['deskripsi']?>" type="text" name="deskripsi" class="form-control" id="deskripsi">
            </div>
            <div class="mb-3">
                <label for="rasa" class="form-label">Rasa</label>
                <input required value="<?php echo $minuman ['rasa']?>" type="text" name="rasa" class="form-control" id="rasa">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input required value="<?php echo $minuman ['harga']?>" type="text" name="harga" class="form-control" id="harga">
            </div>

            <button type="submit" name="submit" class="btn btn-danger">Submit</button>

            <a class="btn btn-primary" href="./minuman.php">Kembali ke halaman minuman</a>
        </form>
    </div>
</body>
</html>