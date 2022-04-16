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
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        echo "Only letters and white space allowed <br>";
      }else{
          $name = test_input($name);
          echo "Thanks, <b> ". $name."</b> <br>";
      }
}else{
    echo "please fill name <br>";
}
if (!empty($email)){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format <br>";
      }else{
        $email = test_input($email);
          echo "Your email is:, ". $email."<br>";
      }
}else{
    echo "please fill email <br>";
}
if (!empty($website)){
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        echo "Invalid URL <br>";
      }else{
        $website = test_input($website);
          echo "Your website is ". $website."<br>";
      }
}else{
    echo "please fill website <br>";
}
if (!empty($comment)){
    $comment = test_input($comment);
    echo "Comment ". $comment."<br>";
}else{
    echo "Comment : <br>";
}
if (!empty($gender)){
    echo "You are ". $gender;
}else{
    echo "please fill gender";
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

</body>
</html>