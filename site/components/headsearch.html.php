<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="<?php echo $this->root; ?>js/preload.js"></script>
    <link rel="preload" href="<?php echo $this->root; ?>font/OpenSans.ttf" as="font" type="font/ttf" crossorigin="">
    <title><?php echo $this->title; ?></title>
    <meta name="description" content="<?php echo $this->title; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $this->root; ?>css/app.min.css">
    <link rel="manifest" href="<?php echo $this->root; ?>manifest.json" />
    <link rel="apple-touch-icon" href="<?php echo $this->root; ?>images/pwa-logo-small.png" />
</head>
<body id="top" class="d-flex flex-column p-2 p-md-3 px-xxl-5 py-xxl-4">
    <nav class="container-fluid g-0">
        <ul class="row m-0 p-0">
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>index.php">Blog<span>01</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>about.php">About<span>02</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>contact.php">Contact<span>03</span></a></li>
            <li class="col-6 col-md-2 p-2"><a class="p-2" href="<?php echo $this->root; ?>admin/index.php">Admin<span>04</span></a></li>
            <li class="col-12 col-md-4  p-1">
                <svg style="border: 1px solid;" class="facebook rounded-circle mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                </svg>  
                <svg style="border: 1px solid;" class="twitter rounded-circle mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                </svg>
                <svg style="border: 1px solid;" class="atom rounded-circle mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M256 398.8c-11.8 5.1-23.4 9.7-34.9 13.5c16.7 33.8 31 35.7 34.9 35.7s18.1-1.9 34.9-35.7c-11.4-3.9-23.1-8.4-34.9-13.5zM446 256c33 45.2 44.3 90.9 23.6 128c-20.2 36.3-62.5 49.3-115.2 43.2c-22 52.1-55.6 84.8-98.4 84.8s-76.4-32.7-98.4-84.8c-52.7 6.1-95-6.8-115.2-43.2C21.7 346.9 33 301.2 66 256c-33-45.2-44.3-90.9-23.6-128c20.2-36.3 62.5-49.3 115.2-43.2C179.6 32.7 213.2 0 256 0s76.4 32.7 98.4 84.8c52.7-6.1 95 6.8 115.2 43.2c20.7 37.1 9.4 82.8-23.6 128zm-65.8 67.4c-1.7 14.2-3.9 28-6.7 41.2c31.8 1.4 38.6-8.7 40.2-11.7c2.3-4.2 7-17.9-11.9-48.1c-6.8 6.3-14 12.5-21.6 18.6zm-6.7-175.9c2.8 13.1 5 26.9 6.7 41.2c7.6 6.1 14.8 12.3 21.6 18.6c18.9-30.2 14.2-44 11.9-48.1c-1.6-2.9-8.4-13-40.2-11.7zM290.9 99.7C274.1 65.9 259.9 64 256 64s-18.1 1.9-34.9 35.7c11.4 3.9 23.1 8.4 34.9 13.5c11.8-5.1 23.4-9.7 34.9-13.5zm-159 88.9c1.7-14.3 3.9-28 6.7-41.2c-31.8-1.4-38.6 8.7-40.2 11.7c-2.3 4.2-7 17.9 11.9 48.1c6.8-6.3 14-12.5 21.6-18.6zM110.2 304.8C91.4 335 96 348.7 98.3 352.9c1.6 2.9 8.4 13 40.2 11.7c-2.8-13.1-5-26.9-6.7-41.2c-7.6-6.1-14.8-12.3-21.6-18.6zM336 256a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zm-80-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                </svg>
            </li>
        </ul>
    </nav>
    <header class="container-fluid d-flex flex-column-reverse flex-md-row justify-content-md-between">
        <form id="blog-form" class="d-flex flex-row-reverse flex-md-row align-self-end mb-1" action="?action=search" method="post">
            <label for="search" class="d-none">Search title</label>
            <button class="p-0 ms-2 me-2 ms-md-0" type="submit" name="submit">
                <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                </svg> 
            </button>
            <input class="text-end text-md-start w-100" id="search" type="text" name="search" placeholder="Search title" />
        </form>
        <h1 class="mx-3 my-4 m-md-4 text-end">Daves Blog</h1>
    </header>
    <main class="row g-0">
