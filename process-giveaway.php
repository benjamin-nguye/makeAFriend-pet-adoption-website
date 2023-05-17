<?php

session_start();
echo $_SESSION['user'] . "<br>";

$dog_cat_choice = $_POST['dog-cat-choice'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$along_dog = $_POST['along-dog'];
$along_cat = $_POST['along-cat'];
$along_family = $_POST['along-family'];
$comments = $_POST['comments'];
$name = $_POST['current-name'];
$owner_email = $_POST['owner-email'];

echo $dog_cat_choice . "<br>";
echo $breed . "<br>";
echo $age . "<br>";
echo $gender . "<br>";
echo $along_dog . "<br>";
echo $along_cat . "<br>";
echo $along_family . "<br>";
echo $comments . "<br>";
echo $name . "<br>";
echo $owner_email . "<br>";

$file_name = "pet-information.txt";
$id = 1;

if (file_exists($file_name)) {
    $reading = fopen($file_name, "r");

    while (($line = fgets($reading)) !== false) {
        $last_line = $line;
    }
    fclose($reading);

    $data = explode(":", $last_line);
    $id = $data[0] + 1;
 }

$handle = fopen($file_name, "a");
fwrite($handle, $id . ":" . $_SESSION['user'] . ":" . $dog_cat_choice . ":" . $breed . ":" . $age . ":" . $gender . ":" . $along_dog . ":" . $along_cat . ":" . $along_family . ":" . $comments . ":" . $name . ":" . $owner_email . "\n");

