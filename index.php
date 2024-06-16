<a?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI CAFE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success p-4">
        <div class="container-fluid">
            <h2><em><strong>WELCOME TO MORRA'S CAFE</strong></em></h2>
            <form form class="mt-3 d-flex" action="logout_proccess.php" method="POST">
                <button class="btn btn-outline-danger" type="submit"><strong>LOGOUT</strong></button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="slide">
            <div class="item" style="background-image: url('https://images.unsplash.com/photo-1566698629409-787a68fc5724?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <div class="content">
                    <div class="name">MAKANAN</div>
                    <div class="des">Biarkan makanan manis menjadi inspirasi kreatifmu, lukiskan rasa dan kebahagiaan di atas piring, dan ciptakan momen manis yang tak terlupakan!</div>
                    <a class="btn btn-success" href="./makanan.php">See More</a>
                </div>
            </div>
            <div class="item" style="background-image: url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <div class="content">
                    <div class="name">MINUMAN</div>
                    <div class="des">Bayangkan secangkir kopi di tangan Anda. Aroma memikat, rasa yang kaya, dan pengalaman yang tak terlupakan. Setiap tegukan membawa Anda dalam petualangan rasa yang berbeda.</div>
                    <a class="btn btn-success" href="./minuman.php">See More</a>
                </div>
            </div>
            <div class="item" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <div class="content">
                    <div class="name">STAFF</div>
                    <div class="des">Bergabunglah dengan kami dan rasakan sendiri keahlian dan dedikasi staff kami. Anda akan mendapatkan pengalaman yang luar biasa!</div>
                    <a class="btn btn-success" href="./staff.php">See More</a>
                </div>
            </div>
        </div>
        <div class="button">
            <div class="prev"><i class="fa-solid fa-arrow-left"></i></div>
            <div class="next"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>