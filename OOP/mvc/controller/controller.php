<?php
include 'model/model.php';
class Controller
{
	public function handleRequest()
	{
		$action = isset($_GET['action']) ? $_GET['action'] : 'home';
		$model = new Model();
		switch ($action) {
			case 'home':
				include 'view/home.php';
				break;
			case 'news':
				$newList = $model->getNews();
				include 'view/news.php';
				break;
			case 'products':
				$productList = $model->getProductList();
				include 'view/products.php';
				break;
			case 'contact':
				include 'view/contact.php';
				break;
			case 'add_product':
				include 'view/add_product.php';
				break;
			case 'submitAdd':
				$this->Add_Product();
				break;
			case 'edit_product':
				$product = $this->GetProduct();
				include 'view/edit_product.php';
				break;
			case 'submitEdit':
				$this->Edit_Product();
				break;
			case 'Delete':
				$this->Delete();
				break;
			default:
				include 'view/home.php';
				break;
		}
	}

	public function GetProduct()
	{
		$model = new Model();
		$res = $model->GetProduct($_GET['id']);
		$product = mysqli_fetch_array($res);
		return $product;
	}
	public function Add_Product()
	{
		$model = new Model();
		if (isset($_POST['submitAdd'])) {
			$model->Add($_POST['title'], $_POST['description'], $_POST['price'], $_POST['discount']);
			header("Location: index.php?action=products");
			exit;
		}
	}
	public function Edit_Product()
	{
		$model = new Model();
		if (isset($_POST['submitEdit'])) {
			$model->Edit($_POST['id'], $_POST['title'], $_POST['description'], $_POST['price'], $_POST['discount']);
			header("Location: index.php?action=products");
			exit;
		}
	}
	public function Delete()
	{
		$model = new Model();
		$model->Delete($_GET['id']);
		header("Location: index.php?action=products");
		exit;
	}
}
