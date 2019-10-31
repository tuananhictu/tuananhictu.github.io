
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>

	<h2 align="center">Thêm Tài Khoản</h2>
 <form action="?action=insert" method="POST">
 	<table align="center" border="2px">
 		<tr>
 			<th align="left">Mã tài khoản: <input style="margin-left:70px ;  width: 175px"  type="text" name="matk"></th>
 		</tr>
 		<tr>
 			<th align="left">Tên tài khoản: <input style="margin-left: 66px;  width: 175px"  type="text" name="tentk"></th>
 		</tr>
 		<tr>
 			<th align="left">Password: <input style=" margin-left: 95px;  width: 175px" type="password" name="pass"></th>
 		</tr>
 		<tr>
 			<th align="left">Tên đầy đủ: <input style="margin-left: 84px; width: 175px" type="text" name="fullname"></th>
 		</tr>
 		<tr>
 			<th align="center"><input type="submit" name="ok" value="ADD"></th>
 		</tr>
 		</tbody>
 	</table>

 </form>
</body>
</html>