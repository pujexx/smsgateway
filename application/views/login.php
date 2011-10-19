<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("login/index"); ?>
        <input type="text" name="username" ><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
        <?php echo form_close(); ?>
    </body>
</html>
