<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<h2 align="center">Sửa Tài Khoản</h2>
 <form action="?action=update" method="POST">
 	<input type="hidden" name="matk" value="<?php echo $objTK[0]['matk'] ?>">
 	<table align="center" border="2px">
 		<tr>
 			<th align="left">Mã tài khoản: <input style="margin-left:50px;  width: 175px" placeholder="<?php echo $objTK[0]['matk'] ?>" type="text" name="matk" id="matk" readonly></th>
 		</tr>
 		<tr>
 			<th align="left">Tên tài khoản: <input style="margin-left: 47px;  width: 175px" placeholder="<?php echo $objTK[0]['tentk'] ?>" type="text" name="tentk" id="tentk"></th>
 		</tr>
 		<tr>
 			<th align="left">Password: <input style=" margin-left: 76px;  width: 175px" placeholder="<?php echo $objTK[0]['pass'] ?>" type="password" name="pass" id="pass"></th>
 		</tr>
 		<tr>
 			<th align="left">Tên đầy đủ: <input style="margin-left: 64px; width: 175px" placeholder="<?php echo $objTK[0]['fullname'] ?>" type="text" name="fullname" id="fullname"></th>
 		</tr>
 		<tr>
 			<th align="center"><input type="submit" name="ok" value="UPDATE"></th>
 		</tr>
 		</tbody>
 	</table>

 </form>
</body>
</html>