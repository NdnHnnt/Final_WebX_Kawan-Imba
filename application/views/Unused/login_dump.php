<div align="center">
    <?php echo form_open_multipart(base_url() . 'index.php/welcome/checkingLogin' ); ?>
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" id="username" name="username" width="100"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" id="password" name="password" width="100"/></td>
        </tr>
    </table>
    <input type="submit" value="Log in"> <br>

        <p align="center">Don't have an account? please <a href="<?php echo base_url() . 'index.php/welcome/signUp'; ?>"/> Sign up </a></p>
</div>