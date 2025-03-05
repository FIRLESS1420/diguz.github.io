<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link    rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $nama = "Firdaus Al Hamid";
    $nim = "102022300403";
    $gambar = "FOTO NON FORMAL.jpeg"; // Ganti dengan path gambar yang sesuai
?>

<div class="container">
    <img src="<?php echo $gambar; ?>" alt="Foto Profil" width="150">
    <h1><?php echo $nama; ?></h1>
    <h1><?php echo $nim; ?></h1>

    <div class="social-links">
        <a href="https://instagram.com/daus.ha" target="_blank" class="instagram">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://facebook.com/username" target="_blank" class="facebook">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://twitter.com/username" target="_blank" class="twitter">
            <i class="fa-brands fa-twitter"></i>
        </a>
    </div>
</div>

</body>
</html>
