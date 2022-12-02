<?php
$username = "db-admin"; // Khai báo username
$password = "654321";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "btl";      // Khai báo database

// Kết nối database
$con = mysqli_connect($server, $username, $password, $dbname);
$student = mysqli_connect($server,'db-student','123456',$dbname);
$teacher = mysqli_connect($server,'db-teacher','111111',$dbname);
$stdcare = mysqli_connect($server,'db-customerserice','222222',$dbname);
$bra_mng = mysqli_connect($server,'db-manager','333333',$dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$con) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
   // echo "Kết nối thành công sẽ tiếp tục dòng code bên dưới đây."
?>