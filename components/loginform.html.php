<div id='login'>

    <?php
     if ($this->output) { 

        echo '<p class="error">' . $this->output  . '</p>'; 
     }
    ?>

    <form action="?action=login" method="post">
        <p>
            <label> Username </label>
            <input  type="text" name="username" value=""  />
        </p>
        <p>
            <label> Password </label>
            <input type="password" name="password" value=""  />
        </p>
        <p>
            <input type="submit" name="submit" value="Login">
        </p>
    </form>
    
</div>
