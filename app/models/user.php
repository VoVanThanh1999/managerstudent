<?php
/**
 * 
 */
require_once '../app/models/Point.php';
class SinhVien 
{
	public $maSV;
	public $hoTen;
	public $gioiTinh;
	public $ngaySinh;
	public $maLop;
	public $tenLop;
	public  $points = array();
	
	function __construct() {
	    
	}
	 /**
     * @return ArrayObject
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param ArrayObject $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

   

     public function setTenLop($tenLop){
     	$this->tenLop=$tenLop;
     }
     public function getTenLop(){
     	return $this->tenLop;
     }

     public function setMaSV($maSV) {
	    $this->maSV = $maSV;
	  }

	 public function getMaSV() {
	    return $this->maSV;
	}

	 public function setHoTen($hoTens) {
	    $this->hoTen = $hoTens;
	  }

	 public function getHoTen() {
	    return $this->hoTen;
	}

	 public function setGioiTinh($gioiTinh) {
	    $this->gioiTinh = $gioiTinh;
	}

	 public function getGioiTinh() {
	    return $this->gioiTinh;
	}

	 public function setNgaySinh($ngaySinh) {
	    $this->ngaySinh = $ngaySinh;
	}

	 public function getNgaySinh() {
	    return $this->ngaySinh;
	}
	public function setMaLop($maLop){
		$this->maLop = $maLop;
	}
	public function getMaLop(){
		return $this->maLop;
	}
    
}