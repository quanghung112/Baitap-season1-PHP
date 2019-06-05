
<html>
<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
<head>
    <title>Future Value Calculator</title>
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
<form method="post" action="display_result.php">
    <div class="login">
        <?php
        function Caculate($listprice, $discount)
        {
            $result = $listprice . "*" . $discount . "*0.01";
            $discountamount = eval('return '.$result.';');
            return $discountamount;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product=$_POST['ProductDescription'];
            $listprice = $_POST['ListPrice'];
            $discount = $_POST['DiscountPercent'];
            if ($product==""){
                echo '<h2>Product Discount Calculator</h2>';
                echo "<h3><d style='color:red'>ProductDescription is a required field</d></h3>";
                echo '<span>ProductDescription:</span>';
                echo '<input type="text" name="ProductDescription" size="25" placeholder="0"><br/>';
                echo '<span>ListPrice:</span>';
                echo '<input type="text" name="ListPrice" size="25" placeholder="0"><br/>';
                echo ' <span>DiscountPercent:</span>';
                echo '<input type="text" name="DiscountPercent" size="25" placeholder="0">(%)<br/>';
                echo '<input type="submit" id="submit" value="Caculate">';
            }else if ($listprice==""){
                echo '<h2>Product Discount Calculator</h2>';
                echo "<h3><d style='color:red'>ListPrice is a required field</d></h3>";
                echo '<span>ProductDescription:</span>';
                echo '<input type="text" name="ProductDescription" size="25" placeholder="0"><br/>';
                echo '<span>ListPrice:</span>';
                echo '<input type="text" name="ListPrice" size="25" placeholder="0"><br/>';
                echo ' <span>DiscountPercent:</span>';
                echo '<input type="text" name="DiscountPercent" size="25" placeholder="0">(%)<br/>';
                echo '<input type="submit" id="submit" value="Caculate">';
            }else if ($discount==""){
                echo '<h2>Product Discount Calculator</h2>';
                echo "<h3><d style='color:red'>DiscountPercent is a required field</d></h3>";
                echo '<span>ProductDescription:</span>';
                echo '<input type="text" name="ProductDescription" size="25" placeholder="0"><br/>';
                echo '<span>ListPrice:</span>';
                echo '<input type="text" name="ListPrice" size="25" placeholder="0"><br/>';
                echo ' <span>DiscountPercent:</span>';
                echo '<input type="text" name="DiscountPercent" size="25" placeholder="0">(%)<br/>';
                echo '<input type="submit" id="submit" value="Caculate">';
            } else {
                $discountamount = Caculate( $listprice,$discount);
                $price=$listprice-$discountamount;
                echo "<h3><span>ProductDescription: " . $product . "</span></h3>";
                echo "<h3><span>ListPrice: $" . $listprice . "</span></h3>";
                echo "<h3><span>Discount Percent: " . $discount . "%</span></h3>";
                echo "<h3 ><span>Discount Amount: " . $discountamount . "</span></h3>";
                echo "<h3 ><span>Discount Price: $" . $price . "</span></h3>";
            }
        }
        ?>
    </div>
</form>
</body>
</html>
<!--<html>-->
<!--<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">-->
<!--<head>-->
<!--    <title>Product Discount Calculator</title>-->
<!--    <style type="text/css">-->
<!--        .login {-->
<!--            height: 250px;-->
<!--            width: 500px;-->
<!--            margin: 0;-->
<!--            padding: 10px;-->
<!--            border: 1px #CCC solid;-->
<!--        }-->
<!---->
<!--        .login input {-->
<!--            padding: 5px;-->
<!--            margin: 5px;-->
<!--        }-->
<!--        span{-->
<!--            width: 200px;-->
<!--            display: inline-block;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<form method="post" action="display_discount.php">-->
<!--    <div class="login" >-->
<!--        <h2>Product Discount Calculator</h2>-->
<!--        <span>ProductDescription:</span>-->
<!--        <input type="text" name="ProductDescription" size="25" placeholder="0"><br/>-->
<!--        <span>ListPrice:</span>-->
<!--        <input type="text" name="ListPrice" size="25" placeholder="0"><br/>-->
<!--        <span>DiscountPercent:</span>-->
<!--        <input type="text" name="DiscountPercent" size="25" placeholder="0">(%)<br/>-->
<!--        <input type="submit" id="submit" value="Caculate">-->
<!--    </div>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->