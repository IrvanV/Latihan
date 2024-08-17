<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "selec * from user where username = '$username' and password = 'password'";
$result = mysqli_query ($connect, $query);
$fectResult = mysqli_fetch_assoc($result);
$rowcount = mysqli_num_rows(result);

if($rowcount>0) {
    session_start ();
    $_SESSION ['username'] = $username;
    $_SESSION ['status'] = login;
}
if($fectResult['role'] =='admin') {
    echo "Anda Berhasil Login";
    echo "<a href='adminDasboard.php>Admin</a>";
}elseif ($fectResult['role']=='user') {
    echo "Anda Berhasil Login";
    echo "<a href='userDasboard.php>Ueser Dasboard</a>";
}
else {
    echo "Anda Gagal login";
}

mysqli_close ($connect);
?>