<div id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <p>
        <a href="./">Blog Admin Index</a>
    </p>

	<h2>Add Post</h2>

    <?php
    if ($this->output) {

        foreach ($this->output as $output) {

            echo '<p class="error">' . $output . '</p>';
        }
    }
    ?>

    <form action='?action=add' method='post'>

        <p><label>Title</label><br />
        <input type='text' name='postTitle' value='<?php if (is_array($this->output)) {echo $_POST['postTitle'];}?>'></p>

        <p><label>Description</label><br />
        <textarea name='postDesc' cols='60' rows='10'><?php if (is_array($this->output)) {echo $_POST['postDesc'];}?></textarea></p>

        <p><label>Content</label><br />
        <textarea name='postCont' cols='60' rows='10'><?php if (is_array($this->output)) {echo $_POST['postCont'];}?></textarea></p>

        <p><input type='submit' name='submit' value='Submit'></p>

    </form>

</div>