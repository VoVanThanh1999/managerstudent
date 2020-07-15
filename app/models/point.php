<?php
class Point {
   private $lanThi1;
   private $diemThi;
   private $maMH;
/**
     * @return mixed
     */
    public function getLanThi1()
    {
        return $this->lanThi1;
    }
/**
     * @return mixed
     */
    public function getDiemThi()
    {
        return $this->diemThi;
    }
/**
     * @return mixed
     */
    public function getMaMH()
    {
        return $this->maMH;
    }
/**
     * @param mixed $lanThi1
     */
    public function setLanThi1($lanThi1)
    {
        $this->lanThi1 = $lanThi1;
    }
/**
     * @param mixed $diemThi
     */
    public function setDiemThi($diemThi)
    {
        $this->diemThi = $diemThi;
    }
/**
     * @param mixed $maMH
     */
    public function setMaMH($maMH)
    {
        $this->maMH = $maMH;
    }
    
}