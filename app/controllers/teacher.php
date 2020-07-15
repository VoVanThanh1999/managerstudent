<?php 
require_once '../app/init.php';
require_once '../app/repository/teacher_repository.php';
require_once '../app/repository/class_repository.php';
class Teacher extends Controller {
    public function index(){    
        $teacherDAO  =new TeacherRepository();
        $teacher = $teacherDAO->getAll();
        $this->view('teacher_view',$teacher);	
    }
    
    public function getLopDuocPhanCongByIdTeacher($id){
        $teacherDAO  =new TeacherRepository();
        $phanCong = $teacherDAO->hienThiLopDuocPhanCongBangId($id);
        $this->view('lop_duoc_phan_cong',$phanCong);
    }
    
    function hienThiDanhSachSinhVienBangMaLop($id){
        echo "<h1>Danh sách sinh viên của lớp ".$id."</h1>";
        $classDAO = new ClassRepository();
        $sinhVien =  $classDAO->hienThiSinhVienTrongLopBangMaLop($id);
        $this->view('index', $sinhVien);
    }
    
}