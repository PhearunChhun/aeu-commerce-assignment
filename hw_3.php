<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <h1 class="text-2xl font-bold mb-4">លំហាត់ 1: ផ្ទះជួល</h1>

    <form method="post" class="bg-white shadow-md rounded p-4 mb-8">
        <label class="block mb-2">បញ្ចូលចំនួនបន្ទប់ជាន់ផ្ទាល់ដី (m):</label>
        <input type="number" name="m" class="border p-2 w-full mb-4" required>

        <label class="block mb-2">បញ្ចូលចំនួនបន្ទប់ជាន់ទី១ (n):</label>
        <input type="number" name="n" class="border p-2 w-full mb-4" required>

        <button type="submit" name="rent_calc" class="bg-blue-500 text-white px-4 py-2 rounded">គណនា</button>
    </form>

    <?php
    if (isset($_POST['rent_calc'])) {
        $m = (int)$_POST['m']; // ground floor rooms
        $n = (int)$_POST['n']; // first floor rooms

        $income = ($m * 50) + ($n * 40);
        echo "<div class='p-4 bg-green-100 rounded mb-6'>";
        echo "ចំណូលសរុបក្នុងខែ = <b>\$$income</b><br>";

        if ($income > 512) {
            $donate = $income * 0.10;
            $after = $income - $donate;
            echo "ព្រោះ >512$, គាត់បានដក 10% = <b>\$$donate</b><br>";
            echo "ចំណូលនៅសល់ = <b>\$$after</b>";
        }
        echo "</div>";
    }
    ?>

    <h1 class="text-2xl font-bold mb-4">លំហាត់ 2: Variables a, b, c, d</h1>

    <form method="post" class="bg-white shadow-md rounded p-4">
        <label class="block mb-2">a:</label>
        <input type="number" name="a" class="border p-2 w-full mb-4" required>
        <label class="block mb-2">b:</label>
        <input type="number" name="b" class="border p-2 w-full mb-4" required>
        <label class="block mb-2">c:</label>
        <input type="number" name="c" class="border p-2 w-full mb-4" required>
        <label class="block mb-2">d:</label>
        <input type="number" name="d" class="border p-2 w-full mb-4" required>

        <button type="submit" name="math_calc" class="bg-purple-500 text-white px-4 py-2 rounded">គណនា</button>
    </form>

    <?php
    if (isset($_POST['math_calc'])) {
        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        $c = (int)$_POST['c'];
        $d = (int)$_POST['d'];

        $expr1 = ($a ** 2) + ($b ** 2) + (2 * $a * $b);
        $expr2 = ($a + $d) * ($b + $c);

        echo "<div class='p-4 bg-yellow-100 rounded mt-6'>";
        echo "a² + b² + 2ab = <b>$expr1</b><br>";
        echo "(a + d)(b + c) = <b>$expr2</b>";
        echo "</div>";
    }
    ?>

</body>
</html>
