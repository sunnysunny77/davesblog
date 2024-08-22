<p class="text-center">Page</p>

<div aria-label="pages" id="pages">

    <?php

    $page = 1;
    $prev = 1;
    $next = 2;
    $count = count($this->result);

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

    echo '<a aria-label="previous" href="' .  $_SERVER['PHP_SELF'] . '?page=' .  $prev . '"> < </a>';
    
    for ($i = 1; $i <= $count; $i++) {

        if ($i != $page && $i == $page + 1 || $i != $page && $i == $page - 1 || $i != $page && $i == $page + 2 || $i != $page && $i == $page - 2 ) {

            echo '<a href="' .  $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';   
        } else if ($i == $count - 3 && $i != $page || $i == $count - 4 && $i != $page) {

            echo '<a href="' .  $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';   
        } else if ($i != $page && $i == 4 || $i != $page && $i == 5) {

            echo '<a href="' .  $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';   
        }
    }

    echo '<a aria-label="next" href="' .  $_SERVER['PHP_SELF'] . '?page=' . $next . '"> > </a>';

    ?>

</div>