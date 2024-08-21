<form class="p-5" id="login" action="?action=login" method="post">

    <label> Username 
        <input  type="text" name="username" value="">
    </label>

    <label> Password 
        <input type="password" name="password" value="">
    </label>

    <input class="btn" type="submit"  name='submit' value="Login">

    <?php
    if ($this->output) { 

    echo '<p class="error">' . $this->output  . '</p>'; 
    }
    ?>

</form>