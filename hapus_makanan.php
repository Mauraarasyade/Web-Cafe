<?php

    include_once("./connect.php");

    $id = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM makanan WHERE id=$id");

    header("Location: makanan.php");