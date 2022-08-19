<div id='login'>
    <?php echo '<p class="error">' . $this->message  . '</p>'; ?>
    <form action="?action=login" method="post">
        <p>
            <label for="username"> Username </label>
            <input id="username" type="text" name="username" value=""  />
        </p>
        <p>
            <label for="password"> Password </label>
            <input id="password" type="password" name="password" value=""  />
        </p>
        <p>
            <input type="submit">Login</input>
        </p>
    </form>
</div>
