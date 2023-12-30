<?php 

// looping 
// for 
for ( $i = 0; $i < 5; $i ++){
    echo "hello world! <br>";
}

// while
$i = 0;
while ( $i < 5) {
    echo "hello world! <br>";
    $i++;
}

// do..while
$i = 0;
do {
    echo "hello world! <br>";
    $i++;
} while ( $i < 5 )

// making tables from looping on html
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 2</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) {?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j ++){ ?>
                    <td> <?php echo "$i,$j" ?></td>
                    <?php } ?>
            </tr>
            <?php } ?>
    </table>
</body>
</html>