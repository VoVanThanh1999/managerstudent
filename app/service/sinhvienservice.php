<?php
require_once '../app/repository/SinhVienRepository.php';
require_once '../app/models/User.php';
class SinhVienService{
    /**
     * @author v� th�nh
     *
     */
    public function getPointStudentByIdStudent($idSV){
        $sinhVienDAO = new SinhVienRepository();
        $sinhVien = $sinhVienDAO->findById($idSV);
        $sinhVien->setPoints($sinhVienDAO->getPointByIdSinhVien($idSV));
        return $sinhVien;
        
    }
    
}
