<?php
    session_start();

    // Cek apakah user memiliki session
    // Kalau iya, artinya user sudah login
    // Maka, pindahin ke halaman index.php
    if(isset($_SESSION["email"])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            width: 45%;
            background-color: white;
            height: 600px;
        }
        #kanan {
            width: 55%;
            background-color: white;
            color:#193446;
            height: 600px;
            padding: 19px;
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
                <img class="bulat" src="https://i.pinimg.com/564x/2d/ff/ec/2dffec01eff2125791052e9ada40eda6.jpg">
            </td>
            <td id="kanan">
                <div class="container w-75">
                    <h1 class="my-3" align="center">Back to your <strong class="text-success">Digital Life!</strong></h1>
                    <p align="center">Start being productive today. Just login to your Admin account.</p><br><br>

                    <form action="./login_proccess.php" method="POST">
                        <div class="mb-3" align="left">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3" align="left">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input required type="password" name="password" class="form-control" id="exampleInputPassword1"><br>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="submit" class="btn btn-success" type="button">Login</button>
                        </div>
                        <p class="my-2" align="center">Don't have an account? Try creating your Admin account <a href="./register.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">here</a></p>
                    </form>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>