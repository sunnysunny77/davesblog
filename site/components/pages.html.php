<?php    

    $count = count($this->result);
    $page = 1;
    $prev = $count;
    $next = 2;

    if (isset($_GET["page"])) {

        $page = $_GET["page"];
    }

    if ($page > 1) {

        $prev = $page - 1;
    }

    if ($page < $count) {

        $next = $page + 1;
    }

    if ($page == $count) {

        $next = 1;
    }

?>

<p class="text-center">Page</p>

<div aria-label="pages" id="pages">

    <?php

    echo '<a aria-label="previous" href="' .  $_SERVER['PHP_SELF'] . '?page=' .  $prev . '"> < </a>';
    
    for ($i = 1; $i <= $count; $i++) {

        if ($i == $page)  {

            echo '<a class="current" href="' .  $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';   

        } else if (($i <= 3 && $page < 2) || ($i >= $count - 2 && $i < $page) || ($i >= $page - 1 && $i <= $page + 1)) {

            echo '<a href="' .  $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';   
        }
    }

    echo '<a aria-label="next" href="' .  $_SERVER['PHP_SELF'] . '?page=' . $next . '"> > </a>';

    ?>

</div>