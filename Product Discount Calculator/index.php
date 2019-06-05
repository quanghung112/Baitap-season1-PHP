
<html>
<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
<head>
    <title>Product Discount Calculator</title>
    <style type="text/css">
        .login {
            height: 350px;
            width: 500px;
            margin: 0;
            padding: 10px;
            border: 1px #CCC solid;
        }

        .login input {
            padding: 5px;
            margin: 5px;
        }
        span{
            width: 200px;
            display: inline-block;
        }
    </style>
</head>
<body>
<form method="post" action="display_discount.php">
    <div class="login" >
        <h2>Product Discount Calculator</h2>
        <span>ProductDescription:</span>
        <input type="text" name="ProductDescription" size="25" placeholder="0"><br/>
        <span>ListPrice:</span>
        <input type="text" name="ListPrice" size="25" placeholder="0"><br/>
        <span>DiscountPercent:</span>
        <input type="text" name="DiscountPercent" size="25" placeholder="0">(%)<br/>
        <input type="submit" id="submit" value="Caculate">
    </div>
</form>
</body>
</html>