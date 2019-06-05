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
        <h2>Future Value Calculator</h2>
        <input type="text" name="InventmentAmount" size="25" placeholder="0">
        <input type="text" name="YearlyInterestRate" size="25" placeholder="0">
        <input type="text" name="NumberofYears" size="25" placeholder="0">
        <input type="submit" id="submit" value="Caculate">
    </div>
</form>
</body>
</html>
