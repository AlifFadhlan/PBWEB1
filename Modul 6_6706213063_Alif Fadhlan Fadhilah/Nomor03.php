<!DOCTYPE html>
<html>
<body>

<?php
$str = 'My Password';
$user = 'username';
echo sprintf("Hash password dengan md5 dari %s adalah %s\n", $str, md5($str.$user));
echo sprintf("Hash password dengan sha1 dari %s adalah %s\n", $str, sha1($str.$user));
echo sprintf("Hash password dengan gost dari %s adalah %s\n", $str, hash('gost', $str.$user));
?>

</body>
</html>