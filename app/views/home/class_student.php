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
  width: 70%;
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
<h1 style="justify-content: left;display: flex;padding-left: ">Manager Class</h1>
<table border="1px">
  <tr>
    <th>Mã Lớp</th>
    <th>Tên Lớp</th>
    <th>Danh sách sinh viên</th>
    <th>Thêm sinh viên vào lớp</th>
    <th>Xóa</th>
  </tr>
  <tbody>
  	<?php
	  	foreach ($datas as  $value) {
	  		# code...
	  		echo "<tr>
	  				<td>".$value->getMaLop()."</th>
	  				<td>".$value->getTenLop()."</th>
                    <td><a href=/mvc/public/class_student/hienThiSinhVienBangMaLop/".$value->getMaLop()."><button>Xem</button></a></th>
                    <td><a href='#'><button>Thêm</button></a></th>
                    <td><a href='#'><button>Xóa</button></a></th>
	  			</tr>";
		}
	?>
  </tbody>
</table>
</body>
</html>