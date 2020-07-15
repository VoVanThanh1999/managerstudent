<?php
/**
 * 
 */
class SinhVienRepository  {	
	
	function getAll(){
		$conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
		$sinhviens = array();
		$sql = "SELECT * FROM SinhVien;";
		$result = $conn->query($sql);
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

	function findById($idSinhVien){
		$conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
		$sql =" SELECT * FROM SinhVien WHERE MASV = ".$idSinhVien ." ";
		$result = $conn->query($sql);
		$sinhVien = new SinhVien();
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
		   	 $sinhVien->setMaSV($row['MASV']);
		   	 $sinhVien->setHoTen($row['HOTEN']);
		   	 $sinhVien->setNgaySinh($row['NGAYSINH']);
		   	 $sinhVien->setGioiTinh($row['GIOITINH']);
		   	 $sinhVien->setMaLop($row['MALOP']);	
		  }
		} else {
		  echo "0 results";
		}
		return $sinhVien;
	}
    
	function deleteById($id){
	    $conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
	    $sql =" DELETE   FROM SinhVien WHERE MASV = ".$id." ";
	    $result = $conn->query($sql);
	    if ($result==true) {
	        return true;
	    }
	    return false;
	}
	
	function editStudent(SinhVien $sv){
		$flag = false;
		$conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		$sql = "UPDATE sinhvien set HOTEN = ?,  NGAYSINH = ? WHERE MASV = ?";
		$stmt = $conn->prepare($sql);
		$hoten = $sv->getHoTen();
		$ngaySinh = $sv->getNgaySinh();
		$MASV = $sv->getMaSV();
		$stmt->bind_param("ssd",$hoten , $ngaySinh ,$MASV);
		$stmt->execute();
		if ($stmt->error) {
			$flag = false;
		}else{
			$flag = true;
		}
		$stmt->close();
		return $flag;
	}
	function getPointByIdSinhVien($id){
	    $conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
	    if ($conn->connect_error) {
	        die("Connection failed: " . $conn->connect_error);
	    }
	    $sql = "select * from diemthanhphan where masv=".$id."";
	    $points = array();
	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {
	           $point = new Point();
	           $point->setMaMH($row['MAMH']);
	           $point->setLanThi1($row['LANTHI']);
	           $point->setDiemThi($row['DIEMTHI']);
	           array_push($points,$point);
	        }
	    } else {
	        echo "0 results";
	    }
	    return  $points;
	}
}