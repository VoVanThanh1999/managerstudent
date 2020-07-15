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
<h2 style="padding-left: ">Thông tin điểm <?php  echo $datas->getHoTen() ?></h2>
<table id="customers">
  <tr>
    <th>Lần thi</th>
    <th>Điểm thi</th>
    <th>Mã môn học</th>
  </tr>
  <?php 
      foreach ($datas->getPoints() as $point){
          echo "
              <tr>
                  <th>".$point->getLanThi1()."</th>
                  <th>".$point->getDiemThi()."</th>
                  <th>".$point->getMaMH()."</th>
              </tr>
          ";
      }
  
  ?>	
</table>

 
</body>
</html>