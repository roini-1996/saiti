					<?php
					$pdo=new PDO('mysql:host=localhost;port=3306;dbname=id16798143_products_crud','id16798143_root','C1[@/~AMe_gmbi8G');
					$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

					$statement=$pdo->prepare('SELECT*FROM products');
					$statement->execute();
					$products=$statement->fetchAll(PDO::FETCH_ASSOC);//monacemebi amomige,rogorc asociaciuri masivi


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
					<h1>Products CRUD</h1>
					<p>
					 <a href="create.php" type="button" class="btn btn-sm btn-success">Add Product</a>
					</p>
					<table class="table">
						<thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Image</th>
							  <th scope="col">Title</th>
							  <th scope="col">price</th>
							  <th scope="col">Create Date</th>
							  <th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
									<?php foreach($products as $i =>$product){?>
							<tr>
								  <th scope="row"><?php echo $i+1 ?></th>
								  <td>
										<?php if ($product['image']):?>
										<img src="<?php echo $product['image'] ?> "alt="<?php echo $product['title'];?>" class="product-img">
										<?php endif ?>
								  </td>
								  <td>	<?php echo $product['title']?></td>
								  <td>	<?php echo $product['price']?></td>
								  <td>	<?php echo $product['create_date']?></td>
								  <td>
									  <button type="button" class="btn btn-sm btn-primary">Edit</button>
									  <button type="button" class="btn btn-sm btn-danger">Delete</button>
								  </td>
							</tr>
									<?php }?>
						
					  </tbody>
				</table>
			  </body>
		</html>