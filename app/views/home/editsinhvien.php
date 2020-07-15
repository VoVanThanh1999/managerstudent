<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
html{
	font-size: 20px;
	justify-content: center;
	display: flex;
	background: #dbdbdb;
}

tr:hover {background-color:#f5f5f5;}

.form{
background: white;
padding: 30px 50px;
border-radius: 2px;
border-style:groove;
}
.form input{
	
	margin-top: 5px;
	width: 300px;
	height: 30px;
	font-size: 15px;
}
#submit{
  background-color: green; /* Green */
  color: white;
  padding: 10px 153px ;
  text-align: center;
  border: none;
  margin-right: 0px;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  margin-bottom: 30px;
}
</style>
<body>

<br>
<div class="form">
	
	<h1>Thông tin sinh viên</h1>
<?php echo $datas->getHoTen() ?>;
	<br/><br/>
	<?php 
		$date=date_create($datas->getNgaySinh());
	echo '<form method="POST"  action="/mvc/public/home/editById">
	  <label for="fmasv">MÃ SV:</label><br>
	  <input  type="text" id="fmasv"  name="fmasv" value="'.$datas->getMaSV().'"><br>
	   <label >Họ tên:</label><br>
	  <input  type="" name="fhoten"  value="'.$datas->getHoTen().'" ><br/>

	  <label>Ngày sinh:</label><br>
	    <input  name="fnamsinh" type="date" value="'.date_format($date,"Y/m/d").'" ><br>
	    <br>
	  	<input type="submit" name="" id="submit" value="Sữa">
	</form>	'

	?>

	
</div>

</body>
</html>