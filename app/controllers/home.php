<?php
require_once '../app/dbh.inc.php';
require_once '../app/repository/SinhVienRepository.php';
require_once '../app/service/sinhvienservice.php';
require_once '../app/models/User.php';
class Home extends Controller
{

	public function index(){
		$SinhViens =  new SinhVienRepository();
		$datas = $SinhViens->getAll();
		$this->view('index',$SinhViens->getAll());	
	}
	public function getById($id){
		$SinhViens =  new SinhVienRepository();
		$this->view('editsinhvien',$SinhViens->findById($id));	
	}
	
	public function deleteById($id){
	    $sinhVien =  new SinhVienRepository();
	    $sinhVien->deleteById($id);
	    header('Location:/mvc/public/home/index' ); exit();
	}
	
	public function editById(){
		$id = $_POST['fmasv'];
		$hoTen = $_POST['fhoten'];
		$ngaySinh = $_POST['fnamsinh'];
		$SinhViens =  new SinhVienRepository();
		$sinhVien = new SinhVien();
		$sinhVien->setMaSV($id);
		$sinhVien->setNgaySinh($ngaySinh);
		$sinhVien->setHoTen($hoTen);
		$val = $SinhViens->editStudent($sinhVien);
		if ($val == true) {
			# code...
			header('Location:/mvc/public/home/index' ); exit();
		}else{
			header('Location:/mvc/public/home/getById/'.$id); exit();
		}
	}
	public function getPointByIdSinhVien($id){
	    $sinhVienService = new SinhVienService();
	    $sinhVien = $sinhVienService->getPointStudentByIdStudent($id);
	    $this->view('pointstudent',$sinhVien);	
	}
}