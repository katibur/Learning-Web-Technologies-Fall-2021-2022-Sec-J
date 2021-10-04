<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Email</legend>
            <input type="text" name="email" value="">
            <hr>
            <input type="submit" name="submit" value="Submit">
            <p>

                <?php

                function validemail($email)
                {
                    $indexOfa = -1;
                    $indexOfDot = -1;

                    for ($i = 0; $i < strlen($email); ++$i) {
                        if ($email[$i] == '@') {
                            $indexOfa = $i;
                        }
                        if ($email[$i] == '.') {
                            $indexOfDot = $i;
                        }
                    }

                    if ($indexOfa == -1 || $indexOfDot == -1) {
                        return false;
                    }

                    if ($indexOfa < 1 || $indexOfDot == strlen($email) - 1 || $indexOfDot - $indexOfa < 2) {
                        return false;
                    }
                    return true;
                }

                if (isset($_REQUEST['submit'])) {
                    $email = $_REQUEST['email'];
                    if ($email == "") {
                        echo "Email can not be empty";
                        return;
                    }

                    if(!validemail($email)){
                        echo $email.'.This email is invalid ';
                        return;
                    }

                    echo $email.'Successfylly Submitted.';
                }
                ?>
                
            </p>
        </fieldset>
    </form>
</body>
</html>