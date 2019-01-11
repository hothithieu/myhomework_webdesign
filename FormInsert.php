
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Exercises</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<div class="container-fluid" style="width: 30%">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"> Insert Information producs</h3>
				</div>
				<div class="panel-body">
					<form action="insertatementWebProject.php" method="POST" role="form">	
						<div class="form-group">
							<label for="">Producs_name</label>
							<input type = "text" class="form-control" name ="Producs_name" id = "Producs_name" placeholder="Input field" 
									value = "" required="required">
						</div>
						<div class="form-group">
							<label for="">Price</label>
							<input type = "number" class="form-control" name ="Price" id = "Price" placeholder="Input field" 
									value = "" required="required"  min="1">
						</div>
						<div class="form-group">
							<label for="">Quantity</label>
							<input type = "number" class="form-control" name ="Quantity" id ="Quantity" placeholder="Input field" 
									value = "" required="required" min="1">
						</div>


                        <div class="form-group">
                        	<label> Danh mục sản phẩm</label>
                        	<select class="form-control" name="category">
                        <?php
                        	include("connect.php");
                        	error_reporting(1);
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($link,$sql);
                            if($result)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>   
                        <?php
                                }
                            }
                       ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Chọn hình ảnh sản phẩm </label>
                        <input type="file" name="FileImage" required>
                        <span style="color: red"><?php echo $notimage; ?></span>
                    </div>

					<div class="form-group">
						<label for="">comment</label>
							<input type="text" class="form-control" id="comment" name="comment" placeholder="Input field" 
									value="" required="required">
					</div>
					
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button type="submit" class="btn btn-primary" value="Insert">Insert</button>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<a href="formUpdate.php"><button type="submit" class="btn btn-primary" value="Update">Update</button></a>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button type="submit" class="btn btn-primary" value="cancel">Delete</button>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button type="submit" class="btn btn-primary" value="cancel">Cancel</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html> 

	