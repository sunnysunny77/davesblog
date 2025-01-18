<?php    

    $result = $this->result;
    $count = count($result);
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

    function is_page($result, $page) {

        return array_key_exists($page - 1, $result);
    }
    
?>

<div class="mt-4" aria-label="pages" id="pages">

    <?php

        echo '<a aria-label="previous" href="' .  $self . '?page=' .  $prev . '"> <i class="fa-solid fa-angle-left"></i> </a>';

            if (!is_page($result, $page + 1) && is_page($result, $page - 4)) {

                echo '<a href="' .  $self . '?page=' . $page - 4 . '">' . $page - 4 . '</a>';
            }

            if (!is_page($result, $page + 2) && is_page($result, $page - 3)) {
                
                echo '<a href="' .  $self . '?page=' . $page - 3  . '">' . $page - 3 . '</a>';
            }

            if (is_page($result, $page - 2)) {

                echo '<a href="' .  $self . '?page=' . $page - 2 . '">' . $page - 2 . '</a>';
            }

            if (is_page($result, $page - 1)) {
                
                echo '<a href="' .  $self . '?page=' . $page - 1 . '">' . $page - 1 . '</a>';
            }
      
            echo '<a class="current" href="' .  $self . '?page=' . $page . '">' . $page . '</a>';

            if (is_page($result, $page + 1)) {

                echo '<a href="' .  $self . '?page=' . $page + 1 . '">' . $page + 1 . '</a>';
            }

            if (is_page($result, $page + 2)) {
                
                echo '<a href="' .  $self . '?page=' . $page + 2 . '">' . $page + 2 . '</a>';
            }

            if (!is_page($result, $page - 2) && is_page($result, $page + 3)) {

                echo '<a href="' .  $self . '?page=' . $page + 3 . '">' . $page + 3 . '</a>';
            }

            if (!is_page($result, $page - 1) && is_page($result, $page + 4)) {
                
                echo '<a href="' .  $self . '?page=' . $page + 4 . '">' . $page + 4 . '</a>';
            }
 
        echo '<a aria-label="next" href="' .  $self . '?page=' . $next . '"> <i class="fa-solid fa-angle-right"></i>  </a>';

    ?>

</div>