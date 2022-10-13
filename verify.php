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
            <?php
                try {
                    if(!isset($_REQUEST['fname']) || !isset($_REQUEST['lname']) || !isset($_REQUEST['phone']) || !isset($_REQUEST['email']) || !isset($_REQUEST['email2']) || !isset($_REQUEST['user']) || !isset($_REQUEST['pw']) || !isset($_REQUEST['pw2'])) {
                        throw new Exception("All fields are required.");
                    } else if(strcmp($_REQUEST['email'], $_REQUEST['email2']) != 0) {
                        throw new Exception("Emails must match.");
                    } else if(strlen($_REQUEST['user']) < 3) {
                        throw new Exception("Username must be longer than 3 characters.");
                    } else if(strcmp($_REQUEST['pw'], $_REQUEST['pw2']) != 0) {
                        throw new Exception("Passwords must match.");
                    } else if(strlen($_REQUEST['pw']) < 4 || strlen($_REQUEST['pw']) > 10) {
                        throw new Exception("Password must be between 4 and 10 characters.");
                    } else if(!strpbrk($_REQUEST['pw'], '01234567890')) {
                        throw new Exception("Password must contain a number.");
                    } else if(strpbrk($_REQUEST['pw'], ')(][}{')) {
                        throw new Exception("Password must not contain the following special characters: ()[]{}");
                    }
                    
                    $fname = $_REQUEST['fname'];
                    $lname = $_REQUEST['lname'];
                    $phone = $_REQUEST['phone'];
                    $email = $_REQUEST['email'];
                    $user = $_REQUEST['user'];
                    $pw = password_hash($_REQUEST['pw'], PASSWORD_DEFAULT);
                    echo("<h1>Success!</h1>");
                    echo("First name: " . $fname . "<br>");
                    echo("Last name: " . $lname . "<br>");
                    echo("Phone: " . $phone . "<br>");
                    echo("Email: " . $email . "<br>");
                    echo("Username: " . $user . "<br>");
                    echo("Password (hashed): " . $pw . "<br>");
                } catch(Exception $e) {
                    echo("<h1>Oops!</h1>");
                    echo("<p>" . $e->getMessage() . "</p>");
                    echo("<a href='register.php'>Try again</a>");
                }
            ?>
        </main>
    </body>
</html>