<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olshop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">King Of Chairs</a></h1>
        <ul>
            <li><a href="produk.php">Produk</a></li>
        </ul>
        </div>
    </header>

    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>
    <!-- category -->
    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <div class="col-5">
                    <img src="img/iconkategori.png">
                    <p>Kategori1</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>