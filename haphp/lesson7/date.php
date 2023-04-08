<?php
echo date('d'); echo "<br>";
echo date('Y');echo "<br>";
echo date('m');echo "<br>";
echo date('H');echo "<br>";
echo date('i');echo "<br>";
echo date('s');echo "<br>";
echo date('Y/d/m');echo "<br>";
echo date_default_timezone_get();echo "<br>";
date_default_timezone_set('Asia/Yerevan');
echo date('H');echo "<br>";
echo date_default_timezone_get();echo "<br>";
echo date('Y-m-d H:i:s');echo "Y-m-d H:i:s <br>";
echo time();
$date = "2022/02/01"; //Y-m-d 2022-01-20
echo "<hr>";
echo date('Y-m-d', strtotime($date));
echo "<br>";
echo date('Y-m-d', time() - 60 * 60 *24);
echo "<br>";
echo date('Y-m-d', time() +"1 day");
echo "<br>";
//echo date('Y-m-d', );
echo mktime(true);
