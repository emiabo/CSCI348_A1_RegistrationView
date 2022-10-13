<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Login</title>
        <meta name="author" content="Emi Aboudara">
        <meta name="keywords" content="">
    </head>
    <body>
        <main>
            <h1>Register for a New Account</h1>
            <form action="verify.php" method="post">
                <fieldset>
                    <legend>Your Information</legend>
                    <label for="fname">First name: </label>
                    <input type="text" id="fname" name="fname">
                    <br>
                    <label for="lname">Last name: </label>
                    <input type="text" id="lname" name="lname">
                    <br>
                    <label for="phone">Phone number (###-###-####): </label>
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="phone" name="phone">
                    <br>
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email">
                    <br>
                    <label for="email2">Email again: </label>
                    <input type="email" id="email2" name="email2">
                </fieldset>
                <fieldset>
                    <legend>Login Information</legend>
                    <label for="user">Username: </label>
                    <input type="text" id="user" name="user">
                    <br>
                    <label for="pw">Password: </label>
                    <input type="password" id="pw" name="pw">
                    <br>
                    <label for="pw2">Password again: </label>
                    <input type="password" id="pw2" name="pw2">
                </fieldset>
                <button type="submit" name="submit">Register</button>
            </form>
        </main>
    </body>
</html>