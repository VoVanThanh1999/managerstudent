<?php
/**
 * 
 */
require_once '../app/models/class_student_model.php';
require_once '../app/models/user.php';
class ClassRepository  {	
	
	function getAll(){
		$conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
		$lops = array();
		$sql = "SELECT * FROM lop;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
		     $lop = new Class_Model();
		     $lop->setMaLop($row['MALOP']);
		     $lop->setTenLop($row['TENLOP']);
		     $lop->setMaKhoa($row['MAKHOA']);
		     array_push($lops,$lop);
		  }
		} else {
		  echo "0 results";
		}
		return $lops;
	}
    
	function hienThiSinhVienTrongLopBangMaLop($maLop){
	    $conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
	    $sql="select * from lop as l,sinhvien as sv
                where l.malop = sv.malop and l.malop = '".$maLop."';";
	    $result = $conn->query($sql);
	    $sinhviens = array();
	    if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {
	            $sinhVien = new SinhVien();
	            $sinhVien->setMaSV($row['MASV']);
	            $sinhVien->setHoTen($row['HOTEN']);
	            $sinhVien->setNgaySinh($row['NGAYSINH']);
	            $sinhVien->setGioiTinh($row['GIOITINH']);
	            $sinhVien->setMaLop($row['MALOP']);
	            array_push($sinhviens,$sinhVien);
	        }
	    } else {
	        echo "0 results";
	    }
	    return $sinhviens;
	    
	    
	}
	
    

}