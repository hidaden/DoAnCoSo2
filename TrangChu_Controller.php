<?php
include "SVModel.php";
$model = new SVModel();
$users = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action == "add") {

        // $masv = isset($_POST['masv']) ? $_POST['masv'] : "";
        // $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : "";
        // $hinhanh = isset($_POST['hinhanh']) ? $_POST['hinhanh'] : "";
        // $diem = isset($_POST['diem']) ? $_POST['diem'] : "";

        // $model->add($masv, $hoten, $hinhanh, $diem);
        // include "themthanhcong.php";

        // exit;
    } elseif ($action == "view") {
        $users = $model->view();
        include "hienthi.php";
    }
    //  elseif ($action == "delete") {
    //     if (isset($_POST['masv']) && is_array($_POST['masv'])) {
    //         $model->delete($_POST['masv']); 
    //     } else {
    //         echo "Vui lòng chọn ít nhất một sinh viên để xóa!";
    //     }
    // }
}
$model->close();
?>