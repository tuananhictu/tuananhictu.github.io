<?php
	class Model{
		public function ShowData(){
			$conn = mysqli_connect('localhost', 'root', '', 'qltaikhoan');
			mysqli_set_charset($conn,'utf8');
			if (mysqli_connect_errno()) {
				echo'Connect_error: '. mysqli_connect_error();
			}
			$result = $conn -> query("SELECT * FROM qltk");
			$posts = array();
			if ($result -> num_rows > 0) {
				while ($post = mysqli_fetch_assoc($result)) {
						$posts[] = $post;
				}
			}
			return $posts;
		}

		public function getACC($MaTK){
			$conn = mysqli_connect('localhost', 'root', '', 'qltaikhoan');
			mysqli_set_charset($conn,'utf8');
			if (mysqli_connect_errno()) {
				echo'Connect_error: '. mysqli_connect_error();
			}
			$result = $conn -> query("SELECT * FROM qltk WHERE matk = '$MaTK'");
			$posts = array();
			if ($result -> num_rows > 0) {
				while ($post = mysqli_fetch_assoc($result)) {
						$posts[] = $post;
				}
			}
			return $posts;
		}

		public function insertData($post){
			$conn = mysqli_connect('localhost', 'root', '', 'qltaikhoan');
			mysqli_set_charset($conn,'utf8');
			if (mysqli_connect_errno()) {
				echo'Connect_error: '. mysqli_connect_error();
			}
			$time = date('Y-m-d H:i:s');

			$sql = "INSERT INTO `qltk` (`matk`, `tentk`, `pass`, `fullname`, `timetao`) VALUES ('" . $post['matk'] . "', '" . $post['tentk'] . "', '" . $post['pass'] . "', '" . $post['fullname'] . "', '" . $time . "');";
		
			$rs = $conn -> query($sql);
			return $rs;
		}
		public function delete($MaTK){
			$conn = mysqli_connect('localhost', 'root', '', 'qltaikhoan');
			mysqli_set_charset($conn,'utf8');
			if (mysqli_connect_errno()) {
				echo'Connect_error: '. mysqli_connect_error();
			}
			$result = $conn -> query("DELETE FROM qltk WHERE matk = '$MaTK'");
			return $result;
			 //$rs = $conn ->query($del);
			// return $rs;
		}
		public function updateData($post){
			$conn = mysqli_connect('localhost', 'root', '', 'qltaikhoan');
			mysqli_set_charset($conn,'utf8');
			if (mysqli_connect_errno()) {
				echo'Connect_error: '. mysqli_connect_error();
			}
			$time = date('Y-m-d H:i:s');
			$sql = "UPDATE `qltk` SET `tentk`='".$post['tentk']."', `pass` = '".$post['pass']."', `fullname` = '".$post['fullname']."',`timetao`= '".$time."' WHERE `matk`='".$post['matk']."'";
			$rs = $conn -> query($sql);
			return $rs;
		}
		public function search($search){
			$conn = mysqli_connect('localhost', 'root', '', 'qltaikhoan');
			mysqli_set_charset($conn,'utf8');
			if (mysqli_connect_errno()) {
				echo'Connect_error: '. mysqli_connect_error();
			}
			$result = $conn -> query("SELECT * FROM qltk WHERE matk like '%$search%' or tentk like '%$search%' or fullname like '%$search%'");
			$posts = array();
			if ($result -> num_rows > 0) {
				while ($post = mysqli_fetch_assoc($result)) {
						$posts[] = $post;
				}
			}
			return $posts;	
		}
	}
?>