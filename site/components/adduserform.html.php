<div id="wrapper">
    
    <?php echo file_get_contents("../components/menu.html"); ?>

	<h2 class="m-3 p-3">Add User</h2>

    <?php
    if ($this->output) {

        foreach ($this->output as $output) {

            echo '<p class="error">' . $output . '</p>';
        }
    }
    ?>
    
    <form action='?action=adduser' method='post'>

        <label>Username
            <input type='text' name='username' value='<?php if($this->output){ echo $_POST['username'];}?>'>
        </label><br />

        <label>Password
            <input type='password' name='password' value='<?php if($this->output){ echo $_POST['password'];}?>'>
        </label><br />

        <label>Confirm Password
            <input type='password' name='passwordConfirm' value='<?php if($this->output){ echo $_POST['passwordConfirm'];}?>'>
        </label><br />

        <label>Email
            <input type='text' name='email' value='<?php if($this->output){ echo $_POST['email'];}?>'>
        </label><br />

        <input class="btn" type="submit"  name='submit' value="Add User">

    </form>

</div>
