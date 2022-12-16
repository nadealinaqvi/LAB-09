Your Email is: <?php echo $_POST["email"]; ?><br>
Your passowrd is: <?php echo $_POST["password"]; ?> <br>
<?php
$emailErr = $_POST["email"];
$passErr = $_POST["password"];
//part1
if ($emailErr == "" || $passErr == "") {

    echo "<h3>Email And  Password is  required</h3>";
    echo "<br>";
} else {
    echo "<h3>Email and Password is Confirmed</h3>";
}
?>
<?php
echo ("\n Your Degree is ");
$radiobutton = $_POST['gridRadios'];
echo ($radiobutton);
?>
<br>
<?php
$checkbox = $_POST['checkbox'];
if ($checkbox == "") {
    echo ("False");
} else {
    echo ("True");
}
?>

<br><br>

<?php
echo "<h3>Sorting an Array</h3>";
function sortarray($arr, $string)
{
    if ($string == "ASC") {
        sort($arr);
    } elseif ($string == "DSC") {
        rsort($arr);
    } else {
        sort($arr);
    }
    $arrlength = count($arr);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $arr[$x];
        echo ",";
    }
}

$number = array("r ", "e", "i ", "h ", "m ", "o");
sortarray($number, "");
echo "<br>";
echo "<h3>Question 5</h3>";
if ($_POST["gridRadios"] == 'First Radio') {
    $random_array = range(0, 100);
    shuffle($random_array);
    echo "<strong>Random number array</strong><br>";
    foreach ($random_array as $val1) {
        echo "$val1";
    }
    echo "<br><strong>sort array</strong><br>";
    sortarray($random_array, " ");
} else {
    echo "You Selected 2<sup>nd</sup> Option<br>";
}

echo "<br>";
echo "<h3>Question 6</h3>";
if ($_POST["gridRadios"] == 'Second Radio') {
    $random_array = range(0, 100);
    shuffle($random_array);
    echo "<strong>Random number array</strong><br>";
    foreach ($random_array as $k =>  $val) {
        echo "$k=>  $val";
    }
    echo "<br><strong>sort array</strong><br>";
    sortarray($random_array, " ");
} else {
    echo "You Selected 1<sup>st</sup> Option<br>";
}
?>