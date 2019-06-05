
<html>
<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
<head>
    <title>Future Value Calculator</title>
    <style type="text/css">
        .login {
            height: 250px;
            width: 280px;
            margin: 0;
            padding: 10px;
            border: 1px #CCC solid;
        }

        .login input {
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<form method="post" action="display_result.php">
    <div class="login">
        <?php
        function Caculate($present, $rate,$year)
        {
            $future = $present . "+(" . $rate . "*" . $present . "/100)*".$year;
            $result = eval('return '.$future.';');
            return $result;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $inventment = $_POST['InventmentAmount'];
            $rate = $_POST['YearlyInterestRate'];
            $year = $_POST['NumberofYears'];
            if ($inventment==""){
                echo '<h2>Future Value Calculator</h2>';
                echo "<h3><span style='color:red'>Investment is a required field</span></h3>";
                echo '<input type="text" name="InventmentAmount" size="25" placeholder="0">';
                echo '<input type="text" name="YearlyInterestRate" size="25" placeholder="0">';
                echo '<input type="text" name="NumberofYears" size="25" placeholder="0">';
                echo '<input type="submit" id="submit" value="Caculate">';
            }else if ($rate==""){
                echo '<h2>Future Value Calculator</h2>';
                echo "<h3><span style='color:red'>Rate is a required field</span></h3>";
                echo '<input type="text" name="InventmentAmount" size="25" placeholder="0">';
                echo '<input type="text" name="YearlyInterestRate" size="25" placeholder="0">';
                echo '<input type="text" name="NumberofYears" size="25" placeholder="0">';
                echo '<input type="submit" id="submit" value="Caculate">';
            }else if ($year==""){
                echo '<h2>Future Value Calculator</h2>';
                echo "<h3><span style='color:red'>Number of Years is a required field</span></h3>";
                echo '<input type="text" name="InventmentAmount" size="25" placeholder="0">';
                echo '<input type="text" name="YearlyInterestRate" size="25" placeholder="0">';
                echo '<input type="text" name="NumberofYears" size="25" placeholder="0">';
                echo '<input type="submit" id="submit" value="Caculate">';
            } else {
                $result = Caculate($inventment, $rate,$year);
                echo "<h3><span>Inventment Amount: $" . $inventment . "</span></h3>";
                echo "<h3><span>Yearly Interest Rate: " . $rate . "%</span></h3>";
                echo "<h3><span>Number of Years: " . $year . "</span></h3>";
                echo "<h3 ><span>Future Value: $" . $result . "</span></h3>";
            }
        }
        ?>
    </div>
</form>
</body>
</html>