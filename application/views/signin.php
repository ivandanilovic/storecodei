<?php echo validation_errors(); ?>
<?php echo form_open('signin/validation'); ?>
    <table style="border: none">
        <tr><td><label for="credentials">Username or e-mail address:</label></td><td><input type="text" id="credentials" name="credentials"></td></tr>
        <tr><td><label for="password">Password:</label></td><td><input type="password" id="password" name="password"></td></tr>
        <tr><td></td><td><button type="submit" id="signin" name="signin">Sign In</button></td></tr>
    </table>
</form>
