<div id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <p>
        <a href="./">Blog Admin Index</a>
    </p>

	<h2>Edit Post</h2>

    <?php
     if ($this->result->errorInfo) {

        echo $this->result->getMessage() . '<br /><br />';
        ?>
        </div>
        <?php
        exit();
    }
    if (isset($this->output)) {

        foreach ($this->output as $output) {

            echo  $output . '<br />';
        }
    }
    ?>

    <form action='<?php echo '?action=edit&id=' . $this->result['postID']?>' method='post'>

        <input type='hidden' name='postID' value='<?php echo $this->result['postID'];?>'>

        <p><label>Title</label><br />
        <input type='text' name='postTitle' value='<?php echo $this->result['postTitle'];?>'></p>

        <p><label>Description</label><br />
        <textarea name='postDesc' cols='60' rows='10'><?php echo $this->result['postDesc'];?></textarea></p>

        <p><label>Content</label><br />
        <textarea name='postCont' cols='60' rows='10'><?php echo $this->result['postCont'];?></textarea></p>

        <p><input type='submit' name='submit' value='Update'></p>

    </form>

</div>