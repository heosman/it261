<?php

/* After traveling the world, you come home with the following:
- ruble (= 0.013 dollars)
- pound sterling (= 1.28 dollars)
- Canadian dollar (= 0.79 dollars)
- euro (= 1.18 dollars)
- yen (= 0.0094 dollars)
How much money do you actually have in American Dollars?
*/

$rubles = 10007;
$rubles *= 0.013;
$friendly_rubles = number_format($rubles, 2);

$pound = 500;
$pound *= 1.28;
$friendly_pound = number_format($pound, 2);

$canada = 5000;
$canada *= 0.79;
$friendly_canada = number_format($canada, 2);

$euro = 1200;
$euro *= 1.18;
$friendly_euro = number_format($euro, 2);

$yen = 2000;
$yen *= 0.0094;
$friendly_yen = number_format($yen, 2);

$total = $rubles + $pound + $canada + $euro + $yen;
$friendly_total = number_format($total, 2);


?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency</title>
<style>
    table {
        margin: 20px auto;
        border: 2px solid brown;
        border-collapse: collapse;
    }

    th {
        text-align: left;
        width: 130px;
        padding: 5px;
    }

    td {
        border: 1px solid brown;
        width: 75px;
        padding: 5px;
    }

    .total {
        border: 2px solid brown;
    }
</style>
</head>
<body>

<table>
<tr>
<th>Rubles</th>
<td><?php echo '$'.$friendly_rubles.' '; ?></td>
</tr>
<tr>
<th>Pound Sterlings</th>
<td><?php echo '$'.$friendly_pound.' '; ?></td>
</tr>
<tr>
<th>Canadian Dollars</th>
<td><?php echo '$'.$friendly_canada.' '; ?></td>
</tr>
<tr>
<th>Euros</th>
<td><?php echo '$'.$friendly_euro.' '; ?></td>
</tr>
<tr>
<th>Yen</th>
<td><?php echo '$'.$friendly_yen.' '; ?></td>
</tr>
<tr class="total">
<th>Total</th>
<td><strong><?php echo '$'.$friendly_total.' '; ?></strong></td>
</tr>
</table>
</body>
</html>