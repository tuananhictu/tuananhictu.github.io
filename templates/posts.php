<!DOCTYPE html>
<html>
<head>
	<title>quan ly tai khoan</title>
	<style type="text/css">
		table tr:nth-child(even){
			background: #f7d17a;
			color: #ff6000;
		}
	</style>
</head>
<body>
	<div class="container" align="center">
		<h2 style="color: red">Quản Lý Tài Khoản</h2>
		<button><td><a href="http://localhost/phpmvc/?action=insertData" style="text-decoration: none;">Thêm tài khoản</a></td></button>
		<form action="" method="GET">
			<table>
				<tr>
					<input type="hidden" name="action" value="search">
					<td><input type="text" name="search" placeholder="Nhập từ khóa"></td>
					<td><input type="submit" name="ok" value="search"></td>
				</tr>
			</table>
            </form>
	</div>
	<div style="margin-top: 10px ">
	<table align="center" width="700px" border="2px">
		<tr style="background: #caff00; color: #0600ff; font-weight: bold;"  >
			<td>Mã tài khoản</td>
			<td>Tên tài khoản</td>
			<td>PassWord</td>
			<td>Tên đầy đủ</td>
			<td>Thời gian tạo</td>	
			<td colspan="3">Option</td>
		</tr>
	<?php foreach ($posts as $post) { ?>
		<tr style=" font-weight:bold;">
			<td><?php echo $post['matk']?></td>
			<td><?php echo $post['tentk']?></td>
			<td><?php echo $post['pass']?></td>
			<td><?php echo $post['fullname']?></td>
			<td><?php echo $post['timetao']?></td>
			
			<td><button><a href="http://localhost/phpmvc/?action=updateData&MaTK=<?php echo $post['matk']?>" style="text-decoration: none">sua</a></button></td>
			<td><button><a href="http://localhost/phpmvc/?action=delete&MaTK=<?php echo $post['matk']?>" style="text-decoration: none;">xoa</a></button></td>
		</tr>

	<?php
		}
	?>
	</table>
</div>
</body>
</html>