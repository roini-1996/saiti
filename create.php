							<?php
							$pdo=new PDO('mysql:host=localhost;port=3306;dbname=id16798143_products_crud','id16798143_root','C1[@/~AMe_gmbi8G');
							$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);





							$errors=[];
							$title='';
							$description='';
							$price='';
							if ($_SERVER['REQUEST_METHOD']==='POST'){
								// echo '<pre>';
								// var_dump($_POST);
								// echo '</pre>';

							$title=$_POST['title'];
							$description=$_POST['description'];
							$price=$_POST['price'];

							$image=$_FILES['image']??null;//tu ar arsebobs imigi iyos null
							$imagePath='';
							if(!is_dir('images')){
								mkdir('images');
							}
							if ($image){
								$imagePath='images/'.randomString(8).'/'.$image['name'];
								mkdir(dirname($imagePath));
								move_uploaded_file($image['tmp_name'],$imagePath);
							}
							if(!$title){
								$errors[]='Product title is required';
							}

							if (!$price){
								$errors[]='producs price is required';
							}
							if(empty($errors)){
								/*$pdo->exec("INSERT INTO products(title,image,description,price,create_date)
							VALUES('$title', '','$description','$price','".date('Y-m-d H:i:s')."')")*///es araa kargi
							$statement=$pdo->prepare("INSERT INTO products(title,image,description,price,create_date)
							VALUES(:title, :image, :description, :price, :date)");
							$statement->bindValue(':title',$title);
							$statement->bindValue(':image',$imagePath);
							$statement->bindValue(':description',$description);
							$statement->bindValue(':price',$price);
							$statement->bindValue(':date',date('Y-m-d H:i:s'));
							$statement->execute();//bazashi sheqvs info
							header('Location:index.php');
							}
							}
							FUNCTION randomString($n)//random stringis shesaqmneli funqcia
							{
								$characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';//CHARAQTEREBI GAMOCXADDA
								$str='';
							for($i=0;$i<$n;$i++)
							{
								$index=rand(0,strlen($characters)-1);
								$str .=$characters[$index];
							}
							return $str;
							}
							?>
	<!doctype html>
	<html lang="en">
		  <head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<!-- Bootstrap CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
				<link href="app.css" rel="stylesheet"/>
				<title>Product Crud!</title>
		  </head>
	  <body>
				<h1>Create New Product</h1>
				<?php if (!empty($errors)):?>
				
				<div class="alert alert-danger">
				<?php foreach ($errors as $error): ?>
				<div><?php echo $error?></div>
				<?php endforeach;?>
				</div>
				
				<?php endif;?>
				
				<form method="POST" enctype="multipart/form-data">
						<div class="mb-3">
						<label >Product Image</label><br>
						<input type="file"  name="image">
						</div>
						<div class="mb-3">
						<label >Product title</label>
						<input type="text" name="title" class="form-control" value="<?php echo $title ?>">
						</div
						<div class="mb-3">
						<label >Product Description</label>
						<textarea type="text" name="description" class="form-control" ><?php echo $description ?></textarea>
						</div
						<div class="mb-3">
						<label >Product Price</label>
						<input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
				</form>
	   
	  </body>
	</html>