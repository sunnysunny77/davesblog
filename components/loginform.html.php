<form id="login" action="?action=login" method="post">

    <label> Username 
        <input  type="text" name="username" value="">
    </label>

    <label> Password 
        <input type="password" name="password" value="">
    </label>

    <button type="submit" name="submit">Login</button>

    <?php
    if ($this->output) { 

    echo '<p class="error">' . $this->output  . '</p>'; 
    }
    ?>

</form>