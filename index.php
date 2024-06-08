<?php

date_default_timezone_set('Asia/Yekaterinburg');
$title = 'Lesson 16';
$h1 = 'Title h1';

function currentTime() : string {
    $hour = intval(date('H'));
    $minute = intval(date('i'));

    if (($hour >= 5 && $hour <= 20) || $hour == 0) {
        $hourText = ' часов ';
    } elseif (($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour <= 24)) {
        $hourText = ' часа ';
    } else {
        $hourText = ' час ';
    }

    if ($minute > 20 || $minute < 10) {
        if ($minute % 10 == 1)
            $minuteText = ' минута';
        else if ($minute % 10 == 2 || $minute % 10 == 3 || $minute % 10 == 4)
            $minuteText = ' минуты';
        else $minuteText = ' минут';
    } else $minuteText = ' минут';

    return $hour . $hourText . $minute . $minuteText;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
<h1><?php echo $h1 ?></h1>
<h2>Текущее время: <?php print_r(currentTime()) ?></h2>
</body>
</html>