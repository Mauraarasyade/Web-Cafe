<?php

    include_once("./connect.php");

    $id = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM minuman WHERE id=$id");
    if($proses){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location.href='minuman.php';
            </script>";
    } else echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location.href='minuman.php';
                </script>";

    header("Location: minuman.php");