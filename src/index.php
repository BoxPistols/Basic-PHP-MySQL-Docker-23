<?php
include 'header.php';
?>

<h2>Form</h2>
<form action="index.php" method="POST">
  <label>名前: <input type="text" name="target_name"></label>
  <input type="submit" value="送信">
</form>
<!-- target_name -->
<?php
date_default_timezone_set('Asia/Tokyo');
// echo date('H') . "<br>";
echo ("Now:") . date('Y/m/d H:i:s') . "<br>";

$name = $_POST['target_name'] ?? 'here...';

if (isset($_POST['target_name'])) {
  echo "Hello, " . $name . "<br>";
  $_POST['target_name'];
} else {
  echo $name;
}
?>

<hr>

<h2>Basic</h2>

<?php
// $i = mt_rand(1, 6);
$i = mt_rand() % 100;

var_dump($i);
echo "<br>";

++$i;
var_dump($i);
echo "<br>";

$i++;
var_dump($i);
echo "<br>";

echo '$i';

echo "<br>";
// unset($i);
$i = "日本語?";
var_dump($i);
echo "<br>";

echo "<hr>";
?>
<!-- 関数 -->
<?php
function checkNumber($number)
{
  if ($number > 1) {
    throw new Exception('The number is greater than 1');
  }
}
// Try Catch block
try {
  checkNumber(10);
} catch (Exception $e) {
  echo $e->getMessage();
}
?>

<?
/* php phpinfo(); */
?>
</main>
</body>

</html>