<?php
	class Controller{
		public function ShowData(){
			require_once('model/model.php');
			$Model = new Model();
			$posts = $Model -> ShowData();

			require_once('view/View.php');
			$View = new View();
			$View ->showAllData($posts);
		}
		public function insertData(){

			require_once('view/View.php');
			$View = new View();
			$View ->insertData();
		}
		public function insert(){
			$matk = $_POST['matk'];
			$tentk = $_POST['tentk'];
			$pass = $_POST['pass'];
			$fullname = $_POST['fullname'];

			$post = array(
				'matk' => $matk,
				'tentk' => $tentk,
				'pass' => $pass,
				'fullname' => $fullname,
			);

			require_once('model/model.php');
			$Model = new Model();
			$status = $Model -> insertData($post);

			require_once('view/View.php');
			$View = new View();
			$View ->alertinsert($status);
		}
		public function delete(){
			$id = $_GET['MaTK'];
			require_once('model/model.php');
			$Model = new Model();
			$del = $Model -> delete($id);

			require_once('view/View.php');
			$View = new View();
			$View ->delete($del);
		}
		public function updateData(){
 			require_once('model/model.php');
			$Model = new Model();
			$objTK = $Model->getAcc($_GET['MaTK']);

			require_once('view/View.php');
			$View = new View();
			$View ->updateData($objTK);
		}
		public function update(){
			// $id = "SELECT "
			$matk = $_POST['matk'];
			$tentk = $_POST['tentk'];
			$pass = $_POST['pass'];
			$fullname = $_POST['fullname'];

			$post = array(
				'matk' => $matk,
				'tentk' => $tentk,
				'pass' => $pass,
				'fullname' => $fullname,
			);

			require_once('model/model.php');
			$Model = new Model();
			$update = $Model -> updateData($post);

			require_once('view/View.php');
			$View = new View();
			$View ->alertupdate($update);
		}
		public function search(){
			if (isset($_GET['search'])) {
					$key = $_GET['search'];
					require_once('model/model.php');
					$Model = new Model();
					$search = $Model -> search($key);
			}
			require_once('view/View.php');
			$View = new View();
			$View ->search($search);
		}
	}
?>