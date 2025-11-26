<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вариант 4 — вычисление функции</title>
</head>
<body>

<h2>Вычисление функции</h2>
<p>Формула: <b>y = (1 + a)² / (a · b)</b></p>

<form method="post">
    <label>Введите a: </label>
    <input type="number" name="a" step="any" required><br><br>

    <label>Введите b: </label>
    <input type="number" name="b" step="any" required><br><br>

    <button type="submit">Рассчитать</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];

    if ($a == 0 || $b == 0) {
        echo "<b>Ошибка:</b> значения a и b не должны быть равны 0.";
    } else {
        $y = pow(1 + $a, 2) / ($a * $b);

        echo "<h3>Результат:</h3>";
        echo "a = $a <br>";
        echo "b = $b <br>";
        echo "<b>y = $y</b>";
    }
}
?>

</body>
</html>
