<?php 
require_once '../vendor/autoload.php';
require_once '../config/database.php';
require_once "../config/seo.php";
require_once "../config/config.php";
require_once "Pokemon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    
</body>
</html>

<?php
$faker = Faker\Factory::create("zh_CN");
$faker->addProvider(new Faker\Provider\Pokemon($faker));
echo "<br>";
echo $faker->pokemon;
echo "<br>";
var_dump($faker->datetime($max = "now", $timezone = "Asia/Shanghai")) ;


echo $faker->year;
echo $faker->month; //number representation of a month
echo $faker->monthName;
echo $faker->timezone; //valid php timezone (http://php.net/manual/en/timezones.php)
echo $faker->time; //string time
//echo $faker->dateTime; //datetime object
echo $faker->unixTime; //unix timestamp
echo "<br>";
echo $faker->name;
echo "<br>";
echo $faker->address;
echo "<br>";
echo $faker->city;
echo "<br>";
echo $faker->state;
echo "<br>";
echo $faker->postcode;
echo $faker->streetName;
echo $faker->streetAddress;
echo "<br>";
echo $faker->email;
echo "<br>";
echo $faker->text;
echo "<br>";
echo password_hash($faker->password,PASSWORD_DEFAULT);
echo "<br>";
echo $faker->isbn13;
echo "<br>";
for ($i = 0; $i < 5; $i++) {
    echo "<br>";
    echo $faker->paragraph($nbSentences = 10) . "<br>";
};
echo "<br>";
echo $faker->text;

?>

<br>
<img src="<?= $faker->imageUrl($width = 320, $height = 200, "cats") ?>" alt="">
<br>
<img src="<?= $faker->imageUrl($width = 320, $height = 200 ) ?>" alt="">
<br>
<img src="<?= $faker->imageUrl($width = 1024, $height = 768) ?>" alt="">


