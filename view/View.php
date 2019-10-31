<?php
	class View{
		public function showAllData($posts){
			require_once('templates/posts.php');
		}
		public function insertData(){
			require_once('templates/addpost.php');
		}
		public function alertinsert($status){
			if ($status) {
				header('location: index.php?action=list');
			}else{
				echo'Add fail, <a href="http://localhost/phpmvc/?action=list">click here back to home</a>';
			}
	 	}
	 	public function delete($del){
	 		if($del){
	 			header('location: index.php?action=list');
	 		}

	 	}
	 	public function updateData($objTK){
	 		require_once('templates/updatepost.php');
	 	}
	 	public function alertupdate($update){
			if ($update) {
				header('location: index.php?action=list');
			}else{
				echo'update fail, <a href="http://localhost/phpmvc/?action=list">click here back to home</a>';
			}
	 	}
	 	public function search($search){
	 		if ($search) {
	 			require_once('templates/search.php');	
	 		}else{
	 			echo "Không có dữ liệu";
	 			
	 			}
	 		}

	}
?>