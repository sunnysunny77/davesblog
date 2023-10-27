<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script>

        const preload_image = (im_url) => {

          if (!im_url) {
            return;
          }

          let img = new Image();
          const root = "<?php echo $this->root . 'images/'; ?>";
          img.src = root + im_url;
        };

        const arr = ["<?php echo $this->preload ?? ""; ?>","atom.svg"];

        for (const item of arr) {

          preload_image(item);
        }

    </script>
    <link rel="preload" href="<?php echo $this->root; ?>webfonts/fa-brands-400.woff2" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="<?php echo $this->root; ?>css/Lato-Regular.ttf" as="font" type="font/ttf" crossorigin="">
    <title><?php echo $this->title; ?></title>
    <meta name="description" content="<?php echo $this->title; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $this->root; ?>css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->root; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->root; ?>css/app.css">
</head>
<body id="top" class="d-flex flex-column p-2 px-md-5 py-md-4">
    <nav class="container-fluid g-0">
        <ul class="row m-0 p-0">
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>index.php">Blog<span>01</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>about.php">About<span>02</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>contact.php">Contact<span>03</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>admin/index.php">Admin<span>04</span></a></li>
            <li class="col-12 col-md-4  p-1">
                <i style="border: 1px solid;" class="fa-brands fa-facebook rounded-circle p-1 mx-1"></i>
                <i style="border: 1px solid;" class="fa-brands fa-twitter rounded-circle p-1 mx-1"></i>
                <span role="img" aria-label="atom" id="svg"></span>
            </li>
        </ul>
    </nav>
    <header class="container-fluid align-items-end row g-0">
        <h1 class="col m-4 text-end">Daves Blog</h1>
    </header>
    <main class="row g-0">
