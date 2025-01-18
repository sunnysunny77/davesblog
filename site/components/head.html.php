<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="<?php echo $this->root; ?>js/preload.js"></script>
    <title><?php echo $this->title; ?></title>
    <meta name="description" content="<?php echo $this->title; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $this->root; ?>css/app.min.css">
    <link rel="manifest" href="<?php echo $this->root; ?>manifest.json" />
    <link rel="apple-touch-icon" href="<?php echo $this->root; ?>images/pwa-logo-small.webp" />
</head>
<body id="top" class="p-2 p-md-3">
    <nav class="container-fluid g-0">
        <ul class="row m-0 p-0 g-0">
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>index.php">Blog<span>01</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>about.php">About<span>02</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>contact.php">Contact<span>03</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>admin/index.php">Admin<span>04</span></a></li>
            <li class="col-12 col-md-4  p-1">
                <i  class="facebook fa-brands fa-facebook border rounded-circle p-1 mx-1"></i> 
                <i class="twitter fa-brands fa-twitter border rounded-circle p-1 mx-1"></i>
                <i class="atom fa-solid fa-atom border border rounded-circle p-1 mx-1"></i>
            </li>
        </ul>
    </nav>
    <header class="container-fluid d-flex justify-content-end pb-1 ps-2 pe-3 pe-xl-4 g-0">
        <h1 class="my-4 my-md-4">Daves Blog</h1>
    </header>
    <main>
        <div class="row g-0">
