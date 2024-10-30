<?php
class TrangChu_Model
{
    private $host = "localhost";
    private $username = "root";
    private $password = "0906578681";
    private $database = "ghichu";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Kết nối thất bại: " . $this->conn->connect_error);
        }
    }
    // public function add($masv, $hoten, $hinhanh, $diem)
    // {
    //     $querry = $this->conn->prepare("INSERT INTO sinhvien (MaSV, HoTen, HinhAnh,Diem) VALUES (?, ?, ?, ?)");
    //     $querry->bind_param("sssi", $masv, $hoten, $hinhanh, $diem);
    //     if ($querry->execute()) {

    //     } else {
    //         echo "Error: <br>" . $this->conn->error;
    //     }
    // }
    public function view()
    {
        $result = $this->conn->query("SELECT * FROM dulieu");
        $users = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row; // Lưu mỗi hàng vào mảng users
            }
        }
        return $users; // Trả về mảng các giảng viên
    }
    // public function delete($masvArray){
    //     if (empty($masvArray)) {
    //         echo "Không có sinh viên nào được chọn để xóa!";
    //         return;
    //     }
    //     $masvList = implode("','", $masvArray);
    //     $sql = "DELETE FROM sinhvien WHERE MaSV IN ('$masvList')";
    //     if ($this->conn->query($sql) === TRUE) {
    //         include "xoathanhcong.php";
    //     } else {
    //         echo "Lỗi: " . $this->conn->error;
    //     }
    // }
    

    public function close()
    {
        $this->conn->close();
    }
}