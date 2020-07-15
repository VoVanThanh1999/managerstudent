<?php 
class PhanCongDTO{
    public $tenMH;
    public $soGio;
    public $maLop;
    public $tenLop;
    public $hoTenGiangVien;
    public $chuyenNganh;
    public function getTenMH()
    {
        return $this->tenMH;
    }

    public function getSoGio()
    {
        return $this->soGio;
    }

    public function getMaLop()
    {
        return $this->maLop;
    }

    public function getTenLop()
    {
        return $this->tenLop;
    }

    public function getHoTenGiangVien()
    {
        return $this->hoTenGiangVien;
    }

    public function getChuyenNganh()
    {
        return $this->chuyenNganh;
    }

    public function setTenMH($tenMH)
    {
        $this->tenMH = $tenMH;
    }

    public function setSoGio($soGio)
    {
        $this->soGio = $soGio;
    }

    public function setMaLop($maLop)
    {
        $this->maLop = $maLop;
    }

    public function setTenLop($tenLop)
    {
        $this->tenLop = $tenLop;
    }

    public function setHoTenGiangVien($hoTenGiangVien)
    {
        $this->hoTenGiangVien = $hoTenGiangVien;
    }

    public function setChuyenNganh($chuyenNganh)
    {
        $this->chuyenNganh = $chuyenNganh;
    }

    

}