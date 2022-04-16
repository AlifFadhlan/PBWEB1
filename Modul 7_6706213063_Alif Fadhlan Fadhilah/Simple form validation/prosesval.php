<html>
<body>

<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
}else{
    die ("Anda tidak dapat mengakses halaman ini");
}
if (!empty($name)){
    echo "Thanks, <b> ". $_POST["name"]."</b> <br>";
}else{
    echo "please fill name <br>";
}
if (!empty($email)){
    echo "Your email is:, ". $_POST["email"]."<br>";
}else{
    echo "please fill email <br>";
}
if (!empty($website)){
    echo "Your website is ". $_POST["website"]."<br>";
}else{
    echo "please fill website <br>";
}
if (!empty($comment)){
    echo "Comment ". $_POST["comment"]."<br>";
}else{
    echo "Comment : <br>";
}
if (!empty($gender)){
    echo "You are ". $_POST["gender"];
}else{
    echo "please fill gender";
}
?>

</body>
</html>