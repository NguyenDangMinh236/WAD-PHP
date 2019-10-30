<?php 
	include 'config/database.php';
 class Model extends Connect {
 		public function getProductList() {
 			$sql = "SELECT * FROM products";
 			return mysqli_query($this->connect(), $sql);
		 }

		public function getProduct($id){
			$sql = "SELECT * FROM products WHERE id=$id";
			return mysqli_query($this->connect(),$sql);
		}

 		public  function  Add($title, $description, $price, $discount){
			 $sql = "INSERT INTO products(title, description, price, discount) VALUE ('$title', '$description', '$price','$discount')";
 		    return mysqli_query($this->connect(),$sql);
		}
		
		public function Edit($id,$title, $description, $price, $discount)
		{
			$sql = "UPDATE products SET title ='$title', description = '$description', price ='$price', discount = '$discount' WHERE id = '$id' ";
			return mysqli_query($this->connect(),$sql);
		}

		public function View($id)
		{
			$sql = "SELECT * FROM products WHERE id=$id";
			return mysqli_query($this->connect(),$sql);
		}

		public function Delete($id){
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}
		public function checkLogin($username,$password)
		{
			$sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";
			$check = mysqli_query($this->connect(),$sql);
			return mysqli_fetch_array($check);
		}
 }
?>