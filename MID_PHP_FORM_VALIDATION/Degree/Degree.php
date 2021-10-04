<html>
<head>
    <title>Degree</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degreeSSC" value="SSC"> SSC
            <input type="checkbox" name="degreeHSC" value="HSC"> HSC
            <input type="checkbox" name="degreeBSc" value="BSc"> BSc
            <input type="checkbox" name="degreeMSc" value="MSc"> MSc
        </fieldset>
        <br>

        <input type="submit" name="submit" value="Submit">

        <p>

            <?php
            if (isset($_REQUEST['submit'])) {
                $Count = 0;
                $Count += isset($_REQUEST['degreeSSC'])?1:0;
                $Count += isset($_REQUEST['degreeHSC'])?1:0;
                $Count += isset($_REQUEST['degreeBSc'])?1:0;
                $Count += isset($_REQUEST['degreeMSc'])?1:0;
                
                if($Count<2){
                    echo 'At least two must be selected';
                    return;
                }
                echo 'Successfully Selected.';
            }
            ?>

        </p>
    </form>
</body>
</html>