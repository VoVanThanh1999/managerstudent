<?php 
class KhoaModel{
   public $maKhoa;
   public $tenKhoa;
/**
     * @return mixed
     */
    public function getMaKhoa()
    {
        return $this->maKhoa;
    }

/**
     * @return mixed
     */
    public function getTenKhoa()
    {
        return $this->tenKhoa;
    }

/**
     * @param mixed $maKhoa
     */
    public function setMaKhoa($maKhoa)
    {
        $this->maKhoa = $maKhoa;
    }

/**
     * @param mixed $tenKhoa
     */
    public function setTenKhoa($tenKhoa)
    {
        $this->tenKhoa = $tenKhoa;
    }

   
}