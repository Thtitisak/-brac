<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Personal history</title>
</head>
<body>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
<div id="container"  align="center">
	<form action="./History_section/reg_student" method="post">
	<h1>ประวัติส่วนตัว</h1>
	<div id="body"  align="center">
		<form action="" method="post">
		<table style="width:50%" border="0">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td>รหัสนักศึกษา </td>
		<td>
			<input type="text" name="s_id" placeholder="รหัสนักศึกษา">
		</td>
	</tr>
	<tr>
		<td>ชื่อ</td>
		<td>
			<input type="text" name="name" placeholder="ชื่อ">
		</td>
	</tr>
	<tr>
		<td>นามสกุล</td>
		<td>
			<input type="text" name="lname" placeholder="นามสกุล">
		</td>
	</tr>
	<tr>
		<td>วันที่เกิด</td>
				<td>
					<select name="date">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="12">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select> 
				<select name="mont">
					<option value="มกราคม">มกราคม</option>
					<option value="กุมภาพันธ์">กุมภาพันธ์</option>
					<option value="กุมภาพันธ์">มีนาคม</option>
					<option value="กุมภาพันธ์">เมษายน </option>
					<option value="กุมภาพันธ์">พฤษภาคม</option>
					<option value="กุมภาพันธ์">มิถุนายน</option>
					<option value="กุมภาพันธ์">กรกฎาคม</option>
					<option value="กุมภาพันธ์">สิงหาคม </option>
					<option value="กุมภาพันธ์">กันยายน</option>
					<option value="กุมภาพันธ์">ตุลาคม</option>
					<option value="กุมภาพันธ์">พฤศจิกายน</option>
					<option value="กุมภาพันธ์">ธันวาคม</option>
				</select> 
            ปี พ.ศ.<input type="text" name="t3" size="5">
	</tr>
	<tr>
    <td>ที่อยู่</td>
    <td>
        <input type="text" name="t4"> 
    </td>
</tr>
<tr>
    <td>ตำบล</td>
    <td>
        <input type="text" name="t5">  
    </td>
</tr>
<tr>
    <td>อำเภอ</td>
    <td>
        <input type="text" name="t6">
    </td>
</tr>
<tr>
    <td>จังหวัด</td>
    <td>
        <input type="text" name="t7">
    </td>
</tr>
<tr>
    <td>สาขาวิชาเรียน</td>
    <td>
        <input type="text" name="t8" size="30">
    </td>
</tr>
<tr>
    <td>ปีการศึกษา</td>
    <td>
        <input type="text" name="t9" size="5">
    </td>
</tr>
	<tr>
        <td>
        <input type ="submit" name ="submit" value="บันทึก">
		</td>
    </tr>	
	</table>
	</form>
</body>
</html>
</body>

</html>