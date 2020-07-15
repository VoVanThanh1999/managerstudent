<?php 
require_once '../app/repository/class_repository.php';
class class_Student extends Controller{
     
    function index() {
        $classDAO = new ClassRepository();
        $class=    $classDAO->getAll();
        $this->view("class_student",$class);
      
    }   
    
    function hienThiDanhSachSinhVienBangMaLop($id){
        echo "<h1>Danh sách sinh viên của lớp ".$id."</h1>";
        $classDAO = new ClassRepository();
        $sinhVien =  $classDAO->hienThiSinhVienTrongLopBangMaLop($id);
        $this->view('index', $sinhVien);	
    }
    
}

?>