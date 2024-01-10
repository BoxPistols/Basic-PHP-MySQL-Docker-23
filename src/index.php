<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css" />
</head>

<body>
    <h1>The PHP</h1>
    <?php echo "Hello!" . "<br>"; ?>

    <?php
    $i = 100;

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
    $i = "日本語";
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
</body>

</html>