<html>
<head>
    <title>Date Of Birth</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <section>Date Of Birth</section>

            <table>
                <tr>
                    <td align="center">dd</td>
                    <td align="center">mm</td>
                    <td align="center">yyyy</td>
                </tr>
                <tr>
                    <td>
                        <input size="2" type="text" name="day"> /
                    </td>
                    <td>
                        <input size="2" type="text" name="month"> /
                    </td>
                    <td>
                        <input size="4" type="text" name="year">
                    </td>
                </tr>
            </table>
            <hr />

            <input name="submit" type="submit" value="Submit">

            <p>

                <?php
                if (isset($_REQUEST['submit'])) {
                    $day = $_REQUEST['day'];
                    if ($day == "") {
                        echo "Date cannot be empty";
                        return;
                    }

                    $month = $_REQUEST['month'];
                    if ($month == "") {
                        echo "Month and year cannot be empty";
                        return;
                    }

                    $year = $_REQUEST['year'];
                    if ($year == "") {
                        echo "Year cannot be empty";
                        return;
                    }

                    $date = $day . '/' . $month . '/' . $year;

                    if ($day == "" || $month == "" || $year == "" || $day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1971 || $year > 2021) {
                        echo $date . '.This date is invalid';
                        return;
                    }

                    echo $date . 'Successfylly Submitted.';
                }
                ?>

            </p>
        </fieldset>
    </form>
</body>
</html>