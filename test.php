<!-- <?php var_dump($_SERVER);?> -->

<?php echo $_SERVER["REQUEST_METHOD"]?>
<hr>
<?php echo $_SERVER["PHP_SELF"];

echo "<hr>";

echo date('Y-M-d H:i:s A' ,strtotime('2002-10-30') ) ,"<br>";
echo date('Y-M-d H:i:s A' ,strtotime('+3 Months') ) ,"<br>";
echo strtotime('30-1-2008') ,"<br>";

?>

