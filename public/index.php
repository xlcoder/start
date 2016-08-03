<?php 
    require_once 'header.php';
    use Carbon\Carbon;

?>

<br>
<?php 
    echo Carbon::now("Asia/Shanghai");
    $data = $db->select("employee",["fname","lname"]);
?>
<br>
<br>
<?php 
foreach ($data as $name => $keys) {
    echo "Employee Name: " . $keys["fname"] . " " . $keys["lname"] . "<br>"; 
}
?>
<br>

<?php 
$date = new Datetime(null,new DateTimeZone("Asia/Shanghai"));
echo $date->format("Y");
?>

<?php 
    require_once 'footer.php';
?>

