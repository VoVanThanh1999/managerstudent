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
    <th>Mã SV</th>
    <th>Họ tên</th>
    <th>Giới tính</th>
    <th>Ngày sinh</th>
    <th>Mã lớp</th>
    <th>Sữa</th>
    <th>Xóa</th>
    <th>Xem điểm</th>
  </tr>
  <tbody>
  	<?php
	  	foreach ($datas as  $value) {
	  		# code...
	  		$male =  $value->getGioiTinh()==0?"Nam":"Ná»¯";
	  		echo "<tr>
	  				<td>".$value->getMaSV()."</th>
	  				<td>".$value->getHoTen()."</th>
	  				<td>".$male."</th>
	  				<td>".$value->getNgaySinh()."</th>
	  				<td>".$value->getMaLop()."</th>
	  				<td>".'<a type="button" href="/mvc/public/home/getById/'.$value->getMaSV().'"> <button>Edit</button> <a/>'."</th>
	  				<td>".'<a type="button" href="/mvc/public/home/deletebyid/'.$value->getMaSV().'"><button>liminate</button> <a/>'."</th>
	  				<td>".'<a type="button" href="/mvc/public/home/getPointByIdSinhVien/'.$value->getMaSV().'"><button>liminate</button> <a/>'."</th>
	  			</tr>";
		}
	?>
  </tbody>
</table>
</body>
</html>