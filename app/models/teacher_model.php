<?php 
require_once '../app/models/Khoa.php';
class TeacherModel {
    public $maGV;
    public $hoTen;
    public $chuyenNganh;
    public $khoas ;
    /**
     * @return mixed
     */
    public function getMaGV()
    {
        return $this->maGV;
    }

    /**
     * @return mixed
     */
    public function getHoTen()
    {
        return $this->hoTen;
    }

    /**
     * @return mixed
     */
    public function getChuyenNganh()
    {
        return $this->chuyenNganh;
    }

    /**
     * @return mixed
     */
    public function getKhoa()
    {
        return $this->khoa;
    }

    /**
     * @param mixed $maGV
     */
    public function setMaGV($maGV)
    {
        $this->maGV = $maGV;
    }

    /**
     * @param mixed $hoTen
     */
    public function setHoTen($hoTen)
    {
        $this->hoTen = $hoTen;
    }

    /**
     * @param mixed $chuyenNganh
     */
    public function setChuyenNganh($chuyenNganh)
    {
        $this->chuyenNganh = $chuyenNganh;
    }

    /**
     * @param mixed $khoa
     */
    public function setKhoa($khoa)
    {
        $this->khoa = $khoa;
    }

    
    
    
    
}