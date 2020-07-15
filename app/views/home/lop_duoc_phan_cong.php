<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style>
html{
  
    	
}
body{
     width: 60%;
     background: white;
}
h2{
    background: #00b2bf;
    color: #ffff;
    padding-top: 20px;
    padding-bottom: 20px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

#customers td, #customers th {
  border-bottom: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
 
}
</style>
<body>
<h2 style="padding-left: ">Thông tin lớp phân công cho thầy <?php  echo $datas[0]->getHoTenGiangVien() ?></h2>
<table id="customers">
   <tr>
       <th>Môn học</th>
       <th>Tên lớp</th>
       <th>Họ tên giảng viên</th>
       <th>Chuyên ngành</th>
       <th>Số giờ dậy</th>
       <th>Xem thông tin thành viên lớp</th>
   </tr>
   <?php
      foreach ($datas as $point){
          echo "
              <tr>
                  <th>".$point->getTenMH()."</th>
                  <th>".$point->getTenLop()."</th>
                  <th>".$point->getHoTenGiangVien()."</th>
                  <th>".$point->getChuyenNganh()."</th>
                  <th>".$point->getSoGio()."</th>
                  <th>".'<a type="button" href="/mvc/public/teacher/hienThiDanhSachSinhVienBangMaLop/'.$point->getMaLop().'"><button>Xem</button> <a/>'."</th>  
              </tr>
          ";
      }
  
  ?>	
</table>

 
</body>
</html>