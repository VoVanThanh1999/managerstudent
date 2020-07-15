<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
button{
  background-color: #4CAF50; /* Green */
  color: white;
  padding: 5px 12px;
  text-align: center;
  margin-right: -40px;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
</style>
<body>
<h1 style="justify-content: center;display: flex;padding-left: ">Manager Student</h1>
<table border="1px">
  <tr>
    <th>Mã GV</th>
    <th>Họ tên</th>
    <th>Chuyên ngành</th>
    <th>Lớp được phân công</th>
  </tr>
  <tbody>
  	<?php
	  	foreach ($datas as  $value) {
	  		# code...
	  		
	  		echo "<tr>
	  				<td>".$value->getMaGV()."</th>
	  				<td>".$value->getHoTen()."</th>
	  				<td>".$value->getChuyenNganh()."</th>
	  				<td>".'<a type="button" href="/mvc/public/teacher/getLopDuocPhanCongByIdTeacher/'.$value->getMaGV().'"><button>Xem</button> <a/>'."</th>
	  			</tr>";
		}
	?>
  </tbody>
</table>
</body>
</html>