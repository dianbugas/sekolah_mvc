<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman <?=$data['judul']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">Matla'ul Anwar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASEURL; ?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/Mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/Ustadz">Ustadz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/About">About</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>