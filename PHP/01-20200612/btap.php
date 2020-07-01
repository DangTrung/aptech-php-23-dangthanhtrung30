<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


    <form action="" method="post">
    Name : <input type="text" name=" name">
    <br>
    Email: <input type="text" name="email" id="">
    <br>
    website: <input type="text" name="website">
    <br>
    Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea>
    <br>
    Gender: 
    <input type="radio" name="gender" value="felmale">felmale
    <input type="radio" name="gender" value="male"> male 
    <input type="radio" name="gender" value="other"> other 
    <input type="submit" value="summit" name="summit">
    </form>

    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>