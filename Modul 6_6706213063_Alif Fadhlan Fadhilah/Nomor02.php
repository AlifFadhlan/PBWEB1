<!DOCTYPE html>
<html>
<body>

<?php
$strings = array (
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
);
$get = array ('Abdullah','kucing', 'lucu', 'bermain');
$ganti = array ('Abdurrahman', 'bebek', 'gemuk', 'berenang');
$tukar = str_replace($get, $ganti, $strings);

foreach ($tukar as $hasil) {
    echo "$hasil <br>";
}
?>

</body>
</html>