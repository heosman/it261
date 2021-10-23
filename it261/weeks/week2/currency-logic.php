<?php

/* After traveling the world, you come home with the following:
- ruble (= 0.013 dollars)
- pound sterling (= 1.28 dollars)
- Canadian dollar (= 0.79 dollars)
- euro (= 1.18 dollars)
- yen (= 0.0094 dollars)
How much money do you actually have in American Dollars?
*/

// rubles = 10007
// pound sterlings = 500
// canada = 5000
// euro = 1200
// yen = 2000

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency Logic</title>
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
<td>$130.09</td>
</tr>
<tr>
<th>Pound Sterlings</th>
<td>$640.00</td>
</tr>
<tr>
<th>Canadian Dollars</th>
<td>$3950.00</td>
</tr>
<tr>
<th>Euros</th>
<td>$1416.00</td>
</tr>
<tr>
<th>Yen</th>
<td>$18.80</td>
</tr>
<tr class="total">
<th>Total</th>
<td><strong>$6154.89</strong></td>
</tr>
</table>
</body>
</html>