<html>
<head>
    <title>Blood Group</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <section>Blood Group</section>
            <select name="BloodGroup">
                <option value=""> </option> 
                <option value="">A+</option> 
                <option value="">A+</option>
                <option value="">A-</option>
                <option value="">B+</option>
                <option value="">B-</option>
                <option value="">O+</option>
                <option value="">O-</option>
                <option value="">AB+</option>
                <option value="">AB-</option>
        </select>
        <hr>
        <input name="submit" type="submit" value="Submit">
            <p>

                <?php
                if (isset($_REQUEST['submit'])) {
                if(isset($_REQUEST['BloodGroup'])){
                    $BloodGroup = $_REQUEST['BloodGroup'];
                    echo $BloodGroup . 'Successfully Selected.';
                }
                else{
                    echo 'An option must be selected';
                }
            }
            ?>

        </p>
    </form>
</body>
</html>