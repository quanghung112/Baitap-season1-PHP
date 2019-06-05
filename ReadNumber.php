<html>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px black solid;
            border-radius: 10px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 5px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<form method="post">
    <input type="text" name="number" placeholder="Nhap so">
    <input type="submit" id="submit" value="Read">
</form>
</body>
</html>
<?php
function ReadNumber0to9($num)
{
    switch ($num) {
        case 0:
            return "zero";
        case 1:
            return "one";
        case 2:
            return "two";
        case 3:
            return "three";
        case 4:
            return "four";
        case 5:
            return "five";
        case 6:
            return "six";
        case 7:
            return "seven";
        case 8:
            return "eight";
        case 9:
            return "nine";
    }
}

function ReadNumber10to19($num){
    switch ($num) {
        case 10:
            return "ten";
        case 11:
            return "eleven";
        case 12:
            return "twelfth";
        case 13:
            return "thirteen";
        case 14:
            return "fourteen";
        case 15:
            return "fifteen";
        case 16:
            return "sixteen";
        case 17:
            return "seventeen";
        case 18:
            return "eighteen";
        case 19:
            return "nineteen";

    }
}
function ReadNumber20to99($num){
    switch ($num[0]){
        case 2:
            $firstRead= "twenty";
            break;
        case 3:
            $firstRead= "thirty";
            break;
        case 4:
            $firstRead= "fourty";
            break;
        case 5:
            $firstRead= "fifty";
            break;
        case 6:
            $firstRead= "sixty";
            break;
        case 7:
            $firstRead= "seventy";
            break;
        case 8:
            $firstRead= "eighty";
            break;
        case 9:
            $firstRead= "ninety";
            break;
    }
    if ($num[1]>0){
        $secondRead=ReadNumber0to9($num[1]);
    }
    return $firstRead." ".$secondRead;
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $number = $_POST['number'];
    if ($number < 10) {
        $result = ReadNumber0to9($number);
    } else if ($number >= 10 && $number < 20) {
        $result = ReadNumber10to19($number);
    }else if ($number>=20&&$number<100){
        $result=ReadNumber20to99($number);
    }
    echo $result;
}
?>
