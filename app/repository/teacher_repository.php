<?php 
require_once '../app/models/teacher_model.php';
require_once '../app/models/phan_cong_model.php';
 class TeacherRepository {
     
     function getAll(){
         $conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
         $teachers = array();
         $sql = "select * from giangvien";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $teacher = new TeacherModel();
                 $teacher->setMaGV($row['MAGV']);
                 $teacher->setHoTen($row['HOTEN']);
                 $teacher->setChuyenNganh($row['CHUYENNGANH']);
                 array_push($teachers,$teacher);
             }
         } else {
             echo "0 results";
         }
         return $teachers;
     }
     
     function hienThiLopDuocPhanCongBangId($id){
         $conn = new mysqli("localhost:3306", "root", "newPass", "quanlysinhvien1");
         $phanCongs = array();
         $sql = "select mh.sogio,mh.tenmh,l.tenlop,l.malop,gv.hoten,gv.chuyennganh from monhoc as mh, phancong as pc, lop as l, giangvien as gv
where pc.MAGV = gv.MAGV and  gv.MAGV = '".$id."' and mh.mamh=pc.mamh and l.malop=pc.malop;";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $phanCongDTO = new PhanCongDTO();
                 $phanCongDTO->setTenMH($row['tenmh']);
                 $phanCongDTO->setSoGio($row['sogio']);
                 $phanCongDTO->setMaLop($row['malop']);
                 $phanCongDTO->setTenLop($row['tenlop']);
                 $phanCongDTO->setHoTenGiangVien($row['hoten']);
                 $phanCongDTO->setChuyenNganh($row['chuyennganh']);
                 array_push($phanCongs,$phanCongDTO);
             }
         } else {
             echo "0 results";
         }
         return  $phanCongs;
     }
 }