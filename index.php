<?php
include_once('navbar.php');
include_once('sidebar.php');

// logic untuk menangkap request dari halaman lain
// 
// jika ada request dari url browser berupa tulisan HAL
// maka arahkan ke halaman yang di request atau sesuai request
if (!empty($_REQUEST['hal'])) {
    $hal = $_REQUEST['hal'];
    include_once $hal . '.php';
} else {
    // jika tidak ada request HAL di url browser arahkan ke home.php
    include_once 'home.php';
}

include_once 'footer.php';
