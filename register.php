
<!DOCTYPE html>
    <html>
    <head>
        <title>Register</title>
    </head>
    <body>

    <form name="registerForm" action="./db/signup.php" method="POST">
    <table>

            <tr>
                <td>Username</td>
                <td><input type = "text" name ="username"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type = "password" name ="password"/></td>
            </tr>

        <tr>
            <td>Confirm Password</td>
            <td><input type = "password" name ="confirm_password"/></td>
        </tr>
        <tr>
            <td>Would you like to be a Photographer?</td>
            <td>Yes <input type = "radio" name ="radiocheck" value="Yes"/></td>
            <td>No <input type = "radio" name ="radiocheck" value="No" checked/></td>
        </tr>

            <tr>
                <td><input type = "submit" name ="submit" value="Submit"/></td>
            </tr>

    </table>
    </form>

    </div>

</body>
</html>