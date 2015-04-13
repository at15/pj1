<form action="<?php echo site_url('admin/login') ?>" method="post" target="_self">
    <label for="user_name">User Name:</label>
    <input type="text" id="user_name" name="user_name"/>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"/>
    <input type="submit" value="login"/>
</form>