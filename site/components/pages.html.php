<?php    

    $count = count($this->result);
    $page = 1;
    $prev = $count;
    $next = 2;
    $self = $_SERVER['PHP_SELF'];

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

        echo '<a aria-label="previous" href="' .  $self . '?page=' .  $prev . '"> < </a>';

        if ($count < 3) {

            for ($i = 1; $i <= $count; $i++) {

                if ($i == $page) {

                    echo '<a class="current" href="' .  $self . '?page=' . $i . '">' . $i . '</a>';
                } else {

                    echo '<a href="' .  $self . '?page=' . $i . '">' . $i . '</a>';
                }
            }
        } else {

            if ($page == $count) {

                echo '<a href="' .  $self . '?page=' . $page - 2 . '">' . $page - 2 . '</a>';
            }

            if ($page - 1 != 0) {

                echo '<a href="' .  $self . '?page=' . $page - 1 . '">' . $page - 1 . '</a>';   
            }

            echo '<a class="current" href="' .  $self . '?page=' . $page . '">' . $page . '</a>';

            if ($page != $count) {

                echo '<a href="' .  $self . '?page=' . $page + 1 . '">' . $page + 1 . '</a>';
            }
            
            if ($page - 1 == 0) {

                echo '<a href="' .  $self . '?page=' . $page + 2 . '">' . $page + 2 . '</a>';   
            }
        }

        echo '<a aria-label="next" href="' .  $self . '?page=' . $next . '"> > </a>';

    ?>

</div>