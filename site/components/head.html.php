<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="preload" href="<?php echo $this->root; ?>font/OpenSans.ttf" as="font" type="font/ttf" crossorigin="">
    <title><?php echo $this->title; ?></title>
    <meta name="description" content="<?php echo $this->title; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $this->root; ?>css/app.min.css">
</head>
<body id="top" class="d-flex flex-column p-2 p-md-3 px-xxl-5 py-xxl-4">
    <nav class="container-fluid g-0">
        <ul class="row m-0 p-0">
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>index.php">Blog<span>01</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>about.php">About<span>02</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>contact.php">Contact<span>03</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>admin/index.php">Admin<span>04</span></a></li>
            <li class="col-12 col-md-4  p-1">
                <svg style="border: 1px solid;" class="facebook rounded-circle mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. --><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                <svg style="border: 1px solid;" class="twitter rounded-circle mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                <span role="img" aria-label="atom" id="svg"></span>
            </li>
        </ul>
    </nav>
    <header class="container-fluid align-items-end row g-0">
        <h1 class="col m-4 text-end">Daves Blog</h1>
    </header>
    <main class="row g-0">
