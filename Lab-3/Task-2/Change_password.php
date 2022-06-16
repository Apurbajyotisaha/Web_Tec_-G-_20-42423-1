<fieldset>

    <legend><h1>Change Password</h1></legend>
    <table>
        <tr>
            <td>Current Password:</td>
            <td><input type="password" name="current_pass" value="<?php if(isset($_COOKIE['current_pass'])) {echo $_COOKIE['current_pass'];} ?>"></td>
        </tr>
        <tr>
            <td> New Password:</td>
            <td><input type="password" name="new_pass" value="<?php if(isset($_COOKIE['new_pass'])) {echo $_COOKIE['password'];} ?>"></td>
        </tr>
        <tr>
            <td>Retype New Password:</td>
            <td><input type="retype_new_pass" name="retype_new_pass" value="<?php if(isset($_COOKIE['retype_new_pass'])) {echo $_COOKIE['retype_new_pass'];} ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
    
</table>
</fieldset>