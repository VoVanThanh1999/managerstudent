<?php 
class Class_Model{
    public $maLop;
    public $tenLop;
    public $maKhoa;
    public function getMaLop()
    {
        return $this->maLop;
    }

    public function getTenLop()
    {
        return $this->tenLop;
    }

    public function getMaKhoa()
    {
        return $this->maKhoa;
    }

    public function setMaLop($maLop)
    {
        $this->maLop = $maLop;
    }

    public function setTenLop($tenLop)
    {
        $this->tenLop = $tenLop;
    }

    public function setMaKhoa($maKhoa)
    {
        $this->maKhoa = $maKhoa;
    }

    
    
   
    
}